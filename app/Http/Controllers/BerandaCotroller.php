<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BerandaCotroller extends Controller
 {
        public function beranda(){
            $users = Auth::user();

            return view('beranda', compact('users'));
        }
    }