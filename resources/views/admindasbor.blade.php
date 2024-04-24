<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
    <title>piw</title>
</head>
<body>
<div class="navbar bg-base-100 shadow-xl h-28">
  <div class="flex-1">
  </div>
  <div class="flex-none">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <div class="indicator">
        <button id="" class="mr-1 bg-transparent " id="btn_search1"><img src="images/search3.svg" alt=""></button>
      </div>

      </div>
    </div>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full shadow-lg">
          <img alt="" src="images/Profileuser.svg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
        </li>
        <li><a>Profile</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="drawer lg:drawer-open">
  <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content flex flex-col ml-16 mt-10">
    <!-- Page content here -->
    <a class="text-4xl font-semibold font-Poppins mt-5 text-left">Dashboard</a>
    
    <div class="grid grid-cols-4 mt-6 gap-4">
    <div class="stats shadow-xl flex ">
    <div class="stat p-10">
    <div class="stat-title text-3xl font-semibold mb-4">Services</div>
    <div class="stat-value text-6xl">7</div>
    </div>
    </div>


    <div class="stats shadow-xl flex">
    <div class="stat p-10">
    <div class="stat-title text-3xl font-semibold mb-4">Users</div>
    <div class="stat-value text-6xl">10</div>
    </div>
    </div>

    <div class="stats shadow-xl flex">
    <div class="stat p-10">
    <div class="stat-title text-3xl font-semibold mb-4">Invoices</div>
    <div class="stat-value text-6xl">5</div>
    </div>
    </div>

    <div class="stats shadow-xl flex">
    <div class="stat p-10">
    <div class="stat-title text-3xl font-semibold mb-4">Orders</div>
    <div class="stat-value text-6xl">5</div>
    </div>
    </div>
    </div>


    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
  
  </div> 
  <div class="drawer-side -mt-28 mx-auto ">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
    <ul class="menu p-4 w- min-h-full bg-blue-600 text-white">
      <!-- Sidebar content here -->
      <a class="GlimpzLogo text-4xl font-semibold font-Poppins mt-5 text-center">Glimpz</a>
      <li class="mt-16 font-normal text-2xl  text-left mb-4 " ><a><img class="mr-3" alt="" src="images/dashboard2.svg" />Dashboard</a></li>
      <li class="mt-1 font-normal text-2xl  text-left mb-4 " ><a><img class="mr-3" alt="" src="images/User.svg" />Users</a></li>
      <li class="mt-1 font-normal text-2xl text-left mb-4 " ><a><img class="mr-3" alt="" src="images/Service icon.svg" />Service</a></li>
      <li class="mt-1 font-normal text-2xl text-left mb-4 " ><a><img class="mr-3" alt="" src="images/Order icon.svg" />Order</a></li>
      <li class="mt-1 font-normal text-2xl text-left mb-4 " ><a><img class="mr-3" alt="" src="images/Invoice icon.svg" />Invoice</a></li>
      <li class="mt-1 font-normal text-2xl text-left mb-4 " ><a><img class="mr-3" alt="" src="images/Payment icon.svg" />Payment</a></li>
    </ul>
  
  </div>
</div>

</body>
