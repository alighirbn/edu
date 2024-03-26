<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danager_Provision extends Model
{
    use HasFactory;
    protected $table = 'danager_provision';
    public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    protected $fillable = [
        'danager_provision',
        'amount_type_id',
        'amount',
    ];
}
