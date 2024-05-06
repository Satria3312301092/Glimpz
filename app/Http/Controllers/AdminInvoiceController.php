<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminInvoiceController extends Controller
{
    public function admininvoice(){
        return view('admininvoice',);
    }
}
