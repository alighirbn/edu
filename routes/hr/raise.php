<?php
use App\Http\Controllers\Hr\RaiseController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'hr/raise'], function() {

   
        Route::get('/create', [RaiseController::class, 'create'])->middleware(['auth','verified'])->name('raise.create');
        Route::get('/thanks', [RaiseController::class, 'add_thanks_book'])->middleware(['auth','verified'])->name('raise.add_thanks_book');

});
