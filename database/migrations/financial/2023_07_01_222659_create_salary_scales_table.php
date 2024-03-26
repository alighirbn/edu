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
        Schema::create('salary_scales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('job_grade_id')->nullable();
            $table->foreign('job_grade_id')->references('id')->on('job_grade');
            $table->unsignedBigInteger('career_stage_id')->nullable();
            $table->foreign('career_stage_id')->references('id')->on('career_stage');
            $table->integer('salary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_scales');
    }
};
