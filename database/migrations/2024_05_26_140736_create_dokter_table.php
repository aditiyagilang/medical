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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing ID
            $table->string('nama'); // Name of the doctor
            $table->foreignId('id_jadwal')->constrained('jadwal'); // Foreign key to jadwal table
            $table->foreignId('id_layanan')->constrained('layanan'); // Foreign key to services table
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter'); // Drop the dokter table
    }
};
