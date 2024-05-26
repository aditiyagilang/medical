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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing ID
            $table->string('name'); // Name of the user
            $table->string('username')->unique(); // Username of the user, must be unique
            $table->string('password'); // Password of the user
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Timestamps for created_at and updated_at
        });

        // Note: Removed email-related tables and fields

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Primary key, ID of the session
            $table->foreignId('user_id')->nullable()->index(); // Foreign key referencing user ID
            $table->string('ip_address', 45)->nullable(); // IP address of the session
            $table->text('user_agent')->nullable(); // User agent of the session
            $table->longText('payload'); // Session payload
            $table->integer('last_activity')->index(); // Index for last activity timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Drop the users table
        Schema::dropIfExists('sessions'); // Drop the sessions table
    }
};
