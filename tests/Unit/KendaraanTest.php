<?php

namespace Tests\Unit;

use App\Models\Kendaraan;
use App\Models\Tiket;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class KendaraanTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if the 'kendaraans' table has the specified columns 'uuid' and 'jenis_kendaraan'.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(
            Schema::hasColumns('kendaraans', [
                'uuid',
                'jenis_kendaraan'
            ]),
        );
    }

    /**
     * The function tests the relationship between a Kendaraan (vehicle) and its associated Tiket (ticket)
     * in a one-to-many relationship.
     *
     * @return void
     */
    public function test_has_one_to_many_tiket(): void
    {
        $kendaraan = Kendaraan::factory()->create();

        $tiket = Tiket::factory()->create([
            'kendaraan_uuid' => $kendaraan->uuid
        ]);

        $this->assertInstanceOf(Collection::class, $kendaraan->tiket);

        $this->assertEquals($tiket->uuid, $kendaraan->tiket->first()->uuid);
    }
}
