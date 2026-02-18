<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;

    protected $table = 'acara';
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'lokasi',
        'tanggal_acara',
        'harga_lokal',
        'harga_mancanegara',
        'kuota',
        'banner',
        'status',
    ];

    public function tikets(){
        return $this->hasMany(Tiket::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
