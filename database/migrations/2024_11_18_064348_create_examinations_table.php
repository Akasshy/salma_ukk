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
        Schema::create('examinations', function (Blueprint $table) {
            $table->id();
            $table->date('exam_date');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('assessor_id');
            $table->unsignedBigInteger('element_id');
            $table->tinyInteger('status');
            $table->text('comments');
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('assessor_id')->references('id')->on('assessors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('element_id')->references('id')->on('competency_elements')->cascadeOnDelete()->cascadeOnUpdate();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examinations');
    }
};
