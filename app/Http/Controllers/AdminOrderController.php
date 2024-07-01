<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    $search = $request->input('search');

    if ($search) {
        $orders = Order::where('Status', 'LIKE', "%{$search}%")
                       ->orWhere('Id_Order', 'LIKE', "%{$search}%")
                       ->get();
    } else {
        $orders = Order::all();
    }
    
    $servicesOrder = Service::all();
    $typesOrder = Type::all();
    $detailsOrder = Detail::all();
    $users = User::all();
    $sellers = Seller::all();
    $count = count($orders);

        return view('adminorder', compact('orders', 'servicesOrder', 'typesOrder', 'detailsOrder', 'count', 'users', 'sellers'));
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
