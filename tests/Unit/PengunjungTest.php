<?php

namespace Tests\Unit;

use App\Models\Guest;
use App\Models\Pengunjung;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class PengunjungTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if a database table has the expected columns.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(Schema::hasColumns('pengunjungs', [
            'uuid',
            'nama',
        ]));
    }

    /**
     * The function tests the relationship between a Pengunjung and User model in a one-to-many
     * relationship.
     *
     * @return void
     */
    public function test_has_one_to_many_user(): void
    {
        $pegunjung = Pengunjung::factory()->create();

        $user = User::factory()->create([
            'pengunjung_uuid' => $pegunjung->uuid
        ]);

        $this->assertInstanceOf(User::class, $pegunjung->user);

        $this->assertEquals($pegunjung->uuid, $user->pengunjung_uuid);
    }

    /**
     * The function tests the relationship between a Pengunjung (visitor) and its associated Guest in a
     * one-to-many relationship.
     *
     * @return void
     */
    public function test_has_one_to_many_guest(): void
    {
        $pegunjung = Pengunjung::factory()->create();

        $guest = Guest::factory()->create([
            'pengunjung_uuid' => $pegunjung->uuid
        ]);

        $this->assertInstanceOf(Guest::class, $pegunjung->guest);

        $this->assertEquals($pegunjung->uuid, $guest->pengunjung_uuid);
    }

    /**
     * The function tests the relationship between a Pengunjung (visitor) and their Transaksi
     * (transactions) in a PHP application.
     *
     * @return void
     */
    public function test_has_one_to_many_transaksi(): void
    {
        $pegunjung = Pengunjung::factory()->create();

        $transaksi = Transaksi::factory()->create([
            'total_harga' => 100000,
            'total_bayar' => 100000,
            'pengunjung_uuid' => $pegunjung->uuid
        ]);

        $this->assertInstanceOf(Collection::class, $pegunjung->transaksi);

        $this->assertEquals($pegunjung->uuid, $transaksi->pengunjung_uuid);
    }
}
