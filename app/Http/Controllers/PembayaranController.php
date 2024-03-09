<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    function pembayaran($id, $nama, $harga){
        return view('pembayaran', ['id' => $id, 'nama' => $nama, 'harga' =>$harga]);
    }
}
