<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career_Stage extends Model
{
    use HasFactory;
    protected $table = 'career_stage';
    protected $fillable = [
        'career_stage',
    ];
}
