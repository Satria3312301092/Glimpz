<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
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

    .mb-8 {
        margin-bottom: 2rem;
    }

    .grid {
        display: grid;
    }

    .grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .gap-12 {
        gap: 3rem;
    }

    .divide-x-2 {
        border-left-width: 2px;
    }

    .divide-slate-300 > :not(:first-child) {
        border-left: 2px solid #d1d5db;
    }

    .px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
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

    .grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .grid-flow-row {
        grid-auto-flow: row;
    }

    .gap-y-12 {
        row-gap: 3rem;
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

    @media print {
        .grid {
        display: table;
        width: 100%;
        }
        .grid > div {
        display: table-cell;
        padding: 10px;
        border: 1px solid #e5e7eb;
        }
    }
    </style>
    </head>
<body>
    

    <div class="container">
    <div class="flex justify-between mb-5">
        <h1 class="font-bold text-3xl">Invoice</h1>
        <button class="btn">
        <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_672_180)">
            <path d="M20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2ZM11.5 9.5C11.5 10.33 10.83 11 10 11H9V12.25C9 12.66 8.66 13 8.25 
            13C7.84 13 7.5 12.66 7.5 12.25V8C7.5 7.45 7.95 7 8.5 7H10C10.83 7 11.5 7.67 11.5 8.5V9.5ZM16.5 11.5C16.5 12.33 15.83 13 15 13H13C12.72 13 12.5 12.78 12.5 12.5V7.5C12.5 
            7.22 12.72 7 13 7H15C15.83 7 16.5 7.67 16.5 8.5V11.5ZM20.5 7.75C20.5 8.16 20.16 8.5 19.75 8.5H19V9.5H19.75C20.16 9.5 20.5 9.84 20.5 10.25C20.5 10.66 20.16 11 19.75 11H19V12.25C19 
            12.66 18.66 13 18.25 13C17.84 13 17.5 12.66 17.5 12.25V8C17.5 7.45 17.95 7 18.5 7H19.75C20.16 7 20.5 7.34 20.5 7.75ZM9 9.5H10V8.5H9V9.5ZM3 6C2.45 6 2 6.45 2 7V20C2 21.1 2.9 22 4 
            22H17C17.55 22 18 21.55 18 21C18 20.45 17.55 20 17 20H5C4.45 20 4 19.55 4 19V7C4 6.45 3.55 6 3 6ZM14 11.5H15V8.5H14V11.5Z" fill="currentColor"/>
            </g>
            <defs><clipPath id="clip0_672_180"><rect width="24" height="24" fill="white"/></clipPath></defs>
        </svg>
        Print
        </button>
    </div>
    <div class="bg-white border rounded-2xl shadow-md shadow-gray-300 p-10 mb-10">
        <div class="flex items-center mb-5">
        <img src="images/logo.png" style="width: 64px; height: 64px;" alt="">
        <div>
            <h1 class="font-bold text-3xl">Glimpz</h1>
            <p class="text-sm">Invoice</p>
        </div>
        </div>
        <div class="bg-gray-200 rounded-2xl p-5 mb-8">
        <div class="grid grid-cols-4 gap-12 divide-x-2 divide-slate-300">
            <div class="px-8">
            <h3 class="text-slate-500 text-base">Invoice Number</h3>
            <a class="font-bold text-xl">#278</a>
            </div>
            <div class="px-8">
            <h3 class="text-slate-500 text-base">Email</h3>
            <a class="font-bold text-xl">hye@gmail.com</a>
            </div>
            <div class="px-8">
            <h3 class="text-slate-500 text-base">Method</h3>
            <a class="font-bold text-xl">Dana</a>
            </div>
            <div class="px-8">
            <h3 class="text-slate-500 text-base">Date</h3>
            <a class="font-bold text-xl">12 July 2024</a>
            </div>
        </div>
        </div>
        <h1 class="font-bold text-xl mb-5">Invoice Details</h1>
        <div class="divider"></div>
        <div class="grid grid-cols-2 grid-flow-row gap-y-12 mb-8">
        <div>
            <h3 class="font-bold">Title</h3>
            <a class="text-slate-500">I will made 2D Animation</a>
        </div>
        <div>
            <h3 class="font-bold">Type</h3>
            <a class="text-slate-500">Basic Animation</a>
        </div>
        <div>
            <h3 class="font-bold">Detail</h3>
            <a class="text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat et animi deleniti molestias est blanditiis voluptates iusto aspernatur nulla mollitia ratione itaque, quibusdam illo voluptate.</a>
        </div>
        <div>
            <h3 class="font-bold">Date</h3>
            <a class="text-slate-500">12 July 2024</a>
        </div>
        </div>
        <div class="flex justify-between">
        <a>Status</a>
        <span class="badge text-green-600 border border-green-600">Finished</span>
        </div>
        <div class="divider"></div>
        <div class="flex justify-between">
        <a>Tax</a>
        <a>Rp.3.000</a>
        </div>
        <div class="divider"></div>
        <div class="flex justify-between">
        <a>Price</a>
        <a>Rp.50.000</a>
        </div>
        <div class="divider"></div>
        <div class="flex justify-between">
        <a>Total Price</a>
        <a>Rp.53.000</a>
        </div>
    </div>
    </div>
</body>
</html>