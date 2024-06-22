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
        Schema::create('transaksi_tikets', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('no_tiket', 10)->unique();
            $table->integer('jumlah');
            $table->date('expire_in')->nullable();
            $table->enum('status', ['active', 'expired', 'canceled', 'used'])->default('active');
            $table->foreignUuid('transaksi_uuid')->constrained('transaksis', 'uuid')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('tiket_uuid')->constrained('tikets', 'uuid')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_tikets');
    }
};
