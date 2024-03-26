<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother_Language extends Model
{
    use HasFactory;
    protected $table = 'mother_language';
    protected $fillable = [
        'mother_language',
    ];
}
