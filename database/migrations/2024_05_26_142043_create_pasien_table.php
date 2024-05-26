<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incrementing ID
            $table->string('NIK')->unique(); // Unique NIK
            $table->string('email'); // Email
            $table->string('nama'); // Name
            $table->string('no_hp'); // Name
            $table->date('tanggal_lahir'); // Date of birth
            $table->text('alamat'); // Address
            $table->enum('gender', ['laki laki', 'perempuan']); // Gender
            $table->string('No_RM', 6)->unique(); // 6-digit formatted No_RM
            $table->timestamps(); // Timestamps for created_at and updated_at
        });

        // Create a stored procedure to initialize No_RM
        DB::unprepared('
            CREATE TRIGGER before_insert_pasien
            BEFORE INSERT ON pasien
            FOR EACH ROW
            BEGIN
                DECLARE newNoRM INT;
                SET newNoRM = (SELECT COALESCE(MAX(CAST(No_RM AS UNSIGNED)), 100000) + 1 FROM pasien);
                SET NEW.No_RM = LPAD(newNoRM, 6, "0");
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the trigger first
        DB::unprepared('DROP TRIGGER IF EXISTS before_insert_pasien');
        Schema::dropIfExists('pasien'); // Drop the pasien table
    }



    
};
