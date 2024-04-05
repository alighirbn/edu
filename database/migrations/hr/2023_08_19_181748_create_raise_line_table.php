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
        Schema::create('raise_line', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->unsignedBigInteger('job_grade_id')->nullable()->default('8');
            $table->foreign('job_grade_id')->references('id')->on('job_grade');
            
            $table->unsignedBigInteger('career_stage_id')->nullable()->default('1');
            $table->foreign('career_stage_id')->references('id')->on('career_stage');

            $table->unsignedBigInteger('academic_achievement_id')->nullable()->default('7');
            $table->foreign('academic_achievement_id')->references('id')->on('academic_achievements');
            
            $table->date('due_date')->nullable();
            $table->date('bonce_date')->nullable();
            $table->date('promotion_date')->nullable();
            $table->date('stage_date')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raise_line');
    }
};
