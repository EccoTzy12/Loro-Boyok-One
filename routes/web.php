<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailpenjualanController;

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
// tampilan data
Route::get('/penjualan',[PenjualanController::class,'index']);
// edit data
Route::get('/penjualan/{PenjualanID}/edit',[PenjualanController::class,'edit']);
// tambah data
Route::get('/penjualan/tambah',[PenjualanController::class,'tambah']);
// kirim data
Route::post('/penjualan/kirim',[PenjualanController::class,'kirim']);
// hapus data 
Route::delete('/penjualan/{PenjualanID}',[PenjualanController::class,'delete']);
// update Data
Route::put('/penjualan/{PenjualanID}',[PenjualanController::class,'update']);
//================================================================================

//================================================================================
// tampilan data
Route::get('/produk',[produkcontroller::class,'index']);
// Tambah Data
Route::get('/produk/tambah',[ProdukController::class,'tambah']);
// Kirim Data
Route::post('/produk/kirim',[ProdukController::class,'kirim']);
// Edit Data
Route::get('/produk/{ProdukID}/edit',[ProdukController::class,'edit']);
// Update Data
Route::put('/produk/{ProdukID}',[ProdukController::class,'update']);
// Hapus Data
Route::delete('/produk/{ProdukID',[ProdukController::class,'delete']);
//================================================================================

//================================================================================
// tampilan data
Route::get('/detailpenjualan',[DetailpenjualanController::class,'index']);
// Tambah Data
Route::get('/detailpenjualan/tambah',[DetailpenjualanController::class,'tambah']);
// Kirim Data
Route::post('/detailpenjualan/kirim',[DetailpenjualanController::class,'kirim']);
// Edit data 
Route::get('/detailpenjualan/{DetailID}/edit',[DetailpenjualanController::class,'edit']);
// Update Data
Route::put('/detailpenjualan/{DetailID}',[DetailpenjualanController::class,'update']);
// Hapus Data
Route::delete('/detailpenjualan/{DetailID}',[DetailpenjualanController::class,'delete']);
//================================================================================