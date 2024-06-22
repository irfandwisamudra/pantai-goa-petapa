<?php

namespace Tests\Unit;

use App\Models\Kendaraan;
use App\Models\Pengunjung;
use App\Models\Tiket;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class TransaksiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if a database table has the expected columns in a PHP application.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(
            Schema::hasColumns('transaksis', [
                'uuid',
                'no_transaksi',
                'total_harga',
                'total_bayar',
                'tanggal_transaksi',
                'snap_token',
                'status',
                'pengunjung_uuid',
            ]),
        );
    }

    /**
     * The function tests the relationship between Tiket and Transaksi models in a many-to-many
     * relationship.
     *
     * @return void
     */
    public function test_has_many_to_many_tiket(): void
    {
        $kendaraan = Kendaraan::factory()->create();

        $tiket = Tiket::factory()->create([
            'kendaraan_uuid' => $kendaraan->uuid
        ]);

        $pegunjung = Pengunjung::factory()->create();

        $transaksi = Transaksi::factory()->create([
            'total_harga' => 100000,
            'total_bayar' => 100000,
            'pengunjung_uuid' => $pegunjung->uuid
        ]);

        $transaksi->tiket()->attach($tiket->uuid, [
            'jumlah' => 1,
            'transaksi_uuid' => $transaksi->uuid,
            'tiket_uuid' => $tiket->uuid
        ]);

        $this->assertInstanceOf(Collection::class, $tiket->transaksi);

        $this->assertEquals($tiket->transaksi[0]->uuid, $transaksi->uuid);
    }

    /**
     * The function tests if a transaction belongs to a visitor who has a ticket for a vehicle.
     *
     * @return void
     */
    public function test_has_belongs_to_pengunjung(): void
    {
        $kendaraan = Kendaraan::factory()->create();

        $tiket = Tiket::factory()->create([
            'kendaraan_uuid' => $kendaraan->uuid
        ]);

        $pegunjung = Pengunjung::factory()->create();

        $transaksi = Transaksi::factory()->create([
            'total_harga' => 100000,
            'total_bayar' => 100000,
            'pengunjung_uuid' => $pegunjung->uuid
        ]);

        $transaksi->tiket()->attach($tiket->uuid, [
            'jumlah' => 1,
            'transaksi_uuid' => $transaksi->uuid,
            'tiket_uuid' => $tiket->uuid
        ]);

        $this->assertInstanceOf(Pengunjung::class, $transaksi->pengunjung);

        $this->assertEquals($pegunjung->uuid, $transaksi->pengunjung->uuid);
    }
}
