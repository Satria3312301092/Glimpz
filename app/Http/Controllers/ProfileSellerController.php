<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Seller;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProfileSellerController extends Controller
{
    public function index() {
        $userId = Auth::id(); // Mendapatkan ID pengguna langsung
        $user = User::find($userId);

        $usersAuth = Auth::User();

        $seller = Seller::where('Id_User', $userId)->first();

        $sellers = Seller::all();

        $IdSeller = Seller::where('Id_User', $userId);
        

        $servicesOrder = Service::all();

        $orders = Order::all();

        $typesOrder = Type::all();
        $detailsOrder = Detail::all();
        return view('profileseller', compact('usersAuth','user', 'seller','orders','servicesOrder', 'typesOrder', 'detailsOrder', 'sellers', 'userId'));
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

    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $status = $request->input('status');

        if ($status === 'accept') {
            $order->status = 'Payment';
        } elseif ($status === 'reject') {
            $order->status = 'Cancel';
        }

        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully');
    }

    public function switchToBuyer(Request $request)
{
    $userId = Auth::id();
    $user = User::find($userId);

    $user->Role = 'Buyer';
    $user->save();

    session()->flash('success', 'Successfully switched to Buyer');

    return redirect()->route('profilebuyer.index');
}

    public function store(Request $request, $id)
    {
        $request->validate([
            'ProofPayment' => 'image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $order = Order::find($id);

        if ($request->hasFile('ProofOrder')) { // Check if picture is uploaded
            $file = $request->file('ProofOrder');
            $filename = uniqid() . date('Y-m-d') . $file->getClientOriginalName();
            $path = $file->storeAs('public/prooforder', $filename);
            $order->Proof = $path; // Update picture path only if a picture is uploaded
            $order->save();
        }
        return redirect()->back()->with('success', 'Proof of order uploaded successfully.');
    }


}