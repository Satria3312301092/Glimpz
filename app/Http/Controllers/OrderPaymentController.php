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
        Xendit::setApiKey('xnd_public_development_Nq6DWknVr071yRifhshGRl7rtz_z8_CyW83gF_Ci7BzuAAd5rKSL5LWXm2nH2Wc');
    }

    public function create(Request $request)
    {
        // Validate the request data if needed
        $request->validate([
            'Id_User' => 'required',
            'Id_Order' => 'required',
            'Methode' => 'required',
            'Proof' => 'required',
            'Date' => 'required|date', // Adjust validation rule as per your needs
            'Total' => 'required',
        ]);
    
        // Create a new Payment using mass assignment
        $payment = Payment::create([
            'Id_User' => $request->Id_User,
            'Id_Order' => $request->Id_Order,
            'Methode' => $request->Methode,
            'Proof' => $request->Proof,
            'Date' => strtotime($request->Date), // Convert date to timestamp if needed
            'Total' => $request->Total,
        ]);
    
        return response()->json(['message' => 'Payment created successfully', 'payment' => $payment], 201);
    }
   

}
