<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Seller;
use App\Models\Service;
use App\Models\Ratings;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProfileBuyerController extends Controller
{   
    public function index(){
        $userId = Auth::id();
        $user = User::find($userId);

        $orders = Order::where('Id_User', $userId)->get();

        $servicesOrder = Service::all();
        $typesOrder = Type::all();
        $detailsOrder = Detail::all();
        foreach ($orders as $order) {
            $order->Date = Carbon::parse($order->Date)->format('Y-m-d'); // or 'd M Y'
        }
    
        return view('profilebuyer', compact('user','orders','servicesOrder', 'typesOrder', 'detailsOrder'));
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

    public function store(Request $request)
    {
        // Ambil ID User dari input tersembunyi
        $Id_User = $request->input('Id_User');

        // Temukan user berdasarkan ID
        $user = User::find($Id_User);

        // Jika user tidak ditemukan, berikan respon error atau redirect
        if (!$user) {
            return redirect()->back()->withErrors(['User not found']);
        }

        // Ambil seller yang terkait atau buat yang baru jika belum ada
        $seller = $user->seller()->firstOrNew();

        // Log data permintaan yang masuk   
        Log::info($request->all());

        // Validasi data permintaan yang masuk
        $request->validate([
            'IdentityCard' => 'image|mimes:jpg,jpeg,png|max:10240',
            'AccountNumber' => 'string|max:100',
        ]);

        // Periksa apakah file Identity Card diunggah
        if ($request->hasFile('IdentityCard')) {
            $file = $request->file('IdentityCard');
            $filename = uniqid() . date('Y-m-d') . $file->getClientOriginalName();
            $path = $file->storeAs('public/identitycard', $filename);
            $seller->Identity_Card = $path; // Perbarui path Identity Card seller
        }

        // Perbarui nomor rekening seller
        $seller->Account_Number = $request->input('AccountNumber');

        // Simpan detail seller yang diperbarui
        $seller->Id_User = $user->Id_User; // Pastikan kolom Id_User diisi
        $seller->save();

        $user->Role = 'Seller';
        $user->save();

        // Redirect atau berikan respon sukses
        if ($user->save()) {
            session()->flash('success', 'Successfully Switch Role');
            return redirect()->route('profileseller.index');
        } else {
            session()->flash('error', 'Failed Switch role');
            return back();
        }
    }

    public function cancelOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'cancel';
        $order->save();

        return redirect()->back()->with('success', 'Order canceled successfully');
    }

    public function rating(Request $request)
    {
        $id_user = auth()->User()->Id_User;
        $validated = $request->validate([
            'id_service' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $rating = new Ratings();
        $rating->Id_User = $id_user;
        $rating->Id_Service = $validated['id_service'];
        $rating->Rating = $validated['rating'];
        $rating->save();

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }



}