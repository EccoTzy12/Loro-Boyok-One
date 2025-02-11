<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

//================================================================================
// tampilan data
Route::get('/Pelanggan',[PelangganController::class,'index']);
// tambah data
Route::get('/Pelanggan/tambah',[PelangganController::class,'tambah']);
// kirim data
Route::post('/Pelanggan/kirim',[PelangganController::class,'kirim']);
// hapus data
Route::delete('/Pelanggan/{PelangganID}',[PelangganController::class,'delete']);
// edit data
Route::get('/Pelanggan/{PelangganID}/edit',[PelangganController::class,'edit']);
// update data
Route::put('/Pelanggan/{PelangganID}',[PelangganController::class,'update']);
// ===============================================================================