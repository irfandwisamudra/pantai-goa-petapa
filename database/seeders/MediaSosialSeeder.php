<?php

namespace Database\Seeders;

use App\Models\MediaSosial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSosialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mediaSosialData = [
            ['keterangan' => 'Facebook'],
            ['keterangan' => 'Instagram'],
            ['keterangan' => 'Twitter'],
            ['keterangan' => 'Tik Tok']
        ];

        foreach ($mediaSosialData as $mediaSosial) {
            MediaSosial::create($mediaSosial);
        }
    }
}
