<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Detail_PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
             /* 
            [
                'detail_id' => 30,
                'barang_id' =>21,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            */
            [
                'detail_id' => 30,
                'penjualan_id' => 11,
                'barang_id' => 21,
                'harga' => 900000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 11,
                'barang_id' => 21,
                'harga' => 300000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 11,
                'barang_id' => 21,
                'harga' => 300000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 31,
                'penjualan_id' => 12,
                'barang_id' => 22,
                'harga' => 500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 31,
                'penjualan_id' => 12,
                'barang_id' => 22,
                'harga' => 500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 31,
                'penjualan_id' => 12,
                'barang_id' => 22,
                'harga' => 500000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 32,
                'penjualan_id' => 13,
                'barang_id' => 23,
                'harga' => 150000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 32,
                'penjualan_id' => 13,
                'barang_id' => 23,
                'harga' => 150000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 32,
                'penjualan_id' => 13,
                'barang_id' => 23,
                'harga' => 150000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 33,
                'penjualan_id' => 14,
                'barang_id' => 24,
                'harga' => 170000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 33,
                'penjualan_id' => 14,
                'barang_id' => 24,
                'harga' => 170000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 33,
                'penjualan_id' => 14,
                'barang_id' => 24,
                'harga' => 170000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 34,
                'penjualan_id' => 15,
                'barang_id' => 25,
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 34,
                'penjualan_id' => 15,
                'barang_id' => 25,
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 34,
                'penjualan_id' => 15,
                'barang_id' => 25,
                'harga' => 200000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 35,
                'penjualan_id' => 16,
                'barang_id' => 26,
                'harga' => 130000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 35,
                'penjualan_id' => 16,
                'barang_id' => 26,
                'harga' => 130000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 35,
                'penjualan_id' => 16,
                'barang_id' => 26,
                'harga' => 130000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 36,
                'penjualan_id' => 17,
                'barang_id' => 27,
                'harga' => 25000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 36,
                'penjualan_id' => 17,
                'barang_id' => 27,
                'harga' => 25000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 36,
            'penjualan_id' => 17,
            'barang_id' => 27,
            'harga' => 25000,
            'jumlah' => 1,
            ],
            [
                'detail_id' => 37,
                'penjualan_id' => 18,
                'barang_id' => 28,
                'harga' => 15000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 37,
                'penjualan_id' => 18,
                'barang_id' => 28,
                'harga' => 15000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 37,
                'penjualan_id' => 18,
                'barang_id' => 28,
                'harga' => 15000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 38,
                'penjualan_id' => 19,
                'barang_id' => 29,
                'harga' => 40000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 38,
                'penjualan_id' => 19,
                'barang_id' => 29,
                'harga' => 40000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 38,
                'penjualan_id' => 19,
                'barang_id' => 29,
                'harga' => 40000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 39,
                'penjualan_id' => 20,
                'barang_id' => 30,
                'harga' => 25000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 39,
                'penjualan_id' => 20,
                'barang_id' => 30,
                'harga' => 25000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 39,
                'penjualan_id' => 20,
                'barang_id' => 30,
                'harga' => 25000,
                'jumlah' => 1,
            ],

        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}