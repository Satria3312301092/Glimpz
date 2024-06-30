<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Seller;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{


    //  public function index(Request $request){

    //     $services = Service::take(3)->get();
    //     $types = Type::all();
    //     $details = Detail::all();
    
    //     foreach ($services as $service) {
    //         $service->average_rating = $service->averageRating();
    //         $service->rating_count = $service->ratingCount();
    //     }
    //     return view('service', compact('services','types','details'));
    // }

     /**
     * Display the specified resource.
     */
    public function show(string $Id_Service)
    {   
        $users = Auth::user();
        $usersall = User::all();
        $sellersall = Seller::all();

        $services = Service::take(3)->get();
        $types = Type::all();
        $details = Detail::all();

        $service = Service::find($Id_Service);

       if ($service) {
        $service->average_rating = $service->averageRating();
        $service->rating_count = $service->ratingCount();
    }

        
        
        return view("service", compact('service', 'users', 'usersall', 'sellersall','services','types','details')); 
    }

    public function store(Request $request){
        
        $order = new Order();
        $order->Id_User = $request->input('id_user');
        $order->Id_Service = $request->input('id_service');
        $order->Id_Type = $request->input('id_type');
        $order->Id_Detail = $request->input('id_detail');
        $order->Status = 'waiting'; 
        
       
        $order->save();

        return redirect()->back()->with('successorder', 'Order has been placed successfully!');

    }
}