<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = [
                 [
                    'supplier_id' => 1,
                    'supplier_kode' => 'GG',
                    'supplier_nama' => 'PT. Gudang Garam',
                    'supplier_alamat' => 'Jl. Yang Pernah Ada no. 1'
                 ],
                 [
                    'supplier_id' => 2,
                    'supplier_kode' => 'IDF',
                    'supplier_nama' => 'PT. Indofood',
                    'supplier_alamat' => 'Jl. Yang Pernah Ada no. 2'
                 ],
                 [
                    'supplier_id' => 3,
                    'supplier_kode' => 'OTS',
                    'supplier_nama' => 'PT. Otsuka',
                    'supplier_alamat' => 'Jl. Yang Pernah Ada no. 3'
                 ],
            ];
            DB::table('m_supplier')->insert($data);
    }
}
