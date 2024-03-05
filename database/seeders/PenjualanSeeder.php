<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'users_id' => 3,
                'pembeli' => 'Qyna',
                'penjualan_kode' => 'P1',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Anetha',
                'penjualan_kode' => 'P2',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Hiso',
                'penjualan_kode' => 'P3',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Katy',
                'penjualan_kode' => 'P4',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Mina',
                'penjualan_kode' => 'P5',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Desy',
                'penjualan_kode' => 'P6',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Rain',
                'penjualan_kode' => 'P7',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Eloise',
                'penjualan_kode' => 'P8',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Naomi',
                'penjualan_kode' => 'P9',
                'penjualan_tanggal' => '2024-01-01',
            ],
            [
                'users_id' => 3,
                'pembeli' => 'Jessica',
                'penjualan_kode' => 'P10',
                'penjualan_tanggal' => '2024-01-01',
            ],

            /* 
            [
                'barang_id' =>21,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            */
        ];
        DB::table('t_penjualan')->insert($data);
    }
}