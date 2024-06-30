<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use Illuminate\Http\Request;

class Landing_PageController extends Controller
{
        public function landing_page(Request $request){
        $services = Service::take(4)->get();
        $types = Type::all();
        $details = Detail::all();
    
        foreach ($services as $service) {
            $service->average_rating = $service->averageRating();
            $service->rating_count = $service->ratingCount();
        }
        
        return view("landing_page", compact('services','types','details'));    
        }

    }
