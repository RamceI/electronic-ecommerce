<?php

namespace App\Http\Controllers\b2b;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusniessController extends Controller
{
    public function registerview(){
        return view('auth.b2b-register');
    }

    public function permisionview(){
        return view('b2b-customer.b2b-customer');
    }

}
