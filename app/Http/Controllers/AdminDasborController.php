<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Service;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Banned;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminDasborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $users = User::all();
        $services = Service::all();
        $invoices = Invoice::all();
        $orders = Order::all();
        $bans = Banned::all();
        $payments = Payment::all();

        $countService = $services->count();
        $countUser = $users->count();
        $countInvoice = $invoices->count();
        $countOrder = $orders->count();
        $countBan = $bans->count();
        $countPayment = $payments->count();

        return view('admindasbor', compact('countUser', 'countService', 'countInvoice', 'countOrder', 'countBan', 'countPayment')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
