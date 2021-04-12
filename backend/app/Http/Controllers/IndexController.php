<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index()
    {
        $datetime = new Carbon('2016-02-30');
        $days_in_month = $datetime->daysInMonth;

        for ($i = 1; $i < $days_in_month; $i++) {
            $days[] = $i;
        }

        $data = [
            'days' => $days
        ];
        return view('index')->with($data);
    }
}