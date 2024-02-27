<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function tampilkan(){
        return view('dashboard',);
    }
}
