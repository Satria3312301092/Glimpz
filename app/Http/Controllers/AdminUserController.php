<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Banned;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $users = User::all();
        
        $usersBuyer = User::where('Role', 'Buyer')->get();
        $usersSeller = User::where('Role', 'Seller')->get();
        $usersAdmin = User::where('Role', 'Admin')->get();

        // $usersBuyer = User::where($users1);

        $count = $users->count();

        return view('adminuser', compact('users', 'count', 'usersBuyer', 'usersSeller', 'usersAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info($request->all());

        $request->validate([
            'Id_User' => 'integer',
            'Name' => 'string',
            'Email' => 'string',
            'Numberphone' => 'string'
        ]);

        $banned = new Banned();
        $banned->Id_User = $request->input('Id_User');
        $banned->Name = $request->input('Name');
        $banned->Email = $request->input('Email');
        $banned->Number_Phone = $request->input('Numberphone');
        
        $banned->save();

        if ($banned->save())
        return back()->with('success', 'Banned Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
