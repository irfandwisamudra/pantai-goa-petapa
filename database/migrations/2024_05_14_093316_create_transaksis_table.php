<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('no_transaksi', 10)->unique();
            $table->bigInteger('total_harga');
            $table->bigInteger('total_bayar');
            $table->date('tanggal_transaksi');
            $table->string('snap_token', 100)->nullable();
            $table->enum('status', ['pending', 'success', 'expired', 'canceled'])->default('pending');
            $table->foreignUuid('pengunjung_uuid')->constrained('pengunjungs', 'uuid')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
