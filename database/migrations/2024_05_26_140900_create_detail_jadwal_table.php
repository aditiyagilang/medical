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
        Schema::create('detail_jadwal', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing ID
            $table->foreignId('id_jadwal')->constrained('jadwal'); // Foreign key to jadwal table
            $table->foreignId('id_dokter')->constrained('dokter'); // Foreign key to dokter table
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_jadwal'); // Drop the detail_jadwal table
    }
};
