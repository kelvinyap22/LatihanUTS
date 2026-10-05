<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [[
            'nama' => 'Alat Tulis',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama' => 'Buku',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama' => 'Elektronik',
            'created_at' => now(),
            'updated_at' => now()
        ]
        ];
         DB::table('_kategori')->insert($dataku);
    }
}
