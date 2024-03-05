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
                'barang_id' =>21,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'barang_id' =>22,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'barang_id' =>23,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'barang_id' =>24,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'barang_id' =>25,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'barang_id' =>26,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            [
                'barang_id' =>27,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
                [
                'barang_id' =>28,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
                [
                'barang_id' =>29,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
                [
                'barang_id' => 30,
                'users_id' => 3,
                'stok_tanggal' => '2024-01-01',
                'stok_jumlah' => 30 ,
                ],
            //$table->unsignedBigInteger('stok_id');
            //$table->unsignedBigInteger('barang_id')->index();
            //$table->unsignedBigInteger('users_id')->index();
            //$table->date('stok_tanggal');
            //$table->integer('stok_jumlah');

        ];
        DB::table('t_stok')->insert($data);
    }
}