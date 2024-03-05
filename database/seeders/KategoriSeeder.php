<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'kategori_kode' => 'K1',
            'kategori_nama' => 'Painting Color',
            ],
            [
                'kategori_kode' => 'K2',
                'kategori_nama' => 'Brush',
            ],
            [
                'kategori_kode' => 'K3',
                'kategori_nama' => 'Painting Paper',
            ],
            [
                'kategori_kode' => 'K4',
                'kategori_nama' => 'Pencil',
            ],
            [
                'kategori_kode' => 'K5',
                'kategori_nama' => 'Drawing Pen',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}