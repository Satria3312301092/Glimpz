<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use App\Models\Service;
use App\Models\Order;
use App\Models\Type;
use App\Models\Detail;
use App\Models\Seller;
use Illuminate\Http\Request;

class AdminInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $invoices = Invoice::all();
        $services = Service::all();
        $details = Detail::all();
        $types = Type::all();
        $orders = Order::all();
        $sellers = Seller::all();
        

        $countInvoice = count($invoices);

        return view('admininvoice', compact( 'sellers','countInvoice', 'invoices', 'services', 'details', 'types', 'orders'));
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
    public function update(Request $request, $Id_Invoice)
{
    
    $request->validate([
        'proof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    
    $invoice = Invoice::findOrFail($Id_Invoice);

  
    if ($request->hasFile('proof')) {
        $file = $request->file('proof');
        $filename = rand().time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/proofpaid', $filename);

        $invoice->proof = $filename;
        $invoice->status = 'paid';
        $invoice->save();
    }

    return redirect()->back()->with('success', 'Invoice updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
