<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function callback(Request $request)
    {
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');

        try {
            $notification = new Notification();
            $transaction = $notification->transaction_status;
            $type = $notification->payment_type;
            $order_id = $notification->order_id;
            $fraud = $notification->fraud_status;

            $pesanan = Pesanan::where('kode_pesanan', $order_id)->first();

            if (!$pesanan) {
                return response()->json(['message' => 'Pesanan tidak ditemukan'], 404);
            }

            if ($transaction == 'capture') {
                if ($type == 'credit_card') {
                    if ($fraud == 'challenge') {
                        $pesanan->status_pembayaran = 'menunggu';
                    } else {
                        $pesanan->status_pembayaran = 'berhasil';
                    }
                }
            } else if ($transaction == 'settlement') {
                $pesanan->status_pembayaran = 'berhasil';
            } else if ($transaction == 'pending') {
                $pesanan->status_pembayaran = 'menunggu';
            } else if ($transaction == 'deny') {
                $pesanan->status_pembayaran = 'gagal';
            } else if ($transaction == 'expire') {
                $pesanan->status_pembayaran = 'gagal';
            } else if ($transaction == 'cancel') {
                $pesanan->status_pembayaran = 'gagal';
            }

            $pesanan->save();

            return response()->json(['message' => 'Notification handled']);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
