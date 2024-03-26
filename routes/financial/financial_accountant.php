<?php
use App\Http\Controllers\Financial\FinancialAccountantController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'financial/financial_accountant'], function() {

    //index
        Route::get('/',[FinancialAccountantController::class,'index'])->middleware(['auth','verified','permission:financial_accountant-list'])->name('financial_accountant.index');

    //create
        Route::get('/create',[FinancialAccountantController::class,'create'])->middleware(['auth','verified','permission:financial_accountant-create'])->name('financial_accountant.create');
        Route::post('/create', [FinancialAccountantController::class, 'store'])->middleware(['auth','verified','permission:financial_accountant-create'])->name('financial_accountant.store');

    //show
        Route::get('/show/{url_address}',[FinancialAccountantController::class,'show'])->middleware(['auth','verified','permission:financial_accountant-show'])->name('financial_accountant.show');
    
    //update
        Route::get('/edit/{url_address}',[FinancialAccountantController::class,'edit'])->middleware(['auth','verified','permission:financial_accountant-update'])->name('financial_accountant.edit');
        Route::get('/edit',[FinancialAccountantController::class,'edit_facility'])->middleware(['auth','verified','permission:financial_accountant-update'])->name('financial_accountant.edit_facility');
        Route::patch('/update/{url_address}', [FinancialAccountantController::class, 'update'])->middleware(['auth','verified','permission:financial_accountant-update'])->name('financial_accountant.update'); 
 
     //delete

        Route::delete('/delete/{url_address}', [FinancialAccountantController::class, 'destroy'])->middleware(['auth','verified','permission:financial_accountant-delete'])->name('financial_accountant.destroy');
    
});
