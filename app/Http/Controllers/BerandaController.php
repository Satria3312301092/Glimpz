<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
 {
        public function beranda(){
            $users = Auth::user();
            $services = Service::take(8)->get();
            $types = Type::all();
            $details = Detail::all();
        
            foreach ($services as $service) {
                $service->average_rating = $service->averageRating();
                $service->rating_count = $service->ratingCount();
            }
            
            return view("beranda", compact('users','services','types','details'));    
            }
        }

       