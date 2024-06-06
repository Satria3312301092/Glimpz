<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProfileBuyerController extends Controller
{   
    public function index(){
        $userId = Auth::user();
        $users = User::find($userId);
        return view('profilebuyer', compact('users'));
    }

    public function edit(){

        $userId = Auth::user();
        $users = User::find($userId);

        // Mendapatkan data pengguna berdasarkan ID
        return view('profilebuyer',  compact('users'));
    }

    public function update(Request $request, $Id_User) {
        $Id_User = Auth::User();

        Log::info($request->all()); 
        
        $request->validate([
            'Name' => 'string|max:100',
            'Numberphone' => 'string|max:100',
            'Email' => 'string|max:100',
            'Date' => 'date' 
        ]);

        // $user = User::where('Id_User', $Id_User)->first();
        $user = new User();
        $user->Username = $user->Username;
        $user->Name = $request->input('Name');
        $user->Number_Phone = $request->input('Numberphone');
        $user->Email = $request->input('Email');
        $user->Date_Of_Birth = $request->input('Date');

        $user->save();


        if ($user->save()) {
            return back()->with('success', 'Successfully Update Profile');
        } else {
            
            return back()->with('error', 'failed Update Profile');

        }
        
    }

    public function show() {
        
    }


}