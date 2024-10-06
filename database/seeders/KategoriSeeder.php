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
                'kategori_id' => 1,
                'kategori_kode' => "MB",
                'kategori_nama' => 'Makanan Berat',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'MR',
                'kategori_nama' => 'Makanan Ringan',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'DR',
                'kategori_nama' => 'Minuman',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'PR',
                'kategori_nama' => 'Permen',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'RK',
                'kategori_nama' => 'Rokok',
            ],
         ];
         DB::table('m_kategori')->insert($data);
    }
}
