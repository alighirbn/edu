<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Type extends Model
{
    use HasFactory;
    protected $table = 'order_types';
    protected $fillable = [
        'order_type',
    ];
}
