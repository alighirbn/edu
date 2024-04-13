<?php

namespace App\Models\Hr\Leave;

use App\Models\Basic\Employee\Employee;
use App\Models\Basic\Facility\Facility;
use App\Models\Department;
use App\Models\Managment\Issued_Order;
use App\Models\Order_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Leave_Order extends Model
{
    use HasFactory;
    protected $table = 'leave_orders';

    public function issued_order(): MorphOne
    {
        return $this->morphOne(Issued_Order::class, 'issued_orderable');
    }

    public function get_employee()
    {
        return $this->hasone(Employee::class, 'id', 'employee_id');
    }

    public function get_department()
    {
        return $this->hasone(Department::class, 'id', 'department_id');
    }

    public function get_main_facility()
    {
        return $this->hasone(Facility::class, 'id', 'main_facility_id');
    }

    public function get_sub_facility()
    {
        return $this->hasone(Facility::class, 'id', 'sub_facility_id');
    }

    public function get_order_type()
    {
        return $this->hasone(Order_Type::class, 'id', 'order_type_id');
    }
    protected $fillable = [
        'department_id',
        'main_facility_id',
        'sub_facility_id',
        'order_type_id',
        'order_text',
        'employee_id',
        'employee_facility_id',
    ];
}
