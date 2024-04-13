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
        Schema::create('thanks_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('department');
            
            $table->unsignedBigInteger('main_facility_id')->nullable();
            $table->foreign('main_facility_id')->references('id')->on('facilitys');

            $table->unsignedBigInteger('sub_facility_id')->nullable();
            $table->foreign('sub_facility_id')->references('id')->on('facilitys');

            $table->unsignedBigInteger('order_type_id')->nullable();
            $table->foreign('order_type_id')->references('id')->on('order_types');

            $table->string('order_text',500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanks_orders');
    }
};
