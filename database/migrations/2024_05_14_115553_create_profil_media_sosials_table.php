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
        Schema::create('profil_media_sosials', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('keterangan', 50);
            $table->foreignUuid('profil_uuid')->constrained('profils', 'uuid')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignUuid('media_sosial_uuid')->constrained('media_sosials', 'uuid')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_media_sosials');
    }
};
