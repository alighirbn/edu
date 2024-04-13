<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Models\Basic\Employee\Employee;
use App\Models\Hr\Thanks\Thanks_Order;
use App\Models\Hr\Thanks\Thanks_Order_Line;
use App\Models\Managment\Issued_Order;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ThanksController extends Controller
{
    public function create()
    {
        $start = now();
        $employee = Employee::with('get_work_address')->first();

        $thanks_order = new Thanks_Order([
            'department_id' => 1,
            'main_facility_id' => 1,
            'sub_facility_id' => 5,
            'order_type_id' => 1,
            'order_text' => $employee->full_name,
        ]);

        $thanks_order->save();
        $thanks_order_line = new Thanks_Order_Line([
            'thanks_order_id' => $thanks_order->id,
            'employee_id' => $employee->id,
            'raise_line_id' => null,
            'thanks_order_status_id' => 1,
        ]);
        $thanks_order_line->save();
        

        $issued_order = new Issued_Order([
            'url_address' => $this->get_random_string(60),
            'department_id' => 1,
            'main_facility_id' => 1,
            'sub_facility_id' => 2,
            'issued_facility_id' => 3,
            'order_number' => strval(rand(10,1000)),
            'order_date' => now(),
        ]);
        $thanks_order->issued_order()->save($issued_order);

        

        return now()->diffInMilliseconds($start);
    }

    public function view()
    {

        // return Issued_Order::with(['issued_orderable' => function (MorphTo $morphTo) {
        //     $morphTo->morphWith([
        //         Thanks_Order::class => ['get_employee'],
        //     ]);
        // }])->where('order_number', '1300')
        //     ->whereHasMorph('issued_orderable', Thanks_Order::class, function ($query) {
        //         $query->where('employee_id', 11);
        //     })->orwhereHasMorph('issued_orderable', Thanks_Order::class, function ($query) {
        //     $query->whereHas('get_employee', function ($q) {
        //         $q->where('id', 10); // Your Condition
        //     });
        // })->get();

        $issued_order = Issued_Order::with(['issued_orderable' => function (MorphTo $morphTo) {
            $morphTo->morphWith([
                Thanks_Order::class => ['get_employee'],
            ]);
        }])->whereHasMorph('issued_orderable', Thanks_Order::class, function ($query) {
            $query->where('employee_id', 10);
        })
            ->orwhereHasMorph('issued_orderable', Thanks_Order::class, function ($query) {
                $query->whereHas('get_employee', function ($q) {
                    $q->where('id', 10);
                });
            })->get();

        return $issued_order->count();

    }

    function get_random_string($length)
    {
      $array = array(0,1,2,3,4,5,6,7,8,9, 'a', 'b','c' , 'd', 'e', 'f','g', 'h', 'i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $text = "";
      $length = rand(22, $length);

      for($i=0;$i<$length;$i++) {
         $random = rand(0,61);
         $text .=$array[$random];
        }
      return $text;
    }


    public function getIPAddress()
    {
        //whether ip is from the share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from the remote address
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
