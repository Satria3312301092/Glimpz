<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController105 extends Controller
{
    public function getData(){
        $dataBarang = [
            ['id' => 105, 'nama' => 'Beras Pandan Wangi', 'harga'=> 150000],
            ['id' => 105, 'nama' => 'Tepung Kanji', 'harga'=> 200000],
            ['id' => 105, 'nama' => 'Baygon Padat', 'harga'=> 135000],
            ['id' => 105, 'nama' => 'Micin', 'harga'=> 32000],
            ['id' => 105, 'nama' => 'Minyak Angin', 'harga'=> 140000]
        ];
        return $dataBarang;
    }

    public function listbarang105(){
        $data = $this->getData();
        return view('listbarang105', compact('data'));
    }
}
