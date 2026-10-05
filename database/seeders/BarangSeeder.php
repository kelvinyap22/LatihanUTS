<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $dataku = [[
            'nama_barang' => 'Buku Tulis',
            'kode_barang' => 'BT001',
            'jumlah_barang' => 100,
            'harga_barang' => 5000.00,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama_barang' => 'Pensil',
            'kode_barang' => 'PN001',
            'jumlah_barang' => 200,
            'harga_barang' => 2000.00,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama_barang' => 'Penghapus',
            'kode_barang' => 'PH001',
            'jumlah_barang' => 150,
            'harga_barang' => 1000.00,
            'created_at' => now(),
            'updated_at' => now()
        
        ],
        [
            'nama_barang' => 'Penggaris',
            'kode_barang' => 'PG001',
            'jumlah_barang' => 80,
            'harga_barang' => 3000.00,
            'created_at' => now(),
            'updated_at' => now()
        ]
        ];
         DB::table('barang')->insert($dataku);
    }
}
