<?php

namespace App\Http\Controllers;
use App\Models\driver;
use Carbon\Carbon;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function dailyReport(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)
                            ->toDateTimeString();
        $end_date = Carbon::parse($request->end_date)
                            ->toDateTimeString();
        $drivers = driver::whereBetween('created_at',[$start_date,$end_date])->get();
        return view('report',compact('drivers'));
    }
}
