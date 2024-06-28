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
use Illuminate\Http\Response;
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
    $orderss = Order::where('Id_Order', $Id_Order)->first();
    // $payments = Payment::find($Id_Order);
    
    $servicesOrder = $orders->servicess;
    $typesOrder = $orders->typess;
    $detailsOrder = $orders->detailss;
    // $sellersOrder = $orders->sellerss;
    $payments = $orders->paymentss;
    


    return view('orderpayment',compact('orders','orderss','servicesOrder', 'typesOrder', 'detailsOrder', 'userss', 'sellerss', 'payments'));
    }

    public function webhookOrder(Request $request)
{
    $getToken = $request->headers->get('x-callback-token');
    $callbackToken = env('XENDIT_CALLBACK_TOKEN');
    
    try {
        
        if (!$callbackToken || $getToken !== $callbackToken) {
            return response()->json([
                'status' => 'error',
                'message' => 'Token callback invalid'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        
        $payment = Payment::where('External_Id', $request->external_id)->first();

        
        if (!$payment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Payment not found'
            ], Response::HTTP_NOT_FOUND);
        }

        
        if (!$payment) {
            return response()->json([
                'status' => 'error',
                'message' => 'Payment not found for given Id_Order'
            ], Response::HTTP_NOT_FOUND);
        }

        
        $order = Order::where('Id_Order', $payment->Id_Order)->first();

        
        if (!$order) {
            return response()->json([
                'status' => 'error',
                'message' => 'Order not found for given Id_Order'
            ], Response::HTTP_NOT_FOUND);
        }

        
        if ($request->status == 'PAID') {
            $order->update([
                'Status' => 'WaitingApprove',
            ]);
            $payment->update([
                'Method' => $request->payment_channel
            ]);
        } else {
            $order->update([
                'Status' => 'Cancel'
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Order status updated',
            'token' => $getToken
        ], Response::HTTP_OK);

    } catch (\Throwable $th) {
        return response()->json([
            'status' => 'error',
            'message' => $th->getMessage(),
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
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
                $payment->External_Id = $generateInvoice['external_id'];
                $payment->save();
                
                // return dd($generateInvoice);
                return redirect()->back()->with('success','Payment Has been Verified Please click Button Pay Now for Pay Your Service');
            } catch (\Throwable $th) {
                
                return dd($th);
            }
        }
    }

    public function upload(Request $request, $id)
    {
        $request->validate([
            'ProofPayment' => 'image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $payment = Payment::find($id);

        if ($request->hasFile('ProofPayment')) { // Check if picture is uploaded
            $file = $request->file('ProofPayment');
            $filename = uniqid() . date('Y-m-d') . $file->getClientOriginalName();
            $path = $file->storeAs('public/proofpayment', $filename);
            $payment->Proof = $path; // Update picture path only if a picture is uploaded
            $payment->save();
        }
        return redirect()->back()->with('success', 'Proof of order uploaded successfully.');
    }
    
    
    
}