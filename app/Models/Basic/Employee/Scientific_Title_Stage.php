<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scientific_Title_Stage extends Model
{
    use HasFactory;
    protected $table = 'scientific_title_stage';
    public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    protected $fillable = [
        'scientific_title_stage',
        'amount_type_id',
        'amount',
    ];
}
