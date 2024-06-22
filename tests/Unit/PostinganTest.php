<?php

namespace Tests\Unit;

use App\Models\Kategori;
use App\Models\Pengunjung;
use App\Models\Postingan;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class PostinganTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if a table named 'postingans' has the expected columns.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(
            Schema::hasColumns('postingans', [
                'uuid',
                'judul',
                'thumbnail',
                'body',
                'kategori_uuid',
            ]),
        );
    }

    /**
     * The function tests if a "Postingan" model has a belongs to relationship with a "Kategori" model.
     *
     * @return void
     */
    public function test_has_belongs_to_kategori(): void
    {
        $kategori = Kategori::factory()->create();

        $postingan = Postingan::factory()->create([
            'kategori_uuid' => $kategori->uuid
        ]);

        $this->assertInstanceOf(Kategori::class, $postingan->kategori);

        $this->assertEquals($kategori->uuid, $postingan->kategori_uuid);
    }

    /**
     * The function tests the relationship between a posting and comments in a many-to-many relationship.
     *
     * @return void
     */
    public function test_has_many_to_many_user(): void
    {
        $kategori = Kategori::factory()->create();

        $postingan = Postingan::factory()->create([
            'kategori_uuid' => $kategori->uuid
        ]);

        $pengunjung = Pengunjung::factory()->create();

        $user = User::factory()->create([
            'pengunjung_uuid' => $pengunjung->uuid
        ]);

        $postingan->komentar()->attach(
            $kategori->uuid,
            [
                'body' => 'Body Komentar',
                'user_uuid' => $user->uuid,
                'postingan_uuid' => $postingan->uuid
            ]
        );

        $this->assertInstanceOf(Collection::class, $postingan->komentar);
    }
}
