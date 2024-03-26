<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_Stage extends Model
{
    use HasFactory;
    protected $table = 'school_stages';
    protected $fillable = [
        'school_stages',
    ];
}
