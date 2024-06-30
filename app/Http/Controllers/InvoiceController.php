<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Models\Service;
use App\Models\Type;
use App\Models\Detail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show($Id_Invoice) {

        $invoices = Invoice::find($Id_Invoice);

        $payments = Payment::find($invoices->Id_Payment);
        $orders = Order::find($invoices->Id_Order);
        $users = User::find($invoices->Id_User);

        $services = Service::find($orders->Id_Service);
        $types = Type::find($orders->Id_Type);
        $details = Detail::find($orders->Id_Detail);

        return view('invoice', compact('types','details','services','users','payments','orders','invoices'));
    }

    public function generatePdf($Id_Invoice) {
        set_time_limit(300); 
        ini_set('memory_limit', '2048M');
    
        $invoice = Invoice::find($Id_Invoice);
    
        if (!$invoice) {
            return redirect()->back()->with('error', 'Invoice not found.');
        }
    
        $payment = Payment::find($invoice->Id_Payment);
        $order = Order::find($invoice->Id_Order);
        $user = User::find($invoice->Id_User);
        $service = Service::find($order->Id_Service);
        $type = Type::find($order->Id_Type);
        $detail = Detail::find($order->Id_Detail);
    
        
        if ($detail->Price <= 10000000) {
            $tax = $detail->Price * 10 / 100;
        } elseif ($detail->Price > 10000000 && $detail->Price <= 50000000) {
            $tax = $detail->Price * 8 / 100;
        } else {
            $tax = $detail->Price * 5 / 100;
        }
    
        $data = [
            'invoice' => $invoice,
            'payment' => $payment,
            'order' => $order,
            'user' => $user,
            'service' => $service,
            'type' => $type,
            'detail' => $detail,
            'tax' => $tax
        ];
    
        $pdf = PDF::loadView('invoicepdf', $data)->setPaper('a3', 'landscape');
        return $pdf->download('invoiceGlimpz.pdf');
    }
    
    
    
}
