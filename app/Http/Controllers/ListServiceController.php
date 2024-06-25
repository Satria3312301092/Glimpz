<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Ratings;

class ListServiceController extends Controller
{
    public function index(){
    $services = Service::all();
    $types = Type::all();
    $details = Detail::all();

    foreach ($services as $service) {
        $service->average_rating = $service->averageRating();
        $service->rating_count = $service->ratingCount();
    }
    
    return view("list_service", compact('services','types','details'));    
    }
}
