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
    public function service($id){
        
        $service = Service::find($id);


      
        
        return view("service", compact('service')); 
    }
}