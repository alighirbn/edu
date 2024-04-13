<?php

namespace App\Models\Hr\Thanks;

use App\Models\Basic\Employee\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thanks_Order_Line extends Model
{
    use HasFactory;
    protected $table = 'thanks_order_line';
    public $timestamps = false;

    public function get_thanks_order()
    {
        return $this->hasone(Thanks_Order::class, 'id', 'thanks_order_id');
    }

    public function get_thanks_order_status()
    {
        return $this->hasone(Thanks_Order_Status::class, 'id', 'thanks_order_status_id');
    }

    public function get_employee()
    {
        return $this->hasone(Employee::class, 'id', 'employee_id');
    }

    protected $fillable = [
        'thanks_order_id',
        'employee_id',
        'raise_line_id',
        'thanks_order_status_id',
    ];
}
