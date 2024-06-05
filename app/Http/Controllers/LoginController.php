<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    public function form()
    {
        return view("login");
    }


    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $infologin = [
            'username'=>$request->username,
            'password'=>$request->password,
        ];


        if(Auth::attempt($request->only('username','password'))){
            if (Auth::user()->Role == 'Buyer') {
                return view('beranda');
            }elseif (Auth::user()->Role == 'Seller') {
                return redirect('sellerservice');
            }elseif (Auth::user()->Role == 'Admin') {
                return redirect('admindasbor');
            }
        } else{
            dd('Login Failed:', $infologin);
            return redirect()->back()->with('login_failed', true);
            
    }    


}


        
}