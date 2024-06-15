<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;

class ListServiceController extends Controller
{
    public function index(){
    $services = Service::all();
    $types = Type::all();
    $details = Detail::all();
    
    return view("list_service", compact('services','types','details'));    
    }
}
