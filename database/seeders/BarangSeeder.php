<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => '1',
                'barang_kode' => 'B11',
                'barang_nama' => 'Watercolor',
                'harga_beli' => 300000,
                'harga_jual' => 400000,
                ],
            [
                'kategori_id' => '11',
                'barang_kode' => 'B12',
                'barang_nama' => 'Acrylic',
                'harga_beli' => 400000,
                'harga_jual' => 500000,
                ],
        [
                'kategori_id' => '2',
                'barang_kode' => 'B21',
                'barang_nama' => 'Brush Koi',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
                ],
        [
                'kategori_id' => '2',
                'barang_kode' => 'B22',
                'barang_nama' => 'Brush Tombow',
                'harga_beli' => 120000,
                'harga_jual' => 170000,
                ],
         [
                'kategori_id' => '3',
                'barang_kode' => 'B31',
                'barang_nama' => 'Artemedia',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                ],
                [
                'kategori_id' => '3',
                'barang_kode' => 'B32',
                'barang_nama' => 'V-tec',
                'harga_beli' => 100000,
                'harga_jual' => 130000,
                ],
                [
                'kategori_id' => '4',
                'barang_kode' => 'B41',
                'barang_nama' => 'Faber Castell',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                ],
                [
                'kategori_id' => '4',
                'barang_kode' => 'B42',
                'barang_nama' => 'Greebel',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                ],
            [
                'kategori_id' => '5',
                'barang_kode' => 'B51',
                'barang_nama' => 'Sakura',
                'harga_beli' => 30000,
                'harga_jual' => 40000,
                ],
            [
                'kategori_id' => '5',
                'barang_kode' => 'B52',
                'barang_nama' => 'Artline',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                ],
        ];
        DB::table('m_barang')->insert($data);
    }
}