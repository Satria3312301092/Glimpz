<?php

namespace App\Http\Controllers;

class PembayaranController extends Controller
{

    public function getData()
    {
        $dataHarga = [
            ['id' => 1, 'nama' => '3D Animation', 'harga' => 150000],
            ['id' => 2, 'nama' => '2D Animation', 'harga' => 140000],
        ];

        return $dataHarga;
    }

    public function pembayaran(){
        $data = $this->getData();
        return view('pembayaran', compact('data'));
    }
}