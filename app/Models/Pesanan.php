<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'user_id',
        'acara_id',
        'jenis_tamu',
        'kode_pesanan',
        'jumlah_tiket',
        'total_harga',
        'nama_pembeli',
        'email_pembeli',
        'no_hp_pembeli',
        'status_pembayaran',
        'metode_pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function acara()
    {
        return $this->belongsTo(Acara::class);
    }

    public function tikets()
    {
        return $this->hasMany(Tiket::class);
    }
}
