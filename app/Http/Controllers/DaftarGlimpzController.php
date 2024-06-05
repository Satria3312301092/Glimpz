<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class DaftarGlimpzController extends Controller
{
    public function create(){
        return view('daftar1');
    }

    public function store(Request $request) {

        Log::info($request->all());

        $request->validate([
            'Fullname' => 'string|max:50',
            'Email' => 'string|max:100',
            'Phonenumber' => 'string|max:100',
            'Date' => 'date',
            'Username' => 'string|max:100',
            'Password' => 'string|max:100',
            ]);
        

        $user = new User();
        $user->Name = $request->input('Fullname');
        $user->Email = $request->input('Email');
        $user->Number_Phone = $request->input('Phonenumber');
        $user->Date_Of_Birth = $request->input('Date');
        $user->Username = $request->input('Username');
        $user->Password = Hash::make($request->input('Password'));
        $user->Role = 'Buyer';
        $user->save();
    
        if($user->save()) {
        return view('login')->with('success', 'Successfully Create Account');
    } else {
        return redirect()->back()->with('error', 'Failed To Create Account');
    }
}

}

