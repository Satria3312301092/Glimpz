<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
        .container {
            max-width: 100%;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
            margin-left: auto;
            margin-right: auto;
        }
    
        .flex {
            display: flex;
        }
    
        .justify-between {
            justify-content: space-between;
        }
    
        .mb-5 {
            margin-bottom: 1.25rem;
        }
    
        .font-bold {
            font-weight: 700;
        }
    
        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }
    
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            border: 1px solid transparent;
            background-color: #ffffff;
            color: #000000;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    
        .btn svg {
            width: 1rem;
            height: 1.25rem;
            color: #f87171;
        }
    
        .bg-white {
            background-color: #ffffff;
        }
    
        .border {
            border: 1px solid #e5e7eb;
        }
    
        .rounded-2xl {
            border-radius: 1rem;
        }
    
        .shadow-md {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    
        .shadow-gray-300 {
            box-shadow: 0 4px 6px rgba(209, 213, 219, 0.1);
        }
    
        .p-10 {
            padding: 2.5rem;
        }
    
        .mb-10 {
            margin-bottom: 2.5rem;
        }
    
        .items-center {
            align-items: center;
        }
    
        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
    
        .bg-gray-200 {
            background-color: #e5e7eb;
        }
    
        .p-5 {
            padding: 1.25rem;
        }
    
        .px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
        }
    
    
        .mb-8 {
            margin-bottom: 2rem;
        }
    
        .text-slate-500 {
            color: #6b7280;
        }
    
        .text-base {
            font-size: 1rem;
            line-height: 1.5rem;
        }
    
        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
    
        .divider {
            height: 1px;
            background-color: #e5e7eb;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
    
        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.875rem;
            font-weight: 700;
            text-transform: uppercase;
        }
    
        .text-green-600 {
            color: #10b981;
        }
    
        .border-green-600 {
            border-color: #10b981;
        }
    
        .invoice-detail tr td {
            width: 50%;
        }
        .invoice-summary tr td {
            width: 25%;
        }
    
    </style>
    </head>
    
        <body>
        <div class="container">
            <div class="bg-white border rounded-2xl shadow-md shadow-gray-300 p-10 mb-10">
                <div class="flex items-center mb-5">
                <img src="images/logo.png" style="width: 64px; height: 64px;" alt="">
                <div>
                    <span class="font-bold text-3xl">Glimpz</span><br>
                    <span class="text-sm">Invoice ID {{ $invoice->Id_Invoice }}</</span>
                </div>
                </div>
                <div class="bg-gray-200 rounded-2xl p-5 mb-8">
                <table class="w-full text-left invoice-summary">
                    <tr>
                    <td class="px-8 py-2">
                        <h3 class="text-slate-500 text-base">Invoice Number</h3>
                        <a class="font-bold text-xl">#{{ $payment->External_Id }}</a>
                    </td>
                    <td class="px-8 py-2">
                        <h3 class="text-slate-500 text-base">Email</h3>
                        <a class="font-bold text-xl">{{ $user->Email }}</a>
                    </td>
                    <td class="px-8 py-2">
                        <h3 class="text-slate-500 text-base">Method</h3>
                        <a class="font-bold text-xl">{{ $payment->Method }}</a>
                    </td>
                    <td class="px-8 py-2">
                        <h3 class="text-slate-500 text-base">Date</h3>
                        <a class="font-bold text-xl">{{ Carbon\Carbon::parse($invoice->Date)->format('d F Y')  }}</a>
                    </td>
                    </tr>
                </table>
                </div>
                <h1 class="font-bold text-xl mb-5">Invoice Details</h1>
                <div class="divider"></div>
                <table class="w-full text-left mb-8 invoice-detail">
                <tr>
                    <td class="py-2">
                    <h3 class="font-bold">Title</h3>
                    <a class="text-slate-500">{{ $service->Title }}</a>
                    </td>
                    <td class="py-2">
                    <h3 class="font-bold">Type</h3>
                    <a class="text-slate-500">{{ $type->Type_Name }} {{ $service->Category }}</a>
                    </td>
                </tr>
                <tr>
                    <td class="py-2">
                    <h3 class="font-bold">Descriptions</h3>
                    <a class="text-slate-500">{{$detail->Descriptions}}</a>
                    </td>
                    <td class="py-2">
                    <h3 class="font-bold">Date</h3>
                    <a class="text-slate-500">{{ Carbon\Carbon::parse($invoice->Date)->format('d F Y')  }}</a>
                    </td>
                </tr>
                </table>
                <div class="flex justify-between">
                <a>Status</a>
                <span class="badge text-green-600 border border-green-600">PAID</span>
                </div>
                <div class="divider"></div>
                <div class="flex justify-between">
                <a>Tax</a>
                <a>Rp{{ number_format($tax, 0, ',', '.') }}</a>
                </div>
                <div class="divider"></div>
                <div class="flex justify-between">
                <a>Price</a>
                <a>Rp{{ number_format($detail->Price, 0, ',', '.') }}</a>
                </div>
                <div class="divider"></div>
                <div class="flex justify-between">
                <a>Total Price</a>
                <a>Rp{{ number_format($payment->Total, 0, ',', '.') }}</a>
                </div>
            </div>
            </div>
    </body>
    </html>