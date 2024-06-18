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


    // public function index(Request $request){

    //     $serviceId = $request->input('Id_Service');
        
    //     $services = Service::find($serviceId);
        
        
    //     return view("service", compact('services')); 
    // }

    // public function show($id){
    //     $service = Service::find($id);

    //     return view("service", compact('services'));
    // }

     /**
     * Display the specified resource.
     */
    public function show(string $Id_Service)
    {   
        $users = Auth::user();


        $service = Service::find($Id_Service);

        
        
        return view("service", compact('service', 'users')); 
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