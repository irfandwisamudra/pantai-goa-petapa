<?php

namespace Database\Seeders;

use App\Models\MediaSosial;
use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $mediaSosial = MediaSosial::all();

    $profil = Profil::create([
      'nama' => 'Pantai Goa Petapa',
      'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et luctus mi mauris ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus.',
      'logo' => 'logo.png',
      'alamat' => 'Jl. Raya sukolilo timur, Kec. Labang, Kab. Bangkalan, Bangkalan',
      'email' => 'pantai_goapetapa@gmail.com',
      'no_telepon' => '081234567890',
    ]);

    $dataMediaSosial = $mediaSosial->mapWithKeys(function (MediaSosial $media) use ($profil) {
      return [
        $media->uuid => [
          'keterangan' => 'https://www.google.com/search?q=goa+petapa',
          'profil_uuid' => $profil->uuid,
          'media_sosial_uuid' => $media->uuid,
        ]
      ];
    })->toArray();

    $profil->mediaSosial()->attach($dataMediaSosial);
  }
}
