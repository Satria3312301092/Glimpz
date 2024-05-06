<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function adminpayment(){
        return view('adminpayment',);
    }
}