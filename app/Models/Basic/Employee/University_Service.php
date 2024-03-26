<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University_Service extends Model
{
    use HasFactory;
    protected $table = 'university_service';
    public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    protected $fillable = [
        'university_service',
        'amount_type_id',
        'amount',
    ];
}
