<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaCotroller extends Controller
 {
        public function beranda(){
            return view('beranda',);
        }
    }