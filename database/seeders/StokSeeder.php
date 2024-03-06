<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' =>21,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'stok_id' => 2,
                'barang_id' =>22,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'stok_id' => 3,
                'barang_id' =>23,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'stok_id' => 4,
                'barang_id' =>24,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'stok_id' => 5,
                'barang_id' =>25,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'stok_id' => 6,
                'barang_id' =>26,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'stok_id' => 7,
                'barang_id' =>27,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
                [
                'stok_id' => 8,
                'barang_id' =>28,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
                [
                'stok_id' => 9,
                'barang_id' =>29,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
                [
                'stok_id' => 10,
                'barang_id' => 30,
                'user_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            //$table->unsignedBigInteger('stok_id');
            //$table->unsignedBigInteger('barang_id')->index();
            //$table->unsignedBigInteger('user_id')->index();
            //$table->date('stok_tanggal');
            //$table->integer('stok_jumlah');

        ];
        DB::table('t_stok')->insert($data);
    }
}