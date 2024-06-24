<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Seller;
use App\Models\Service;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Xendit\Xendit;
use Xendit\Configuration;
use Xendit\Payout\Payout;

class OrderPaymentController extends Controller
{
    
    public function index(){

        
        $servicesOrder = Service::all();
        $typesOrder = Type::all();
        $detailsOrder = Detail::all();
        
        return view('orderpayment');
    }
    
    public function show($Id_Order){
    $orders = Order::find($Id_Order);
    $servicesOrder = $orders->servicess;
    $typesOrder = $orders->typess;
    $detailsOrder = $orders->detailss;
    $sellersOrder = $orders->sellerss;


    return view('orderpayment',compact('orders','servicesOrder', 'typesOrder', 'detailsOrder','sellersOrder'));
    }

    public function __construct()
    {
        Configuration::setXenditKey('xnd_public_development_Nq6DWknVr071yRifhshGRl7rtz_z8_CyW83gF_Ci7BzuAAd5rKSL5LWXm2nH2Wc');
    }

    public function store()
    {
        
    }

}
