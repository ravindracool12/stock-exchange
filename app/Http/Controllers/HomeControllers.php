<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controller
{

	 public function login()
    {
        return view('front.login');
    }
    
}
