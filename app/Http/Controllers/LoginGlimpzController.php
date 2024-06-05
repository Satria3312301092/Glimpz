<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginGlimpzController extends Controller
{
    public function loginglimpz(){
        return view('login',);
    }
    public function login_proses(Request $request){
        $request->validate([
            'username'  =>  'required',
            'password'  =>  'required',
        ]);

        $data = [
            'username'      => $request->username,
            'password'      => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('beranda');
        }else{
            return redirect()->route('login');
        }
    }

    
}