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
        $user = User::find($Id_User);
        
        Log::info($request->all()); 
        
        $request->validate([
            'Picture' => 'image|mimes:jpg,jpeg,png|max:10240',
            'Name' => 'string|max:100',
            'Numberphone' => 'string|max:100',
            'Email' => 'string|max:100',
            'Date' => 'date' 
        ]);

        if ($request->hasFile('Picture')) { // Check if picture is uploaded
            $file = $request->file('Picture');
            $filename = uniqid() . date('Y-m-d') . $file->getClientOriginalName();
            $path = $file->storeAs('public/picture', $filename);
            $user->Picture = $path; // Update picture path only if a picture is uploaded
        }
    
        $user->Name = $request->input('Name');
        $user->Number_Phone = $request->input('Numberphone');
        $user->Email = $request->input('Email');
        $user->Date_Of_Birth = $request->input('Date');
    
        $user->save();
    
        if ($user->save()) {
            session()->flash('success', 'Successfully Update Account');
            return back();
        } else {
            session()->flash('error', 'Failed Update Account');
            return back();
        }
    }



}