<?php
use App\Http\Controllers\Hr\LeaveController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'hr/leave'], function() {

   
        Route::get('/create', [LeaveController::class, 'create'])->middleware(['auth','verified'])->name('leave.create');

});
