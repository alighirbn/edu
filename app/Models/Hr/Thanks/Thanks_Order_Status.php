<?php

namespace App\Models\Hr\Thanks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thanks_Order_Status extends Model
{
    use HasFactory;
    protected $table = 'thanks_order_status';

    protected $fillable = [
        'thanks_order_status',
    ];
}
