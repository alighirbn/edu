<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Models\Basic\Employee\Employee;
use App\Models\Hr\Raise\Raise_Line;
use App\Models\Hr\Thanks_Book\Thanks_Book;
use Carbon\Carbon;

class RaiseController extends Controller
{

    public function create()
    {
        $start = now();
        $employees = Employee::all();
        $data = array();

        foreach ($employees as $key => $employee) {
            $data[] = [
                'employee_id' => $employee->id,
                'job_grade_id' => $employee->job_grade_id,
                'career_stage_id' => $employee->career_stage_id,
                'due_date' => now(),
                'bonce_date' => now(),
                'promotion_date' => now(),
                'stage_date' => now(),
            ];
        }

        foreach (array_chunk($data, 4000) as $part) {
            Raise_Line::insert($part);
        }
        return now()->diffInMilliseconds($start);
    }

    public function add_thanks_book()
    {
        $start = now();
        $raise_lines = Raise_Line::with('get_thanks_book')->get();

        $data = array();
        $data_raise = array();

        foreach ($raise_lines as $raise_line) {
            $data[] = [
                'employee_id' => $raise_line->employee_id,
                'raise_line_id' => $raise_line->id,
                'stage_date' => now(),
            ];

            if ($raise_line->get_thanks_book->count() <= 2) {
                $data_raise[] = [
                    'id' => $raise_line->id,
                    'bonce_date' => Carbon::parse($raise_line->bonce_date)->subDays(30),
                    'promotion_date' => Carbon::parse($raise_line->promotion_date)->subDays(30),
                ];
            }

        }

        foreach (array_chunk($data, 10000) as $part) {
            Thanks_Book::insert($part);
        }

        foreach (array_chunk($data_raise, 10000) as $part) {
            Raise_Line::upsert($part, 'id', ['bonce_date', 'promotion_date']);
        }

        return now()->diffInSeconds($start);
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
