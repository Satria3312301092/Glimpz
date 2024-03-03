<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController092 extends Controller
{
    
    public function getData()
    {

        $dataBarang = [
            ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => 20000],
            ['id' => 3, 'nama' => 'Baygon Cair', 'harga' => 13500],
            ['id' => 4, 'nama' => 'Penyedap Royko', 'harga' => 3200],
            ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => 14000],
        ];

        return $dataBarang;
    }

    public function listbarang092(){
        $data = $this->getData();
        return view('listbarang092', compact('data'));
    }
}
