<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class wholesaleController extends Controller
{
    //
    function retrieve()
    {
        $data= DB::table('wholesale_buyers')->get();
        return view('wholesale.list',['data'=>$data]);

    }
}
