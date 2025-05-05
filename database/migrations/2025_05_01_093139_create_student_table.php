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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del estudiante
            $table->string('email')->unique(); // Correo electrónico del estudiante
            $table->string('phone')->nullable(); // Teléfono del estudiante
            $table->date('birth_date')->nullable(); // Fecha de nacimiento del estudiante
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
