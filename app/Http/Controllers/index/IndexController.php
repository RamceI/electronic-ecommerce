<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }

    public function terms(){
        return view('terms-conditions.terms');
    }
}
