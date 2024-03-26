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
        Schema::create('contract_type', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('contract_type','50');
            $table->unsignedBigInteger('amount_type_id')->nullable();
            $table->foreign('amount_type_id')->references('id')->on('amount_types');
            $table->float('amount', 8, 2);
             $table->unsignedBigInteger('amount_type_id_retirement')->nullable();
            $table->foreign('amount_type_id_retirement')->references('id')->on('amount_types');
            $table->float('amount_retirement', 8, 2);
             $table->unsignedBigInteger('amount_type_id_Social_Welfare_Fund')->nullable();
            $table->foreign('amount_type_id_Social_Welfare_Fund')->references('id')->on('amount_types');
            $table->float('amount_Social_Welfare_Fund', 8, 3);
             $table->unsignedBigInteger('amount_type_id_support_fund')->nullable();
            $table->foreign('amount_type_id_support_fund')->references('id')->on('amount_types');
            $table->float('amount_support_fund', 8, 2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contract_type');
    }
};
