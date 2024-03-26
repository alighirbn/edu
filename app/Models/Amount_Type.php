<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amount_Type extends Model
{
    use HasFactory;
    protected $table = 'amount_types';
    protected $fillable = [
        'amount_type',
    ];
}
