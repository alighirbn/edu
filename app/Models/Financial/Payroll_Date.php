<?php

namespace App\Models\Financial;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll_Date extends Model
{
    use HasFactory;
     protected $table = 'payroll_date';

      public function get_user_create()
    {
        return $this->hasone(User::class, 'id', 'user_id_create');
    }
    public function get_user_update()
    {
        return $this->hasone(User::class, 'id', 'user_id_update');
    }

     protected $fillable = [

        'payroll_year',
        'payroll_month',
        'url_address',
        'status',
        'user_id_create',
        'user_id_update',
    ];

}
