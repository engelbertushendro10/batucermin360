<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('pesanan', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('acara_id');

        $table->string('kode_pesanan')->unique();
        $table->integer('jumlah_tiket');
        $table->integer('total_harga');

        $table->string('nama_pembeli');
        $table->string('email_pembeli');
        $table->string('no_hp_pembeli');

        $table->string('status_pembayaran')->default('menunggu');
        $table->string('metode_pembayaran')->nullable();
        $table->string('snap_token')->nullable();
        $table->dateTime('waktu_bayar')->nullable();

        $table->timestamps();

        // FOREIGN KEY MANUAL (LEBIH STABIL)
        $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');

        $table->foreign('acara_id')
              ->references('id')
              ->on('acara')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
