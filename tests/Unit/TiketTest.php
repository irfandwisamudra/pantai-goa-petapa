<?php

namespace Tests\Unit;

use App\Models\Kendaraan;
use App\Models\Pengunjung;
use App\Models\Tiket;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class TiketTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if a database table has the expected columns.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(
            Schema::hasColumns('tikets', [
                'uuid',
                'keterangan',
                'harga',
                'kendaraan_uuid',
            ]),
        );
    }

    /**
     * The function tests if a Tiket model has a belongsTo relationship with a Kendaraan model.
     *
     * @return void
     */
    public function test_has_belongs_to_kendaraan(): void
    {
        $kendaraan = Kendaraan::factory()->create();

        $tiket = Tiket::factory()->create([
            'kendaraan_uuid' => $kendaraan->uuid
        ]);

        $this->assertInstanceOf(Kendaraan::class, $tiket->kendaraan);

        $this->assertEquals($tiket->kendaraan->uuid, $kendaraan->uuid);
    }

    /**
     * This function tests the relationship between Kendaraan, Tiket, Pengunjung, and Transaksi models in a
     * many-to-many relationship.
     *
     * @return void
     */
    public function test_has_many_to_many_transaksi(): void
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
}
