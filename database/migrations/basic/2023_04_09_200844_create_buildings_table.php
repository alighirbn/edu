S<?php

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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //unique
            $table->integer('building_reference')->unique()->nullable();
            $table->string('url_address','60')->unique()->nullable();


             //foreign id and reference

            $table->unsignedBigInteger('building_type_id')->nullable();
            $table->foreign('building_type_id')->references('id')->on('building_type');

            $table->unsignedBigInteger('building_status_id')->nullable();
            $table->foreign('building_status_id')->references('id')->on('building_status');
/* 
            $table->unsignedBigInteger('Last_School_id')->nullable();
            $table->foreign('Last_School_id')->references('id')->on('Schools');
 */
            $table->unsignedBigInteger('user_id_create')->nullable();
            $table->foreign('user_id_create')->references('id')->on('users');

            $table->unsignedBigInteger('user_id_update')->nullable();
            $table->foreign('user_id_update')->references('id')->on('users');


            $table->string('city',20)->nullable();
            $table->string('district',20)->nullable();
            $table->string('quarter',20)->nullable();
            $table->string('latitude',16)->nullable();
            $table->string('longitude',16)->nullable();
            $table->integer('class_count')->nullable();
            $table->integer('hall_count')->nullable();
            $table->integer('floor_count')->nullable();
            $table->integer('sanitary_units_count')->nullable();
            $table->integer('lab_count')->nullable();
            $table->integer('school_length')->nullable();
            $table->integer('school_width')->nullable();
            $table->integer('building_area')->nullable();
            $table->integer('building_year')->nullable();
            $table->integer('is_extend_area')->nullable();
            $table->integer('is_sport_area')->nullable();
            $table->integer('is_garden_area')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
