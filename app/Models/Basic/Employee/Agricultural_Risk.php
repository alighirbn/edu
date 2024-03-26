<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agricultural_Risk extends Model
{
    use HasFactory;
     public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    protected $table = 'agricultural_risk';
    protected $fillable = [
        'agricultural_risk',
        'amount_type_id',
        'amount',
    ];
}
