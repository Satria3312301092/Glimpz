<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileBuyerController extends Controller
{
    public function profilebuyer(){

        $userId = Auth::user();
        $users = User::find($userId);

        // Mendapatkan data pengguna berdasarkan ID
        return view('profilebuyer',  compact('users'));
    }


}