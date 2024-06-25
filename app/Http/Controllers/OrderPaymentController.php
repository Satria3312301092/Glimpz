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
use Xendit\Invoice\InvoiceItem;

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
    // $payments = Payment::find($Id_Order);
    
    $servicesOrder = $orders->servicess;
    $typesOrder = $orders->typess;
    $detailsOrder = $orders->detailss;
    $sellersOrder = $orders->sellerss;
    $payments = $orders->paymentss;
    


    return view('orderpayment',compact('orders','servicesOrder', 'typesOrder', 'detailsOrder','sellersOrder', 'userss', 'sellerss', 'payments'));
    }

    public function store(Request $request) {
        
        $order = Order::find($request->input('Id_Order'));
        $payment = Payment::where('Id_Order', $request->input('Id_Order'))->first();
        
       
        if ($order && $payment) {
            
            return redirect()->back()->with('verif','If you have verified this order, please make payment by clicking the pay button or make a new order if it has been more than 24 hours'); 
        } else {
           
            Log::info($request->all());
            $price = $request->input('Price');
        
            try {
                
                $payment = new Payment;
                $payment->Id_User = $request->input('Id_User');
                $payment->Id_Order = $request->input('Id_Order');
                $payment->Method = $request->input('Method');
                $payment->Total = $request->input('Total');
        
                
        
                
                $items = new InvoiceItem([
                    'name' =>  $request->input('Title').' '.$request->input('Type_Name'), 
                    'price' => $price,
                    'quantity' => '1',
                ]);
        
                
                $createInvoice = new CreateInvoiceRequest([
                    'external_id' => 'Inv - '. rand(),
                    'amount' => $price,
                    'items' => array($items)
                ]); 
        
                
                $apiInstance = new InvoiceApi();
                $generateInvoice = $apiInstance->createInvoice($createInvoice);

                $payment->Invoice_Url = $generateInvoice['invoice_url'];
                $payment->save();
                
                // return dd($generateInvoice);
                return redirect()->back()->with('success','Payment Has been Verified Please click Button Pay Now for Pay Your Service');
            } catch (\Throwable $th) {
                
                return dd($th);
            }
        }
    }
    
    
    
}