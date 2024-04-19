<?php

namespace App\Models\Hr\Thanks;

use App\Models\Basic\Facility\Facility;
use App\Models\Department;
use App\Models\Managment\Issued\Issued_Order;
use App\Models\Order_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Thanks_Order extends Model
{
    use HasFactory;
    protected $table = 'thanks_orders';

    public function issued_order(): MorphOne
    {
        return $this->morphOne(Issued_Order::class, 'issued_orderable');
    }

    public function get_thanks_order_line()
    {
        return $this->hasMany(Thanks_Order_Line::class, 'thanks_order_id', 'id');
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
        'order_copy',
        'url_address',
        'user_id_create',
        'user_id_update',
    ];
}
