<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hr\ThanksController;


Route::group(['prefix' => 'hr/thanks'], function() {

   
        Route::get('/create', [ThanksController::class, 'create'])->middleware(['auth','verified'])->name('thanks.create');
        //Route::get('/view', [LeaveController::class, 'view'])->middleware(['auth','verified'])->name('thanks.view');

});
