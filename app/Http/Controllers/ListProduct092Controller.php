<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   

class ListProduct092Controller extends Controller
{
    public function getData(){
        $dataProduct = [
            ['id' => 1, 'produk' => 'Beras Pandan Wangi',],
            ['id' => 2, 'produk' => 'Tepung Terigu'],
            ['id' => 3, 'produk' => 'Minyak Goreng'],
            ['id' => 4, 'produk' => 'Indomie Goreng'],
            ['id' => 5, 'produk' => 'Indomie Rebus'],
            ['id' => 6, 'produk' => 'Tepung Tapioka'],
            ['id' => 7, 'produk' => 'Masako'],
        ];
        return $dataProduct;
    }
    public function list(){
        $data = $this->getData();
        return view('list_product092', compact('data'));
    }
}
