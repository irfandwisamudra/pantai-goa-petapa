<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::create([
            'jenis_kendaraan' => 'Mobil'
        ]);

        Kendaraan::create([
            'jenis_kendaraan' => 'Motor'
        ]);

        Kendaraan::create([
            'jenis_kendaraan' => 'Sepeda'
        ]);

        Kendaraan::create([
            'jenis_kendaraan' => 'Berjalan Kaki'
        ]);
    }
}
