<?php

namespace Tests\Unit;

use App\Models\Guest;
use App\Models\Pengunjung;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class GuestTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if a database table 'guests' has the expected columns 'uuid', 'no_telpon',
     * and 'pengunjung_uuid'.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(
            Schema::hasColumns('guests', [
                'uuid',
                'no_telepon',
                'pengunjung_uuid',
            ]),
        );
    }

    /**
     * The function tests if a Guest model has a belongsTo relationship with a Pengunjung model.
     *
     * @return void
     */
    public function test_has_belongs_to_pengunjung(): void
    {
        $pengunjung = Pengunjung::factory()->create();

        $guest = Guest::factory()->create([
            'pengunjung_uuid' => $pengunjung->uuid
        ]);

        $this->assertInstanceOf(Pengunjung::class, $guest->pengunjung);

        $this->assertEquals($pengunjung->uuid, $guest->pengunjung_uuid);
    }
}
