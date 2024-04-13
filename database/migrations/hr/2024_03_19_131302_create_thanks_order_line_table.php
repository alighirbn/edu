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
        Schema::create('thanks_order_line', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('thanks_order_id')->nullable();
            $table->foreign('thanks_order_id')->references('id')->on('thanks_orders');
        
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->unsignedBigInteger('raise_line_id')->nullable();
            $table->foreign('raise_line_id')->references('id')->on('raise_line');

            $table->unsignedBigInteger('thanks_order_status_id')->nullable();
            $table->foreign('thanks_order_status_id')->references('id')->on('thanks_order_status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanks_order_line');
    }
};
