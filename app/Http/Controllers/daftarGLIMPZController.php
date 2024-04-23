<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class daftarGLIMPZController extends Controller
{
    public function daftarGLIMPZ(){
        return view('daftarGLIMPZ');
    }
}
