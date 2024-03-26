<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_Invironment extends Model
{
    use HasFactory;
    protected $table = 'school_invironments';
    protected $fillable = [
        'school_invironments',
    ];
}
