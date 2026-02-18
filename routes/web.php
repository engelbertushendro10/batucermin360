<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembelianController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index']);
// Route::middleware('auth')->post('/beli/{id}',[PembelianController::class,'beli']);


Route::post('/beli/{id}', [PembelianController::class, 'beli'])->name('beli.tiket');
Route::get('/pembelian/sukses/{kode}', [PembelianController::class, 'sukses'])->name('pembelian.sukses');
Route::post('/midtrans/callback', [\App\Http\Controllers\MidtransController::class, 'callback']);
Route::get('/tiket/print/{kode}', [PembelianController::class, 'print'])->name('tiket.print');