<?php

namespace App\Models\Basic\Building;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building_Status extends Model
{
    use HasFactory;
    protected $table = 'building_status';
    protected $fillable = [
        'building_status',
    ];
}
