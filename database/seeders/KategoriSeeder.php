<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriData = [
            ['keterangan' => 'Informasi'],
            ['keterangan' => 'Cerita'],
            ['keterangan' => 'Tutorial'],
            ['keterangan' => 'Tips'],
            ['keterangan' => 'Berita'],
        ];

        foreach ($kategoriData as $kategori) {
            Kategori::create($kategori);
        }
    }
}
