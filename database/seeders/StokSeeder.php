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
            // Stok untuk barang dari PT Indofood
            [
                'stok_id' => 1,
                'supplier_id' => 2, // Indofood
                'barang_id' => 1,   // Mie Goreng
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 2,
                'supplier_id' => 2, // Indofood
                'barang_id' => 2,   // Mie Goreng Rendang
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 3,
                'supplier_id' => 2, // Indofood
                'barang_id' => 3,   // Chitato
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 4,
                'supplier_id' => 2, // Indofood
                'barang_id' => 4,   // Chiki Balls
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 180,
            ],
            [
                'stok_id' => 5,
                'supplier_id' => 2, // Indofood
                'barang_id' => 5,   // Qtela
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 150,
            ],

            // Stok untuk barang dari Otsuka
            [
                'stok_id' => 6,
                'supplier_id' => 3, // Otsuka
                'barang_id' => 6,   // Pocari Sweat
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 80,
            ],
            [
                'stok_id' => 7,
                'supplier_id' => 3, // Otsuka
                'barang_id' => 7,   // ION Water
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 90,
            ],
            [
                'stok_id' => 8,
                'supplier_id' => 3, // Otsuka
                'barang_id' => 8,   // Oronamin C
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 120,
            ],

            // Stok untuk barang dari PT Gudang Garam
            [
                'stok_id' => 9,
                'supplier_id' => 1, // Gudang Garam
                'barang_id' => 9,   // Choki Choki
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 10,
                'supplier_id' => 1, // Gudang Garam
                'barang_id' => 10,  // Kopiko
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 180,
            ],
            [
                'stok_id' => 11,
                'supplier_id' => 1, // Gudang Garam
                'barang_id' => 11,  // Mentos
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 12,
                'supplier_id' => 1, // Gudang Garam
                'barang_id' => 12,  // Gudang Garam Merah Isi 12
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 170,
            ],
            [
                'stok_id' => 13,
                'supplier_id' => 1, // Gudang Garam
                'barang_id' => 13,  // Gudang Garam Filter
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 190,
            ],
            [
                'stok_id' => 14,
                'supplier_id' => 1, // Gudang Garam
                'barang_id' => 14,  // Gudang Garam Surya Pro Mild
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 160,
            ],
            [
                'stok_id' => 15,
                'supplier_id' => 1, // Gudang Garam
                'barang_id' => 15,  // Gudang Garam Signature
                'user_id' => 3,
                'stok_tanggal' => '2023-12-19',
                'stok_jumlah' => 140,
            ],
        ];

        DB::table('t_stok')->insert($data);
    }
}
