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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
      /* Custom styles */
      .custom-file-input::-webkit-file-upload-button {
          color: #fff;
          background-color: #3b82f6;
          border-color: transparent;
          padding: 0.5rem 1rem;
          cursor: pointer;
      }

      .custom-file-input::-webkit-file-upload-button:hover {
          background-color: #2563eb;
      }

      .custom-file-input {
          width: calc(100% - 8rem); /* Menyesuaikan lebar input */
          border-radius: 0.375rem;
          border: 2px solid #3b82f6;
          color: #3b82f6;
          transition: border-color 0.3s ease;
          outline: none;
      }

      .custom-file-input:focus {
          border-color: #2563eb;
      }
  </style>
</head>
<body class="font-poppins">
  <!-- navbar -->
  <div class="navbar shadow-lg bg-base-100 rounded-box mb-10">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52" >
          <li><a>Item 1</a></li>
          <li>
            <a>Parent</a>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </li>
          <li><a>Item 3</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl">daisyUI</a>
    </div>
    <div class="navbar-center hidden lg:flex z-[1]">
      <ul class="menu menu-horizontal px-1">
        <li><a>Item 1</a></li>
        <li>
          <details>
            <summary>Parent</summary>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </details>
        </li>
        <li><a>Item 3</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a class="btn">Button</a>
    </div>
  </div>
  <!-- navbar end -->

