<?php

namespace Tests\Unit;

use App\Models\MediaSosial;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ProfilTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if a database table 'profils' has the expected columns.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(
            Schema::hasColumns('profils', [
                'uuid',
                'nama',
                'deskripsi',
                'logo',
                'email',
                'alamat',
                'no_telepon',
            ]),
        );
    }

    /**
     * The function tests the relationship between a profile and social media accounts in a
     * many-to-many relationship.
     *
     * @return void
     */
    public function test_has_many_to_many_media_sosial(): void
    {
        $profil = Profil::factory()->create();

        $mediaSosial = MediaSosial::factory()->create();

        $profil->mediaSosial()->attach(
            $mediaSosial->uuid,
            [
                'keterangan' => 'Keterangan Media Sosial',
            ]
        );

        $this->assertInstanceOf(Collection::class, $profil->mediaSosial);

        $this->assertEquals($mediaSosial->uuid, $profil->mediaSosial->first()->uuid);
    }
}
