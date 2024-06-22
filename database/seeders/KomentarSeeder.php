<?php

namespace Database\Seeders;

use App\Models\Komentar;
use App\Models\Postingan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postingan = Postingan::all();
        $user = User::all();

        $postingan->each(function ($postingan) use ($user) {
            for ($i = 0; $i < 5; $i++) {
                Komentar::factory()->create([
                    'postingan_uuid' => $postingan->uuid,
                    'user_uuid' => $user->random()->uuid,
                ]);
            }
        });
    }    protected $table = 'komentars';

}
