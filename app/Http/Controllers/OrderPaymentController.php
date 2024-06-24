<?php

namespace App\Http\Controllers;

use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;
use Xendit\Xendit;
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
    public function __construct() {
        Configuration::setXenditKey(env('XENDIT_SECRET_KEY'));

    }
    
    public function index(){

        
        $servicesOrder = Service::all();
        $typesOrder = Type::all();
        $detailsOrder = Detail::all();
        
        return view('orderpayment');
    }
    
    public function show($Id_Order){
    $userss = User::all();
    $sellerss = Seller::all();
    $orders = Order::find($Id_Order);
    
    $servicesOrder = $orders->servicess;
    $typesOrder = $orders->typess;
    $detailsOrder = $orders->detailss;
    $sellersOrder = $orders->sellerss;
    


    return view('orderpayment',compact('orders','servicesOrder', 'typesOrder', 'detailsOrder','sellersOrder', 'userss', 'sellerss'));
    }

    public function store(Request $request) {

    
        Log::info($request->all());
        $price = $request->input('Price');
        
        try {
            $payment = new Payment;
            $payment->Id_User = $request->input('Id_User');
            $payment->Id_Order = $request->input('Id_Order');
            $payment->Method = $request->input('Method');
            $payment->Total = $request->input('Total');

            $payment->save();
            // return dd($payment);
        } catch (\Throwable $th) {
            //throw $th;
        }

        $createInvoice = new CreateInvoiceRequest([
            'external_id' => 'Inv - ' . rand(),
            'amount' => $price
        ]); 

        $apiInstance = new InvoiceApi();
        $generateInvoice = $apiInstance->createInvoice($createInvoice);

        return dd($generateInvoice);
    }

    public function __construct()
    {
        Configuration::setXenditKey('xnd_public_development_Nq6DWknVr071yRifhshGRl7rtz_z8_CyW83gF_Ci7BzuAAd5rKSL5LWXm2nH2Wc');
    }

    public function store()
    {
        
    }

}
