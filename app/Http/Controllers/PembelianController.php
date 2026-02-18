<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Pesanan;
use App\Models\Tiket;
use Illuminate\Http\Request;


class PembelianController extends Controller
{
public function beli(Request $request, $acaraId)
{
    $request->validate([
        'nama_pembeli' => 'required|string|max:255',
        'email_pembeli' => 'required|email|max:255',
        'no_hp_pembeli' => 'required|string|max:20',
        'jumlah_tiket' => 'required|integer|min:1',
        'metode_pembayaran' => 'required|in:online,lokasi',
        'jenis_tamu' => 'required|in:lokal,mancanegara',
    ]);

    $acara = Acara::findOrFail($acaraId);

    if ($acara->kuota < $request->jumlah_tiket) {
        return back()->with('error', 'Kuota tidak mencukupi');
    }

    $harga_satuan = ($request->jenis_tamu == 'lokal') ? $acara->harga_lokal : $acara->harga_mancanegara;
    $status_bayar = ($request->metode_pembayaran == 'online') ? 'menunggu' : 'booking';

    $pesanan = Pesanan::create([
        'user_id' => auth()->id(), // null if guest
        'acara_id' => $acara->id,
        'jenis_tamu' => $request->jenis_tamu,
        'kode_pesanan' => 'ORD-' . strtoupper(uniqid()),
        'jumlah_tiket' => $request->jumlah_tiket,
        'total_harga' => $harga_satuan * $request->jumlah_tiket,
        'nama_pembeli' => $request->nama_pembeli,
        'email_pembeli' => $request->email_pembeli,
        'no_hp_pembeli' => $request->no_hp_pembeli,
        'status_pembayaran' => $status_bayar,
        'metode_pembayaran' => $request->metode_pembayaran,
    ]);

    $acara->decrement('kuota', $request->jumlah_tiket);

    $msg = ($request->metode_pembayaran == 'online') 
        ? 'Pesanan berhasil dibuat. Silahkan lanjut ke pembayaran.' 
        : 'Booking berhasil! Silahkan bayar di lokasi dengan kode ' . $pesanan->kode_pesanan;

    return redirect()->route('pembelian.sukses', $pesanan->kode_pesanan)->with('success', $msg);
}

    public function sukses($kode)
    {
        $pesanan = Pesanan::with('acara')->where('kode_pesanan', $kode)->firstOrFail();
        
        $snapToken = null;
        if ($pesanan->metode_pembayaran == 'online' && $pesanan->status_pembayaran == 'menunggu') {
            // Set Midtrans Configuration
            \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
            \Midtrans\Config::$isProduction = config('services.midtrans.is_production');
            \Midtrans\Config::$isSanitized = config('services.midtrans.is_sanitized');
            \Midtrans\Config::$is3ds = config('services.midtrans.is_3ds');

            $params = [
                'transaction_details' => [
                    'order_id' => $pesanan->kode_pesanan,
                    'gross_amount' => (int) $pesanan->total_harga,
                ],
                'customer_details' => [
                    'first_name' => $pesanan->nama_pembeli,
                    'email' => $pesanan->email_pembeli,
                    'phone' => $pesanan->no_hp_pembeli,
                ],
                'item_details' => [
                    [
                        'id' => $pesanan->acara_id,
                        'price' => (int) ($pesanan->total_harga / $pesanan->jumlah_tiket),
                        'quantity' => $pesanan->jumlah_tiket,
                        'name' => $pesanan->acara->judul,
                    ]
                ],
            ];

            try {
                $snapToken = \Midtrans\Snap::getSnapToken($params);
            } catch (\Exception $e) {
                // Log error or handle gracefully
            }
        }

        return view('pembelian.sukses', compact('pesanan', 'snapToken'));
    }

    public function print($kode)
    {
        $tiket = \App\Models\Tiket::with(['pesanan.acara'])->where('kode_tiket', $kode)->firstOrFail();
        return view('pembelian.print', compact('tiket'));
    }





}
