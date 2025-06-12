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
        Schema::create('kos_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_kos_id')->constrained('detail_kos')->onDelete('cascade'); // Relasi ke tabel detail_kos
            $table->string('photo_path'); // Lokasi file foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kos_photos');
    }
};
