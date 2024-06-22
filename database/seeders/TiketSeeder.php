<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use App\Models\Tiket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kendaraan = Kendaraan::all();

        Tiket::create([
            'keterangan' => 'Tiket masuk mobil',
            'harga' => 10000,
            'kendaraan_uuid' => $kendaraan->firstWhere('jenis_kendaraan', 'Mobil')->uuid
        ]);

        Tiket::create([
            'keterangan' => 'Tiket masuk motor',
            'harga' => 5000,
            'kendaraan_uuid' => $kendaraan->firstWhere('jenis_kendaraan', 'Motor')->uuid
        ]);

        Tiket::create([
            'keterangan' => 'Tiket masuk sepeda',
            'harga' => 2000,
            'kendaraan_uuid' => $kendaraan->firstWhere('jenis_kendaraan', 'Sepeda')->uuid
        ]);

        Tiket::create([
            'keterangan' => 'Tiket masuk berjalan kaki',
            'harga' => 1000,
            'kendaraan_uuid' => $kendaraan->firstWhere('jenis_kendaraan', 'Berjalan Kaki')->uuid
        ]);
    }
}
