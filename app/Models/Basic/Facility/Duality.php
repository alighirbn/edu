<?php

namespace App\Models\Basic\Facility;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duality extends Model
{
    use HasFactory;
    protected $table = 'dualities';
    protected $fillable = [
        'dualities',
    ];
}
