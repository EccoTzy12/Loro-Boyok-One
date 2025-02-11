<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Pelanggan::create([
            'PelangganID'=> 123,
            'NamaPelanggan' => 'Eko Sugeng Purwanto',
            'Alamat' => 'jlan. Bali',
            'NomerTelepon' => '085967098825',
        ]);

        Produk::create([
            'ProdukID' => 991,
            'NamaProduk' => 'Pulpen',
            'Harga' => 3000,
            'Stok' => 10,
        ]);

        Penjualan::create([
            'PenjualanID' => 61,
            'TanggalPenjualan' =>20250210,
            'TotalHarga' => 6000,
            'PelangganID' => 123,
        ]);

        Detailpenjualan::create([
            'DetailID' =>675,
            'PenjualanID' => 61,
            'ProdukID' => 991,
            'JumlahProduk' => 20,
            'Subtotal' => 200000,
        ]);
    }
}
