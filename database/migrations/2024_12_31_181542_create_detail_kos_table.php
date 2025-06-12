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
        Schema::create('detail_kos', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama kos
            $table->text('facilities'); // Fasilitas kos
            $table->decimal('price', 10, 2); // Harga
            $table->enum('status', ['disewakan', 'sold out'])->default('disewakan'); // Status
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kos');
    }
};
