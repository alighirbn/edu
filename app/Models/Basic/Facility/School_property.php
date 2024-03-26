<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_Property extends Model
{
    use HasFactory;
    protected $table = 'school_properties';
    protected $fillable = [
        'school_properties',
    ];
}
