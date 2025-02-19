<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;

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

//================================================================================
//tampilan data
Route::get('/Penjualan',[PenjualanController::class,'index']);
//edit data
Route::get('/penjualan/{PenjualanID}/edit',[Penjualancontroller::class,'edit']);
//tambah data
Route::get('/penjualan/tambah',[PenjualanController::class,'tambah']);
// kirim data
Route::post('/penjualan/kirim',[PenjualanController::class,'kirim']);
//hapus data 
Route::delete('/penjualan/{PenjualanID}',[PenjualanController::class,'delete']);
// update
Route::put('/penjualan/{PenjualanID}',[PenjualanController::class,'update']);
//================================================================================