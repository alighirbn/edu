<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Status extends Model
{
    use HasFactory;

    protected $table = 'employee_status';
    protected $fillable = [
        'employee_status',
    ];
}
