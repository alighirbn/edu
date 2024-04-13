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
        Schema::create('issued_orders', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

            //unique
            $table->string('url_address', '60')->unique()->nullable();

            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('department');

            $table->unsignedBigInteger('main_facility_id')->nullable();
            $table->foreign('main_facility_id')->references('id')->on('facilitys');

            $table->unsignedBigInteger('sub_facility_id')->nullable();
            $table->foreign('sub_facility_id')->references('id')->on('facilitys');

            $table->unsignedBigInteger('issued_facility_id')->nullable();
            $table->foreign('issued_facility_id')->references('id')->on('facilitys');

            $table->string('order_number', 30)->nullable();
            $table->date('order_date')->nullable();

            $table->unsignedBigInteger('issued_orderable_id');
            $table->string('issued_orderable_type');
            $table->index(['issued_orderable_id', 'issued_orderable_type']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issued_orders');
    }
};
