<?php

namespace App\Http\Controllers\Managment;

use App\Http\Controllers\Controller;
use App\Models\Hr\Leave\Leave_Order;
use App\Models\Hr\Thanks\Thanks_Order;
use App\Models\Managment\Issued\Issued_Order;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class IssuedController extends Controller
{
    public function employee()
    {

        $issued_orders = Issued_Order::with(['issued_orderable' => function (MorphTo $morphTo) {
            $morphTo->morphWith([
                Leave_Order::class => ['get_employee', 'get_order_type','get_main_facility','get_sub_facility','get_department'],
                Thanks_Order::class => ['get_thanks_order_line', 'get_order_type','get_main_facility','get_sub_facility','get_department'],
            ]);
        }])->whereHasMorph('issued_orderable', Leave_Order::class, function ($query) {
            $query->where('employee_id', 10);
        })
            ->orwhereHasMorph('issued_orderable', Thanks_Order::class, function ($query) {
                $query->whereHas('get_thanks_order_line', function ($q) {
                    $q->where('employee_id', 10);
                });
            })->orderby('created_at')
            ->paginate(20);


        return view('managment.issued_order.show', compact('issued_orders'));

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
