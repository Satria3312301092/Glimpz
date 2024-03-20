<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class List112Controller extends Controller
{
    public function getData(){
        $dataBarang = [
            ['id' => 1, 'produk' => 'Video Editing'],
            ['id' => 2, 'produk' => '2D Animation'],
            ['id' => 3, 'produk' => '3D Animation'],
            ['id' => 4, 'produk' => 'Rigging'],
            ['id' => 5, 'produk' => 'Video Ads']
        ];
        return $dataBarang;
    }
    public function list112(){
        $data = $this->getData();
        return view('list_product112', compact('data'));
    }
}
