<?php

namespace App\Models\Basic\Building;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building_Type extends Model
{
    use HasFactory;
    protected $table = 'building_type';
    protected $fillable = [
        'building_type',
    ];
}
