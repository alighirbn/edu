<?php

use App\Http\Controllers\Basic\TablesEditorController;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'basic/tables'], function() {

    //index
        Route::get('/all/{id}',[TablesEditorController::class,'index'])->middleware(['auth','verified','permission:tables-edit'])->name('tables.all');
        Route::post('/view',[TablesEditorController::class,'view'])->middleware(['auth','verified','permission:tables-edit'])->name('tables.view');
        Route::post('/create',[TablesEditorController::class,'create'])->middleware(['auth','verified','permission:tables-edit'])->name('tables.create');
        Route::patch('/update', [TablesEditorController::class, 'update'])->middleware(['auth','verified','permission:tables-edit'])->name('tables.update');
        Route::post('/save', [TablesEditorController::class, 'store'])->middleware(['auth','verified','permission:tables-edit'])->name('tables.save');
        Route::delete('/save', [TablesEditorController::class, 'delete'])->middleware(['auth','verified','permission:tables-edit'])->name('tables.destroy');

});