<!-- container -->
<div class="container mx-auto grid justify-center items-center">
  <!-- card 1 -->
   
  
  
   
  <div class="grid grid-cols-2 gap-10 mb-24">
    <div class="col-span-1">

        <div class="bg-white border-2 rounded-xl w-[35rem] 2xl:w-[48rem] h-[47rem] py-5 px-10 mb-10">
          <!-- profile user -->
            <h1 class="font-bold text-2xl mb-3">Payment Invoice</h1>
              @if ($payments->Invoice_Url ?? false)
                <iframe class="rounded-xl border-2 w-full h-[40rem] aspect-auto" src="{{$payments->Invoice_Url }}" frameborder="0">
                </iframe>
              @else()
                <p>Click Button Verify Payment First for Pay the service</p> 
              @endif

            <!-- <div role="tablist" class="tabs tabs-lifted">
              <a role="tab" class="tab w-24 tab-active" onclick="toggleTab('tab-1')">Bank</a>
                <div id="tab-1" role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box w-full h-[480px]">
                  
                </div>
              </a>
                {{-- <a role="tab" class="tab w-24" onclick="toggleTab('tab-2')">Tab 2</a>
                <div id="tab-2" role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">Tab content 2</div> --}}
            </div> -->

      </div> 
      
      @if($orderss->Status == 'WaitingApprove')
      <div class="flex justify-center">
        <button class="btn btn-wide bg-blue-700 hover:bg-blue-700 text-white" onclick="my_modal_3.showModal()">Upload Proof</button>
      </div>
      @endif  
    </div>
    
    <!-- order summary -->
    @foreach($userss as $user)
              @foreach($sellerss as $seller)
              @if($user->Id_User == $seller->Id_User)
              @foreach($servicesOrder as $serviceOrder)
              @if($seller->Id_Seller == $serviceOrder->Id_Seller)
    <div class="col-span-1">
   
    <div class="bg-white border-2 rounded-xl py-5 px-10 mb-6 w-[31.25rem]">
        <h1 class="font-bold text-2xl mb-3">{{ $user->Name }}</h1>
        <ul>
          <li><a>{{ $user->Email }}</a></li>  
          <li><a>{{ $user->Number_Phone }}</a></li> 
        </ul>
      </div>
      @endif
      @endforeach
                @endif
                @endforeach  
              @endforeach
     

      <div class="bg-white border-2 rounded-xl w-[31.25rem]">
        <div class="border-b-2 px-10 py-5">
          <h1 class="font-bold text-2xl">Order Summary</h1>
        </div>
        
      
        <form action="{{ route('orderpayment.store') }}" method="POST">
        @csrf
        <input hidden name="Id_User" id="Id_User" value="{{ Auth::user()->Id_User }}"></input>
        <input hidden name="Id_Order" id="Id_Order" value="{{ $orders->Id_Order }}"></input>
        <input hidden name="Method" id="Method" value=""></input>
        @foreach($servicesOrder as $serviceOrder)
        <input hidden name="Title" id="TItle" value="{{$serviceOrder->Title }}"></input>
        @break
        @endforeach
        @foreach ($typesOrder as $typeOrder)
        <input hidden name="Type_Name" id="Type_Name" value="{{$typeOrder->Type_Name }}"></input>
        @break
        @endforeach
        
        <!-- title img -->
        <div class="border-b-2 px-10 py-5">
        @foreach ($servicesOrder as $serviceOrder)
          <div class="grid grid-flow-col gap-4">

            <div class="w-44 h-auto">
              <img src="{{ Storage::url($serviceOrder->Thumbnail) }}" class="rounded-xl" alt="">
            </div>

            <div class="w-full">
              <p class="font-bold">{{$serviceOrder->Title}}</p>
            </div>

          </div>
          @break
                    @endforeach
        </div>
          <!-- title img -->

          <!-- tipe -->
          <div class="border-b-2 py-5 px-8">
            <h1 class="font-semibold">{{$typeOrder->Type_Name}} Animation</h1>
            <ul>
            @foreach ($detailsOrder as $detailOrder)
              <li class="grid grid-flow-col mt-2 justify-start">
                <svg class="w-5 h-5 mr-2" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22.1923 19.3079L17 24.5002L22.1923 29.6925" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.8076 12.3846L16.9999 7.19228L11.8076 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17 24.4998H27.3846C29.9337 24.4998 32 22.4335 32 19.8844V11.8075C32 9.25852 29.9337 7.19214 27.3846 7.19214H23.9231" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17 7.19214H6.61538C4.06638 7.19214 2 9.25852 2 11.8075V19.8844C2 22.4335 4.06638 24.4998 6.61538 24.4998H10.0769" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{$detailOrder->Revision}} Revision</li>
              <li class="grid grid-flow-col mt-2 justify-start">
                <svg class="w-5 h-5 mr-2" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.9999 31.9998C24.0098 31.9998 29.6922 26.3174 29.6922 19.3075C29.6922 12.2978 24.0098 6.61523 16.9999 6.61523C9.99015 6.61523 4.30762 12.2978 4.30762 19.3075C4.30762 26.3174 9.99015 31.9998 16.9999 31.9998Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M2 6.61538C3.62065 4.73288 5.5769 3.16788 7.76923 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M32.0007 6.61538C30.38 4.73288 28.4238 3.16788 26.2314 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17 12.3848V19.3078H22.7692" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{$detailOrder->Day}} Days Delivery Time</li>
                @break
                        @endforeach
            </ul>
          </div>
          <!-- tipe -->

          <!-- price -->
          <div class="border-b-2 px-8 py-5">
            <ul class="grid grid-flow-col justify-between ">
              <li>
                <h1 class="font-semibold">Service Price</h1>
              </li>
              <li>
                <?php
                  if ($detailOrder->Price <= 10000000) {
                    $tax = $detailOrder->Price * 10 / 100;
                  } elseif ($detailOrder->Price > 10000000 && $detailOrder->Price <= 50000000) {
                      $tax = $detailOrder->Price * 8 / 100;
                  } else {
                      $tax = $detailOrder->Price * 5 / 100;
                  }
                ?>
                <input type="text" hidden name="Price" value="{{ $detailOrder->Price + $tax }}">Rp{{ number_format($detailOrder->Price, 0, ',', '.') }}  </input>
                <input type="text" hidden name="Total" id="Total" value="{{ $detailOrder->Price + $tax }}"></input>
              </li>
            </ul>

            <ul class="grid grid-flow-col justify-between ">
              <li><h1 class="font-semibold">Tax Price</h1></li>
              <li>
                <p>Rp{{ number_format($tax, 0, ',', '.') }}</p>
              </li>
            </ul>
        </div>
          <!-- price -->

          <!-- total -->
          <div class="px-8 py-5">
            <ul class="grid grid-flow-col justify-between mb-8">
              <li>
                <h1 class="font-semibold">Total Price</h1>
              </li>
              <li>
                <p>Rp{{ number_format($detailOrder->Price + $tax, 0, ',', '.') }}</p>
              </li>
            </ul>
              <button class="btn btn-block bg-blue-700 hover:bg-blue-700 text-white" >Verify payment</button>
          </div>
          <!-- total price -->
          
        </form>
        
        <!-- modal Verif -->
        @if($orderss->Status == 'WaitingApprove')
        <dialog id="my_modal_3" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <form action="{{ route('orderpayment.upload', ['id' => $payments->Id_Payment]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h3 class="font-bold text-lg mb-1">Verify Payment</h3>
      <p class="text-xs mb-1">Upload your payment proof here</p>
      <input id="ProofPayment" name="ProofPayment" type="file" class="mt-1 custom-file-input w-full mb-10">
      <div class="grid justify-center">
        <button type="submit" class="btn btn-block bg-blue-700 px-14 hover:bg-blue-700 text-white shadow-md">Confirm</button>
      </div>
    </form>
  </div>
</dialog>
        @endif


          <!-- modal verify -->
        </div>
      </div>
      
      <!-- order summary -->
     
</div>  
               
</div>
<!-- container -->

          <!-- total -->
    <script>
      function toggleTab(tabId) {
          // Sembunyikan semua tab content
          document.querySelectorAll('.tab-content').forEach(content => {
              content.classList.add('hidden');

          });
  
          // Tampilkan tab content yang sesuai
          document.getElementById(tabId).classList.remove('hidden');
  
          // Hapus kelas tab-active dari semua tab
          document.querySelectorAll('.tab').forEach(tab => {
              tab.classList.remove('tab-active');
          });
  
          // Tambahkan kelas tab-active ke tab yang ditekan
          document.querySelector(`[onclick="toggleTab('${tabId}')"`).classList.add('tab-active');
      }
  </script>
  @if (session('verif'))
    <script>
        alert("{{ session('verif') }}")
    </script>
  @endif

  @if (session('success'))
  <script>
      alert("{{ session('success') }}")
  </script>
@endif
    </body>
    </html>
         