<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Seller;
use App\Models\Service;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class OrderPaymentController extends Controller
{
    
    public function index(){

        
        $servicesOrder = Service::all();
        $typesOrder = Type::all();
        $detailsOrder = Detail::all();
        
        return view('orderpayment');
    }
    
    public function show($Id_Order)
{
    $orders = Order::find($Id_Order);
    $servicesOrder = $orders->servicess;
    $typesOrder = $orders->typess;
    $detailsOrder = $orders->detailss;


    return view('orderpayment',compact('orders','servicesOrder', 'typesOrder', 'detailsOrder'));
}
}
