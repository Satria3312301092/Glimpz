<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimpz - Category | 3D Animation</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
</head>
<body class="font-poppins">
<div class="navbar shadow-lg bg-base-100 rounded-box mb-14">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 w-52">
          <li><a>Home</a></li>
          <li>
            <a>Service</a>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </li>
          <li><a>About</a></li>
          <li><a>Contact</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl">Glimpz</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
      <li><a href="{{route('beranda')}}">Home</a></li>
        <li><a href="{{route('listservice.index')}}">Service</a></li>
        <li><a>About</a></li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <div class="navbar-end">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full shadow-lg">
          <img alt="" src="{{asset('/icon/Profileuser.svg')}}" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a href="{{ route('profilebuyer.index') }}"><img src="images/Profile.svg" alt="">Profile</a>
        </li>
        <form action="{{ route ('logout') }}" method="POST">
          @csrf
          <li>
            <button type="submit"><img src="images/logout.svg" alt="">Logout</button>
          </li>
        </form>
      </ul>
    </div>
    </div>
  </div>

<div class="container mx-auto px-10">
    <div class="flex justify-between mb-5">
        <h1 class="font-bold text-3xl">Invoice</h1>
        <a href="{{ route('invoice.viewpdf', ['id' => $invoices->Id_Invoice]) }}" class="btn">
            <svg class="w-4 h-5 text-red-500" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_672_180)">
                <path d="M20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2ZM11.5 9.5C11.5 10.33 10.83 11 10 11H9V12.25C9 12.66 8.66 13 8.25 
                13C7.84 13 7.5 12.66 7.5 12.25V8C7.5 7.45 7.95 7 8.5 7H10C10.83 7 11.5 7.67 11.5 8.5V9.5ZM16.5 11.5C16.5 12.33 15.83 13 15 13H13C12.72 13 12.5 12.78 12.5 12.5V7.5C12.5 
                7.22 12.72 7 13 7H15C15.83 7 16.5 7.67 16.5 8.5V11.5ZM20.5 7.75C20.5 8.16 20.16 8.5 19.75 8.5H19V9.5H19.75C20.16 9.5 20.5 9.84 20.5 10.25C20.5 10.66 20.16 11 19.75 11H19V12.25C19 
                12.66 18.66 13 18.25 13C17.84 13 17.5 12.66 17.5 12.25V8C17.5 7.45 17.95 7 18.5 7H19.75C20.16 7 20.5 7.34 20.5 7.75ZM9 9.5H10V8.5H9V9.5ZM3 6C2.45 6 2 6.45 2 7V20C2 21.1 2.9 22 4 
                22H17C17.55 22 18 21.55 18 21C18 20.45 17.55 20 17 20H5C4.45 20 4 19.55 4 19V7C4 6.45 3.55 6 3 6ZM14 11.5H15V8.5H14V11.5Z" fill="currentColor"/>
                </g><defs><clipPath id="clip0_672_180"><rect width="24" height="24" fill="white"/></clipPath></defs>
            </svg>Print
          </a>
    </div>
    <div class="bg-white border rounded-2xl shadow-md shadow-gray-300 p-10 mb-10">
        <div class="flex items-center mb-5">
            <img src="{{asset('images/logo.png')}}" style="width: 64px; height: 64px;" alt="">
                <div>
                    <h1 class="font-bold text-3xl">Glimpz</h1>
                    <p class="text-sm">Invoice ID {{ $invoices->Id_Invoice }}</p>
                </div>
        </div>
        <div class="bg-gray-200 rounded-2xl p-5 mb-8">
            <div class="grid grid-cols-4 gap-12 divide-x-2 divide-slate-300">
                <div class="px-8">
                    <h3 class="text-slate-500 text-base">Invoice Number</h3>
                    <a class="font-bold text-xl">#{{ $payments->External_Id }}</a>
                </div>
                <div class="px-8">
                    <h3 class="text-slate-500 text-base">Email</h3>
                    <a class="font-bold text-xl">{{ $users->Email }}</a>
                </div>
                <div class="px-8">
                    <h3 class="text-slate-500 text-base">Method</h3>
                    <a class="font-bold text-xl">{{ $payments->Method }}</a>
                </div>
                <div class="px-8">
                    <h3 class="text-slate-500 text-base">Date</h3>
                    <a class="font-bold text-xl">{{ Carbon\Carbon::parse($invoices->Date)->format('d F Y')  }}</a>
                </div>
            </div>
        </div>
            <h1 class="font-bold text-xl mb-5">Invoice Details</h1>
            <div class="divider"></div>
                <div class="grid grid-cols-3 grid-flow-row gap-y-12 mb-8 px-10">
                    <div>
                        <h3 class="font-bold">Title</h3>
                        <a class="text-slate-500">{{ $services->Title }}</a>
                    </div>
                    <div>
                        <h3 class="font-bold">Type</h3>
                        <a class="text-slate-500">{{ $types->Type_Name }} {{ $services->Category }}</a>
                    </div>
                    <div>
                      <h3 class="font-bold">Service ID</h3>
                      <a class="text-slate-500">{{ $services->Id_Service }}</a>
                  </div>
                    <div>
                        <h3 class="font-bold">Descriptions</h3>
                        <a class="text-slate-500">{{ $details->Descriptions }}</a>
                    </div>
                    <div>
                        <h3 class="font-bold">Date</h3>
                        <a class="text-slate-500">{{ Carbon\Carbon::parse($invoices->Date)->format('d F Y')  }}</a>
                    </div>
                    <div>
                      <h3 class="font-bold">Customer ID</h3>
                      <a class="text-slate-500">{{ $users->Id_User }}</a>
                  </div>
                </div>
                <div class="flex justify-between">
                    <a>Status</a>
                    <span class="badge text-green-600 border border-green-600">PAID</span>
                </div>
                <div class="divider"></div>
                    <div class="flex justify-between">
                        <a>Tax</a>
                        
                          <?php
                              if ($details->Price <= 10000000) {
                                $tax = $details->Price * 10 / 100;
                              } elseif ($details->Price > 10000000 && $detailOrder->Price <= 50000000) {
                                  $tax = $details->Price * 8 / 100;
                              } else {
                                  $tax = $details->Price * 5 / 100;
                              }
                          ?>
                          <a> Rp{{ number_format($tax, 0, ',', '.') }} </a>
                    </div>
                <div class="divider"></div>
                    <div class="flex justify-between">
                        <a>Price</a>
                        <a>Rp{{ number_format($details->Price, 0, ',', '.') }}</a>
                    </div>
                <div class="divider"></div>
                    <div class="flex justify-between">
                        <a>Total Price</a>
                        <a>Rp{{ number_format($payments->Total, 0, ',', '.') }}</a>
                    </div>
        </div>

        <footer class="footer p-10 mt-40 bg-base-200 text-base-content">
                <aside>
                  <img src="{{ asset('images/logo.png') }}"></img>
                  <p>GLIMPZ.<br>Providing reliable tech since 1992</p>
                </aside> 
                <nav>
                  <h6 class="footer-title">Videos</h6> 
                  <a class="link link-hover">Video Editing</a>
                  <a class="link link-hover">Video Ads</a>
                  <a class="link link-hover">Visual Effect</a>
                  <a class="link link-hover">Education</a>
                  <a class="link link-hover">Templates</a>
                  <a class="link link-hover">Short Movie</a>
                  <a class="link link-hover">Social Media</a>
                </nav> 
                <nav>
                  <h6 class="footer-title">Animation</h6> 
                  <a class="link link-hover">2D Animation</a>
                  <a class="link link-hover">3D Animation</a>
                  <a class="link link-hover">Logo Animation</a>
                  <a class="link link-hover">Film Series</a>
                  <a class="link link-hover">Character Animation</a>
                  <a class="link link-hover">Web Animation</a>
                  <a class="link link-hover">Rigging</a>
                  <a class="link link-hover">NFT Animation</a>
                </nav> 
                <nav>
                  <h6 class="footer-title">Company</h6> 
                  <a class="link link-hover">About Us</a>
                  <a class="link link-hover">Contact</a>
                </nav>
              </footer>
</div>
</body>
</html>
