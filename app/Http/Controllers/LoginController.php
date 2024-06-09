<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Banned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        $user = User::where('Username', $request->username)->first();

        
        if ($user && Banned::where('Id_User', $user->Id_User)->exists()) {
            return redirect()->back()->with('login_failed', 'Your account Has Been Banned Please Contact Us.');
        }

        if (Auth::attempt($infologin)) {
            if (Auth::user()->Role == 'Buyer') {
                return view('beranda');
            } elseif (Auth::user()->Role == 'Seller') {
                return redirect('sellerservice');
            } elseif (Auth::user()->Role == 'Admin') {
                return redirect('admindasbor');
            }
        } else {
            return redirect()->back()->with('login_failed', 'Username or Password is wrong.');
        }
    }
}
