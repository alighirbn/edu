<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment_Type extends Model
{
    use HasFactory;
    protected $table = 'employment_type';
    protected $fillable = [
        'employment_type',
    ];

}
