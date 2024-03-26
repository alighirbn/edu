<?php
use App\Http\Controllers\Financial\FinancialDefaultController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'financial/financial_default'], function() {

    //index
        Route::get('/',[FinancialDefaultController::class,'index'])->middleware(['auth','verified','permission:financial_default-list'])->name('financial_default.index');
  
});
