<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_Gender extends Model
{
    use HasFactory;
    protected $table = 'school_genders';
    protected $fillable = [
        'school_genders',
    ];
}
