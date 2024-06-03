<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function form()
    {
        return view("pembayaran");
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username harus di isi',
            'password.required' => 'Password harus di isi',
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'buyer') {
                return redirect('daftar');
            }elseif (Auth::user()->role == 'seller') {
                return redirect('daftar2');
            }elseif (Auth::user()->role == 'admin') {
                return redirect('listbarang108');
            }
        } else {
            return redirect()->back()->with('login_failed', true);
        }
    }

    public function daftar()
    {
        return view("daftarGLIMPZ");
    }

    public function daftar2()
    {
        return view("daftarGLIMPZ2");
    }
}
