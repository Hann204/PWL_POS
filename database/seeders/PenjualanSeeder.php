<?php

namespace Database\Seeders;

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
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2023-12-20',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2023-12-21',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Alice Brown',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2023-12-22',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Bob White',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2023-12-23',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Charlie Black',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2023-12-24',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Daisy Green',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2023-12-25',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Eve Blue',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2023-12-26',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Frank Yellow',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2023-12-27',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Grace Violet',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2023-12-28',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Harry Orange',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2023-12-29',
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
