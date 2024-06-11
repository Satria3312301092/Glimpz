<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProfileSellerController extends Controller
{
    public function index() {
        $userId = Auth::id(); // Mendapatkan ID pengguna langsung
        $user = User::find($userId);
        $seller = Seller::where('Id_User', $userId)->first();
        return view('profileseller', compact('user', 'seller'));
    }
    
    public function edit() {
        $userId = Auth::id(); // Mendapatkan ID pengguna langsung
        $user = User::find($userId);
        $seller = Seller::where('Id_User', $userId)->first();
        return view('profileseller', compact('user', 'seller'));
    }
    

    public function update(Request $request, $Id_User) {
        $user = User::find($Id_User);

        $seller = Seller::where('Id_User', $Id_User)->first();
        
        Log::info($request->all()); 
        
        $request->validate([
            'Picture' => 'image|mimes:jpg,jpeg,png|max:10240',
            'Name' => 'string|max:100',
            'Numberphone' => 'string|max:100',
            'Email' => 'string|max:100',
            'Date' => 'date', 
            'AccountNumber' => 'string|max:100',

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

        $seller->Account_Number = $request->input('AccountNumber');

        
        $seller->save();
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