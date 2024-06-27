<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $payments = Payment::all();
        $orders = Order::all();
        $services = Service::all();
        // $Idorder = Order::find('Id_Order');
        // if ($Idpayment === $Idorder) 
        // {$orders = Order::where('Id_Order', $Idorder);}
        
        // $services = Service::all();

        $countPayment = count($payments);
        return view('adminpayment', compact('countPayment' , 'payments', 'services', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Id_Payment)
    {   
       
        $payment = Payment::find($Id_Payment);
    
        
        if (!$payment) {
            return redirect()->route('adminpayment.index')->with('error', 'Payment not found');
        }
    
       
        $order = Order::find($payment->Id_Order);
    
       
        if (!$order) {
            return redirect()->route('adminpayment.index')->with('error', 'Order not found');
        }
    
        if ($request->Status == 'Approve') {
        $order->Status = 'Proses';
        $order->save();
        } elseif ($request->Status == 'Reject') {
            $order->Status = 'Cancel';
            $order->save();
        }
    
       
        return redirect()->route('adminpayment.index')->with('success', 'Approve Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
