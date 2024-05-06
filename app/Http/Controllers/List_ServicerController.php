<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List_ServicerController extends Controller
{
    public function list_service(){
        return view('list_service',);
    }
}