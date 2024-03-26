<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_Allowance extends Model
{
    use HasFactory;
    protected $table = 'driver_allowance';
    public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    protected $fillable = [
        'driver_allowance',
        'amount_type_id',
        'amount',
    ];
}
