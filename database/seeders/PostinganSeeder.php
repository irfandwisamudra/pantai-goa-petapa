<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Postingan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = Kategori::all();

        $kategori->each(function ($kategori) {
            Postingan::factory()->count(5)->create([
                'kategori_uuid' => $kategori->uuid,
            ]);
        });
    }
}
