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
        Schema::create('job_title', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('job_title','40');
            $table->unsignedBigInteger('next_job_title_id')->nullable()->default('1');
            $table->foreign('next_job_title_id')->references('id')->on('job_title');
            $table->unsignedBigInteger('job_grade_id')->nullable()->default('1');
            $table->foreign('job_grade_id')->references('id')->on('job_grade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_title');
    }
};
