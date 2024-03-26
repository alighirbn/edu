<?php
use App\Http\Controllers\Financial\Payroll_DateController;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'financial/payroll_date'], function() {

    //index
        Route::get('/',[Payroll_DateController::class,'index'])->middleware(['auth','verified','permission:payroll_date-list'])->name('payroll_date.index');
      
    //create
        Route::get('/create',[Payroll_DateController::class,'create'])->middleware(['auth','verified','permission:payroll_date-create'])->name('payroll_date.create');
        Route::post('/create', [Payroll_DateController::class, 'store'])->middleware(['auth','verified','permission:payroll_date-create'])->name('payroll_date.store');

    //show
        Route::get('/show/{url_address}',[Payroll_DateController::class,'show'])->middleware(['auth','verified','permission:payroll_date-show'])->name('payroll_date.show');
    
    //update
        Route::get('/edit/{url_address}',[Payroll_DateController::class,'edit'])->middleware(['auth','verified','permission:payroll_date-update'])->name('payroll_date.edit');
        Route::patch('/update/{url_address}', [Payroll_DateController::class, 'update'])->middleware(['auth','verified','permission:payroll_date-update'])->name('payroll_date.update'); 
 
     //delete

        Route::delete('/delete/{url_address}', [Payroll_DateController::class, 'destroy'])->middleware(['auth','verified','permission:payroll_date-delete'])->name('payroll_date.destroy');
    
});
