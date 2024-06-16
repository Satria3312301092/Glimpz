<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Seller;
use App\Models\User;
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

        $service = Service::find($Id_Service);

        
        
        return view("service", compact('service')); 
    }


    public function store(){
        

    }
}