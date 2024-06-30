<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show($Id_Invoice) {
        return view('invoice');
    }
}
