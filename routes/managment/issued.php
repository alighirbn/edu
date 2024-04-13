<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Managment\IssuedController;


Route::group(['prefix' => 'managment/issued'], function() {

        Route::get('/employee', [IssuedController::class, 'employee'])->middleware(['auth','verified'])->name('issued.employee');

});
