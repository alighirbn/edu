<?php

namespace App\Services\Hr;

use App\Http\Requests\Hr\ThanksRequest;
use App\Models\Hr\Thanks\Thanks_Order;

class ThanksServices
{

    public function store(ThanksRequest $request): Thanks_Order
    {
        // insert the user input into model and lareval insert it into the database.
        $thanks_id = Thanks_Order::create($request->validated());
        return $thanks_id;

    }
    public function update(ThanksRequest $request, $url_address)
    {
        $thanks_order = Thanks_Order::where('url_address', '=', $url_address)->update($request->validated());

        // Notify related users
        return $thanks_order;
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

}
