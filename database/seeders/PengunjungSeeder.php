<?php

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\Pengunjung;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengunjungSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Pengunjung::factory()->count(50)->create()->each(function (Pengunjung $pengunjung): void {
      User::factory()->create([
        'pengunjung_uuid' => $pengunjung->uuid,
      ]);
    });

    Pengunjung::factory()->count(50)->create()->each(function (Pengunjung $pengunjung): void {
      Guest::factory()->create([
        'pengunjung_uuid' => $pengunjung->uuid,
      ]);
    });

    Pengunjung::factory()->count(1)->create()->each(function (Pengunjung $pengunjung): void {
      User::factory()->create([
        'email' => 'user@gmail.com',
        'pengunjung_uuid' => $pengunjung->uuid,
      ]);
    });
  }
}
