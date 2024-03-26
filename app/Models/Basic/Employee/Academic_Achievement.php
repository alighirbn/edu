<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_Achievement extends Model
{
    use HasFactory;

    public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    protected $table = 'academic_achievements';
    protected $fillable = [
        'academic_achievement',
        'amount_type_id',
        'amount',
    ];
}
