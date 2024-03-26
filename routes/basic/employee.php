<?php
use App\Http\Controllers\Basic\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'basic/employee'], function() {

    //index
        Route::get('/',[EmployeeController::class,'index'])->middleware(['auth','verified','permission:employee-list'])->name('employee.index');
        Route::get('/d',[EmployeeController::class,'download'])->middleware(['auth','verified','permission:employee-list'])->name('employee.download');
    //create
        Route::get('/create',[EmployeeController::class,'create'])->middleware(['auth','verified','permission:employee-create'])->name('employee.create');
        Route::post('/create', [EmployeeController::class, 'store'])->middleware(['auth','verified','permission:employee-create'])->name('employee.store');

    //show
        Route::get('/show/{url_address}',[EmployeeController::class,'show'])->middleware(['auth','verified','permission:employee-show'])->name('employee.show');
    
    //update
        Route::get('/edit/{url_address}',[EmployeeController::class,'edit'])->middleware(['auth','verified','permission:employee-update'])->name('employee.edit');
        Route::patch('/update/{url_address}', [EmployeeController::class, 'update'])->middleware(['auth','verified','permission:employee-update'])->name('employee.update'); 
 
     //delete

        Route::delete('/delete/{url_address}', [EmployeeController::class, 'destroy'])->middleware(['auth','verified','permission:employee-delete'])->name('employee.destroy');
    
});
