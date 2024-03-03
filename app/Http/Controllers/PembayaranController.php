<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pembayaran extends Controller
{
    function tampilkan($id, $nama, $harga){
        return view('pembayaran', ['id' => $id, 'nama' => $nama, 'harga' =>$harga]);
    }
}
