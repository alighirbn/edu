<?php

use App\Http\Controllers\Basic\FacilityController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'basic/facility'], function() {

    //index
        Route::get('/',[FacilityController::class,'index'])->middleware(['auth','verified','permission:facility-list'])->name('facility.index');

    //create
        Route::get('/create',[FacilityController::class,'create'])->middleware(['auth','verified','permission:facility-create'])->name('facility.create');
        Route::post('/create', [FacilityController::class, 'store'])->middleware(['auth','verified','permission:facility-create'])->name('facility.store');

    //show
        Route::get('/show/{url_address}',[FacilityController::class,'show'])->middleware(['auth','verified','permission:facility-show'])->name('facility.show');
    
    //update
        Route::get('/edit/{url_address}',[FacilityController::class,'edit'])->middleware(['auth','verified','permission:facility-update'])->name('facility.edit');
        Route::patch('/update/{url_address}', [FacilityController::class, 'update'])->middleware(['auth','verified','permission:facility-update'])->name('facility.update'); 
 
     //delete

        Route::delete('/delete/{url_address}', [FacilityController::class, 'destroy'])->middleware(['auth','verified','permission:facility-delete'])->name('facility.destroy');
    
});