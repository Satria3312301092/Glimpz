<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
 {
        public function beranda(Request $request){
            $users = Auth::user();
            $category = $request->input('category');

            if($category) {
                $services = Service::where('Category', $category)->get();
            } else {
                $services = Service::all();
            }

            return view('beranda', compact('users','category'));
        }
    }