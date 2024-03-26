<?php

namespace App\Models\Basic\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spouse_Job extends Model
{
    use HasFactory;
    protected $table = 'spouse_job';
    protected $fillable = [
        'spouse_job',
        'amount_type_id',
        'amount',
    ];
}
