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

        $user2 = User::where('Username', $request->username)->first();

        if (!$user2) {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            $request->session()->flash('register', true);
            return redirect()->back();
        }
        

        $bannedEmail = Banned::where('Email', $user->Email)->first();
        $existingEmail = User::where('Email', $user->Email)->first();
        $bannedPhone = Banned::where('Number_Phone', $user->Number_Phone)->first();
        $existingPhone = User::where('Number_Phone', $user->Number_Phone)->first();

        
        if ($user && Banned::where('Id_User', $user->Id_User)->exists()) {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            $request->session()->flash('login_failed', true);
            return redirect()->back();
        }

       

        if ($bannedEmail) {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            $request->session()->flash('email', true);
            return redirect()->back();
        }
    
        if ($bannedPhone) {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            $request->session()->flash('Banphone', true);
            return redirect()->back();
        }

        if (Auth::attempt($infologin)) {
            if (Auth::user()->Role == 'Buyer') {
                $request->session()->flash('success', true);
                return view('beranda');
            } elseif (Auth::user()->Role == 'Seller') {
                return redirect('sellerservice');
            } elseif (Auth::user()->Role == 'Admin') {
                return redirect('admindasbor');
            }
        } else {
            $request->session()->flash('failed', true);
            return redirect()->back();
        }
    }
}
