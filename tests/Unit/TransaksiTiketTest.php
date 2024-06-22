<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class TransaksiTiketTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The function tests if a database table has the expected columns in a PHP Laravel application.
     *
     * @return void
     */
    public function test_has_expected_columns(): void
    {
        $this->assertTrue(
            Schema::hasColumns('transaksi_tikets', [
                'uuid',
                'no_tiket',
                'jumlah',
                'expire_in',
                'status',
                'transaksi_uuid',
                'tiket_uuid'
            ]),
        );
    }
}
