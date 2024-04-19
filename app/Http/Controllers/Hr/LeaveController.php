<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Models\Basic\Employee\Employee;
use App\Models\Hr\Leave\Leave_Order;
use App\Models\Hr\Thanks\Thanks_Order;
use App\Models\Managment\Issued\Issued_Order;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class LeaveController extends Controller
{
    public function create()
    {
        $start = now();
        $employee = Employee::with('get_work_address')->first();

        $leave = new Leave_Order([
            'department_id' => 1,
            'main_facility_id' => 1,
            'sub_facility_id' => 2,
            'order_type_id' => 2,
            'order_text' => $employee->full_name,
            'employee_id' => $employee->id,
            'employee_facility_id' => $employee->get_work_address->id,
        ]);

        $leave->save();

        $issued_order = new Issued_Order([
            'url_address' => $this->get_random_string(60),
            'issued_facility_id' => 3,
            'order_number' => strval(rand(10, 1000)),
            'order_date' => now(),
        ]);
        $leave->issued_order()->save($issued_order);

        return now()->diffInMilliseconds($start);
    }

    public function get_random_string($length)
    {
        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";
        $length = rand(22, $length);

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $array[$random];
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
