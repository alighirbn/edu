<?php
use App\Http\Controllers\Financial\PayrollController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'financial/payroll'], function () {

    //index
    Route::get('/', [PayrollController::class, 'index'])->middleware(['auth', 'verified', 'permission:payroll-list'])->name('payroll.index');
    Route::get('/employees_list', [PayrollController::class, 'employees_list'])->middleware(['auth', 'verified', 'permission:payroll-employees_list'])->name('payroll.employees_list');
    Route::get('/add_all', [PayrollController::class, 'add_all'])->middleware(['auth', 'verified', 'permission:payroll-employees_list'])->name('payroll.add_all');

    //create
    Route::get('/create/{url_address}', [PayrollController::class, 'create'])->middleware(['auth', 'verified', 'permission:payroll-create'])->name('payroll.create');
    Route::post('/create', [PayrollController::class, 'store'])->middleware(['auth', 'verified', 'permission:payroll-create'])->name('payroll.store');
    Route::get('/auto_fill/{url_address}', [PayrollController::class, 'auto_fill'])->middleware(['auth', 'verified', 'permission:payroll-create'])->name('payroll.auto_fill');
    //show
    Route::get('/show/{url_address}', [PayrollController::class, 'show'])->middleware(['auth', 'verified', 'permission:payroll-show'])->name('payroll.show');
    Route::get('/facility_sum', [PayrollController::class, 'sum_payrolls'])->middleware(['auth', 'verified', 'permission:payroll-show'])->name('payroll.facility_sum');

    //update
    Route::get('/edit/{url_address}', [PayrollController::class, 'edit'])->middleware(['auth', 'verified', 'permission:payroll-update'])->name('payroll.edit');
    Route::patch('/update/{url_address}', [PayrollController::class, 'update'])->middleware(['auth', 'verified', 'permission:payroll-update'])->name('payroll.update');

    // employee
    Route::get('/employee/edit/{url_address}', [PayrollController::class, 'employee_edit'])->middleware(['auth', 'verified', 'permission:employee-update'])->name('payroll.employee_edit');
    Route::patch('/employee/update/{url_address}', [PayrollController::class, 'employee_update'])->middleware(['auth', 'verified', 'permission:employee-update'])->name('payroll.employee_update');
    //delete

    Route::delete('/delete/{url_address}', [PayrollController::class, 'destroy'])->middleware(['auth', 'verified', 'permission:payroll-delete'])->name('payroll.destroy');

});
