<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class KomentarTest extends TestCase
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
            Schema::hasColumns('komentars', [
                'uuid',
                'body',
                'user_uuid',
                'postingan_uuid',
            ]),
        );
    }
}
