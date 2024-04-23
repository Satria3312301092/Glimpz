<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Models\Product;

class list_productController extends Controller
{

    public function getData()
    {
        $dataProduk = [
            ['id' => 1, 'produk' => '3D Animation'],
            ['id' => 2, 'produk' => '2D Animation'],
        ];

        return $dataProduk;
    }

    public function list_product(){
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}