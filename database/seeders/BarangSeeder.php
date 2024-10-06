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
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MIGR',
                'barang_nama' => 'Mie Goreng',
                'harga_beli' => 2000,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MIRN',
                'barang_nama' => 'Mie Goreng Rendang',
                'harga_beli' => 2000,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'CHTT',
                'barang_nama' => 'Chitato',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'CHKI',
                'barang_nama' => 'Chiki Balls',
                'harga_beli' => 7000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'QTLA',
                'barang_nama' => 'Qtela',
                'harga_beli' => 1500,
                'harga_jual' => 2500,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'PCRI', 
                'barang_nama' => 'Pocari Sweat',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'IORN',
                'barang_nama' => 'ION Water',
                'harga_beli' => 7000,
                'harga_jual' => 9000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'ORON',
                'barang_nama' => 'Oronamin C',
                'harga_beli' => 9000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'CHCO',
                'barang_nama' => 'Choki Choki',
                'harga_beli' => 1000,
                'harga_jual' => 1500,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'KOPK',
                'barang_nama' => 'Kopiko',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'MNTZ',
                'barang_nama' => 'Mentos',
                'harga_beli' => 3000,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 5,
                'barang_kode' => 'GGMI',
                'barang_nama' => 'Gudang Garam Merah Isi 12',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'GGMF',
                'barang_nama' => 'Gudang Garam Filter',
                'harga_beli' => 15000,
                'harga_jual' => 18000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'GGSP',
                'barang_nama' => 'Gudang Garam Surya Pro Mild',
                'harga_beli' => 17000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'GGSPC',
                'barang_nama' => 'Gudang Garam Signature',
                'harga_beli' => 16000,
                'harga_jual' => 19000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
