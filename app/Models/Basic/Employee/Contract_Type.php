<?php

namespace App\Models\Basic\Employee;

use App\Models\Amount_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract_Type extends Model
{
    use HasFactory;
    protected $table = 'contract_type';
    public function get_amount_type()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id');
    }
    public function get_amount_type_retirement()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id_retirement');
    }
    public function get_amount_type_Social_Welfare_Fund()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id_Social_Welfare_Fund');
    }
    public function get_amount_type_support_fund()
    {
        return $this->hasone(Amount_Type::class, 'id', 'amount_type_id_support_fund');
    }
    protected $fillable = [
        'contract_type',
        'amount_type_id',
        'amount',
        'amount_type_id_retirement',
        'amount_retirement',
        'amount_type_id_Social_Welfare_Fund',
        'amount_Social_Welfare_Fund',
        'amount_type_id_support_fund',
        'amount_support_fund',
    ];
}
