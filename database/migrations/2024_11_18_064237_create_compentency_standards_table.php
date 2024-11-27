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
        Schema::create('compentency_standards', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('unit_code', 32);
            $table->string('unit_title', 64);
            $table->longText('unit_description'); // LONGTEXT sesuai diagram
            $table->unsignedBigInteger('major_id'); // Relasi ke tabel majors
            $table->unsignedBigInteger('assessor_id'); // Relasi ke tabel assessors

            // Foreign key constraints
            $table->foreign('major_id')->references('id')->on('majors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('assessor_id')->references('id')->on('assessors')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compentency_standards');
    }
};
