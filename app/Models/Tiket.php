<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tiket';

    protected $fillable = [
        'pesanan_id',
        'kode_tiket',
        'qr_code',
        'sudah_digunakan',
        'waktu_digunakan',
    ];

    protected $casts = [
        'sudah_digunakan' => 'boolean',
        'waktu_digunakan' => 'datetime',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
