<?php

namespace App\Http\Controllers;
use App\Models\vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class VehiRouteController extends Controller
{
    public function redirectToRegister() {
        return view('transport.index');
     }

    function home()
    {
        return view('transport.home');
    }

    function edit()
    {
        return view('transport.edit');
    }

    function list()
    {
        return view('transport.list');
    }

 
}
