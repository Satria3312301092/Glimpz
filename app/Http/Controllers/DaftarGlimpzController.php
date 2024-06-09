<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Banned;
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
        
    
            $user = User::where('Username', $request->Username)->first();
    
            if ($user && User::where('Username', $user->Username)->exists()) {
                return redirect()->back()->with('username', 'This Username Has Been Taken.');
            } else {

    
                $user = new User();
                $user->Name = $request->input('Fullname');
                $user->Email = $request->input('Email');
                $user->Number_Phone = $request->input('Phonenumber');
                $user->Date_Of_Birth = $request->input('Date');
                $user->Username = $request->input('Username');
                $user->Password = Hash::make($request->input('Password'));
                $user->Role = 'Buyer';
                $user->Picture = 'public/picture/default.png';
                $user->save();
            
                if($user->save()) {
                session()->flash('success', 'Successfully Created Account');
                return view('login');
            } else {
                return redirect()->back()->with('error', 'Failed To Create Account');
            }
            }

            }
        }

