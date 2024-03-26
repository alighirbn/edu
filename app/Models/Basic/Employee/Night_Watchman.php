<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Night_Watchman extends Model
{
    use HasFactory;
    protected $table = 'night_watchman';
    public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    protected $fillable = [
        'night_watchman',
        'amount_type_id',
        'amount',
    ];
}
