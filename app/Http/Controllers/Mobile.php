<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mobile extends Controller
{
    public function login()
    {
        return view('mobile.login');
    }
}
