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
        Schema::create('booking', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('id_jadwal')->constrained('jadwal'); // Foreign key to jadwal table
            $table->foreignId('id_pasien')->constrained('pasien'); // Foreign key to pasien table
            $table->foreignId('id_dokter')->constrained('dokter'); // Foreign key to dokter table
            $table->enum('status', ['pending', 'confirmed', 'cancelled']); // Status of the booking
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking'); // Drop the booking table
    }
};
