<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_Time extends Model
{
    use HasFactory;
    protected $table = 'school_times';
    protected $fillable = [
        'school_times',
    ];
}
