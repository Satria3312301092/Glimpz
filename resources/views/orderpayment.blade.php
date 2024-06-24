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


<div class="container mx-auto grid justify-center items-center">
  <!-- card 1 -->

     
  @foreach ($orders as $order)
     

     @foreach ($servicesOrder as $serviceOrder)
     @foreach ($typesOrder as $typeOrder)
     @foreach ($detailsOrder as $detailOrder)
     {{-- @foreach ($sellersOrder as $sellerOrder) --}}
    

       
  <div class="grid grid-cols-2 gap-16 mb-24">
    <div class="col-span-1">
        <div class="bg-white border-2 rounded-xl w-[500px]">
        <!-- profile user -->
        <div class="px-10 py-5 border-b-2">
          <!-- header -->
          <h1 class="font-bold text-2xl mb-3"></h1>
          <!-- detail profile -->
          <ul>
            <li><a class="inline-flex items-center"><svg class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0502 23.7938H12.0453C10.0453 23.7931 8.08018 23.2937 6.33478 22.3462L0 24L1.69529 
              17.8374C0.649554 16.0338 0.099291 13.9879 0.100188 11.8919C0.102809 5.33474 5.4635 0 12.0501 0C15.2468 0.00137307 18.2472 1.23989 20.5033 
              3.48784C22.7594 5.73568 24.0013 8.72361 24 11.9013C23.9974 18.4569 18.6388 23.7911 12.0502 23.7938ZM6.63159 20.1934L6.99428 20.4076C8.51922 
              21.3082 10.2673 21.7848 12.0495 21.7855H12.0536C17.5279 21.7855 21.9835 17.3511 21.9856 11.9007C21.9867 9.25951 20.9546 6.77607 19.0793 4.90766C17.2041 
              3.03924 14.7104 2.00978 12.0575 2.00886C6.57889 2.00886 2.12327 6.44276 2.12109 11.8927C2.12032 13.7605 2.64543 15.5794 3.63966 17.1532L3.87582 17.5272L2.87245 
              21.1748L6.63159 20.1934ZM17.6599 14.4618C17.8682 14.562 18.0088 14.6296 18.0688 14.7294C18.1434 14.8533 18.1434 15.4482 17.8948 16.1425C17.6458 16.8366 16.453 
              17.4701 15.8793 17.5554C15.3649 17.6319 14.7139 17.6639 13.9987 17.4376C13.565 17.3007 13.0089 17.1179 12.2965 16.8117C9.49729 15.6088 7.60562 12.9088 7.2481 
              12.3985C7.22305 12.3627 7.20554 12.3377 7.19576 12.3247L7.19335 12.3215C7.03533 12.1117 5.97656 10.7058 5.97656 9.25075C5.97656 7.88197 6.65216 7.16453 6.96314 
              6.83429C6.98445 6.81166 7.00404 6.79085 7.02159 6.77178C7.29527 6.47428 7.61877 6.3999 7.81781 6.3999C8.01685 6.3999 8.21612 6.40173 8.39008 6.41043C8.41155 
              6.4115 8.43388 6.41137 8.45696 6.41124C8.63096 6.41022 8.84789 6.40896 9.06188 6.92053C9.14421 7.11739 9.26466 7.40925 9.39171 7.71706C9.64864 8.33959 9.93253 
              9.02741 9.98248 9.12695C10.0571 9.2757 10.1069 9.44916 10.0074 9.64757C9.99243 9.67732 9.97861 9.7054 9.96541 9.73222C9.89065 9.8841 9.83567 9.99582 9.70879 
              10.1433C9.6589 10.2012 9.60734 10.2637 9.55578 10.3262C9.45305 10.4507 9.35034 10.5752 9.2609 10.6639C9.11143 10.8121 8.95582 10.9728 9.12999 11.2703C9.30417 
              11.5678 9.90341 12.5409 10.791 13.3288C11.7452 14.1759 12.5745 14.5339 12.9949 14.7153C13.077 14.7507 13.1435 14.7794 13.1922 14.8037C13.4907 14.9525 13.6649 
              14.9276 13.8391 14.7294C14.0133 14.5311 14.5855 13.8617 14.7845 13.5642C14.9835 13.2668 15.1827 13.3164 15.4563 13.4155C15.73 13.5147 17.198 14.2335 17.4966 
              14.3823C17.5549 14.4113 17.6094 14.4375 17.6599 14.4618Z" fill="currentColor"/>
              </svg> 
              @foreach($userss as $user)
              @foreach($sellerss as $seller)
              @if($user->Id_User == $seller->Id_User)
              @if($seller->Id_Seller == $serviceOrder->Id_Seller)
              {{ $user->Number_Phone }}</a></li>
            <li><a class="inline-flex items-center"><svg class="h-4 w-4 mr-1"  viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.22222 4.22222L10.6871 9.85944L10.6896 9.8615C11.5185 10.4693 11.9332 10.7735 12.3874 10.8909C12.7888 10.9948 13.2108 10.9948 13.6123 10.8909C14.0669 
                10.7733 14.4828 10.4684 15.3132 9.85944C15.3132 9.85944 20.1012 6.18504 22.7778 4.22222M2 16.2002V6.91135C2 5.54233 2 4.85731 2.26643 4.33442C2.50079 3.87447 2.87447 
                3.50079 3.33442 3.26643C3.85731 3 4.54233 3 5.91135 3H20.0891C21.4581 3 22.1417 3 22.6646 3.26643C23.1245 3.50079 23.4995 3.87447 23.7338 4.33442C24 4.8568 24 5.54099 
                24 6.90733V16.2044C24 17.5707 24 18.2539 23.7338 18.7763C23.4995 19.2363 23.1245 19.6106 22.6646 19.8449C22.1422 20.1111 21.459 20.1111 20.0927 20.1111H5.90733C4.54099 
                20.1111 3.8568 20.1111 3.33442 19.8449C2.87447 19.6106 2.50079 19.2363 2.26643 18.7763C2 18.2534 2 17.5693 2 16.2002Z" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ $user->Email }}</a></li>
                @endif
                @endif
                @endforeach  
              @endforeach
          </ul>
        </div>
        <div class="px-10 py-8">
          <h1 class="font-bold text-2xl mb-3">Payment Options</h1>
          <div role="tablist" class="tabs tabs-lifted">
            <a role="tab" class="tab w-24 tab-active" onclick="toggleTab('tab-1')">
              <svg class="w-24" viewBox="0 0 80 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1158_728)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.6233 17.3487C33.1437 17.4576 34.9155 16.2764 35.5396 15.6021C37.7092 13.2545 37.7615 9.85969 35.5772 7.40105C34.7647 6.48587 32.8547 5.47435 31.6464 5.61676H27.2715V17.334L31.6338 17.3487H31.6233ZM29.7385 14.8105V8.14032C30.4233 8.09539 31.1103 8.09539 31.795 8.14032C32.3339 8.2028 32.8478 8.40175 33.2882 8.71833C35.8013 10.4356 34.7542 14.5298 31.7532 14.8042C31.0825 14.8513 30.4094 14.8534 29.7385 14.8105Z" fill="#008CEB"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M70.0295 17.3698H72.5238V14.8441H77.4725L77.4871 17.3572H79.9814V13.1938C79.9814 11.9373 80.0861 10.3708 79.772 9.23363C79.4866 8.19257 78.8686 7.27342 78.0122 6.61638C77.1557 5.95935 76.1079 5.60049 75.0285 5.59456C73.949 5.58862 72.8973 5.93594 72.0337 6.58353C71.1701 7.23111 70.542 8.14342 70.2452 9.18127C69.9102 10.3038 70.0232 11.9143 70.0232 13.1603C70.0232 14.5677 70.0086 15.9834 70.0232 17.3907L70.0295 17.3698ZM72.5259 12.3038C72.5112 11.2567 72.4002 10.1362 72.8924 9.32996C73.1084 8.95875 73.4189 8.65139 73.7922 8.43913C74.1656 8.22688 74.5886 8.11732 75.018 8.12158C75.4453 8.12474 75.8644 8.2387 76.2344 8.45234C76.6044 8.66599 76.9127 8.97199 77.129 9.34043C77.6149 10.1781 77.4997 11.2253 77.4871 12.3059L72.5259 12.3038Z" fill="#008CEB"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M41.5055 17.3675H43.9914C43.9914 16.8397 43.9244 15.2251 44.0144 14.8418H48.9443L48.961 17.3654H51.4511C51.4385 15.9664 51.4511 14.5696 51.4511 13.1769C51.4511 11.9832 51.5621 10.2743 51.2416 9.21461C50.9545 8.17491 50.3356 7.25749 49.479 6.60198C48.6224 5.94647 47.5751 5.58877 46.4965 5.58332C45.4179 5.57786 44.3671 5.92496 43.5039 6.57177C42.6408 7.21859 42.0126 8.1297 41.715 9.16644C41.382 10.2554 41.4951 11.9204 41.4951 13.1329C41.4951 14.5319 41.4637 15.9664 41.4951 17.3612L41.5055 17.3675ZM43.9935 12.3036C43.9767 11.2565 43.8699 10.1214 44.3621 9.33189C44.578 8.96164 44.8873 8.65446 45.259 8.44098C45.6306 8.22749 46.0518 8.11515 46.4804 8.11515C46.909 8.11515 47.3302 8.22749 47.7018 8.44098C48.0735 8.65446 48.3828 8.96164 48.5987 9.33189C49.0867 10.1696 48.9694 11.2335 48.961 12.2994L43.9935 12.3036Z" fill="#008CEB"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M55.826 10.1926L55.7904 11.9371C55.7904 13.4031 55.7192 16.1402 55.7904 17.3319H58.2281C58.2847 16.4942 58.1402 10.5444 58.2931 10.3538C58.2931 9.19782 59.5014 8.12138 60.7203 8.11719C61.3538 8.11338 61.9639 8.35681 62.4208 8.79573C62.7307 9.07845 63.2061 9.72348 63.1978 10.3748C63.3108 10.4397 63.2208 16.6575 63.2564 17.3465H65.6962L65.6773 10.2366C65.7381 9.6795 65.403 8.81876 65.1873 8.38316C64.7873 7.55317 64.1628 6.85177 63.3847 6.35838C62.6066 5.86499 61.7059 5.59933 60.7846 5.59149C59.8632 5.58364 58.9581 5.83392 58.1717 6.31398C57.3853 6.79405 56.749 7.48471 56.3349 8.30777C56.1255 8.73709 55.7737 9.62086 55.826 10.1926Z" fill="#008CEB"/>
                <path d="M11.4366 22.8733C17.7529 22.8733 22.8733 17.7529 22.8733 11.4366C22.8733 5.12036 17.7529 0 11.4366 0C5.12036 0 0 5.12036 0 11.4366C0 17.7529 5.12036 22.8733 11.4366 22.8733Z" fill="#008CEB"/>
                <path d="M18.1005 11.4848V14.7037C18.1005 14.9131 18.0105 14.9571 17.8346 14.8545C17.5993 14.7132 17.3543 14.5887 17.1016 14.4817C16.3383 14.1776 15.5116 14.0675 14.6953 14.1613C13.8044 14.2768 12.9301 14.4961 12.0901 14.8147C11.2524 15.0974 10.4314 15.4031 9.57699 15.6398C8.86928 15.85 8.13277 15.9468 7.39479 15.9267C6.57693 15.895 5.78207 15.6471 5.09113 15.2084C5.00431 15.1561 4.93309 15.0815 4.88484 14.9924C4.8366 14.9033 4.8131 14.8029 4.81678 14.7016C4.81678 12.5934 4.81678 10.4852 4.81678 8.37697C4.81678 8.27435 4.81678 8.15289 4.90893 8.10053C5.00108 8.04817 5.09532 8.13404 5.1749 8.18639C5.9252 8.69372 6.81383 8.95702 7.7194 8.94032C8.3669 8.91376 9.00727 8.79457 9.62097 8.58639C10.4922 8.31624 11.3341 7.95812 12.1906 7.65446C12.8574 7.39822 13.541 7.18829 14.2367 7.02618C14.8337 6.88637 15.4532 6.87169 16.0562 6.98306C16.6592 7.09443 17.2326 7.32945 17.7403 7.6733C17.8567 7.74462 17.952 7.84565 18.0165 7.96601C18.0809 8.08637 18.1121 8.22171 18.1068 8.35812C18.1068 9.40524 18.1068 10.4524 18.1068 11.4995L18.1005 11.4848Z" fill="#FEFEFE"/>
                </g>
                <defs>
                <clipPath id="clip0_1158_728">
                <rect width="80" height="22.8733" fill="white"/>
                </clipPath>
                </defs>
                </svg>
                
            </a>
            <div id="tab-1" role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">Tab content 1</div>
            <a role="tab" class="tab w-24" onclick="toggleTab('tab-2')">Tab 2</a>
            <div id="tab-2" role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">Tab content 2</div>
  </div>
        </div>

      </div> 
    </div>
    <!-- order summary -->


      
 
    

      
  

  <form action="{{ route('orderpayment.store') }}" method="POST">
   @csrf
   <input hidden name="Id_User" id="Id_User" value="{{ Auth::user()->Id_User }}"></input>
   <input hidden name="Id_Order" id="Id_Order" value="{{ $orders->Id_Order }}"></input>
   <input hidden name="Method" id="Method" value="Dana"></input>
   <input hidden name="Title" id="TItle" value="{{ $serviceOrder->Title }}"></input>
   <input hidden name="Type_Name" id="Type_Name" value="{{ $typeOrder->Type_Name }}"></input>
   

    <div class="col-span-1">
  <div class="bg-white border-2 rounded-xl w-[500px]">
        <div class="border-b-2 px-10 py-5">
          <h1 class="font-bold text-2xl">Order Summary</h1>
        </div>
        <!-- title img -->
        <div class="border-b-2 px-10 py-5">
          <div class="grid grid-flow-col gap-4">
            <div class="w-44 h-auto">
              <img src="{{ Storage::url($serviceOrder->Thumbnail) }}" class="rounded-xl" alt="">
            </div>
            <div class="w-full">
              <p class="font-bold">{{$serviceOrder->Title}}</p>
            </div>
          </div>
          </div>
          <!-- title img -->
          <!-- tipe -->
          <div class="border-b-2 py-5 px-8">
            <h1 class="font-semibold">{{$typeOrder->Type_Name}} Animation</h1>
            <ul>
            <li class="grid grid-flow-col mt-2 justify-start"><svg class="w-5 h-5 mr-2" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </ul>
          </div>
          <!-- tipe -->

          <!-- harga -->
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
            <li>
              <h1 class="font-semibold">Tax Price</h1>
            </li>
            <li>
              <p>Rp{{ number_format($tax, 0, ',', '.') }}  </p>
            </li>
            </ul>
        </div>
          <!-- harga -->

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
              <!-- You can open the modal using ID.showModal() method -->
              <button class="btn btn-block bg-blue-700 hover:bg-blue-700 text-white" onclick="my_modal_3.showModal()">Verify payment</button>
              <dialog id="my_modal_3" class="modal">
                <div class="modal-box">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <h3 class="font-bold text-lg mb-1">Verify Payment</h3>
                  <p class="text-xs mb-1">Upload your payment proof here</p>
                  <input id="fileInput" type="file" class="mt-1 custom-file-input w-full mb-10">
                  <div class="grid justify-center">
                  <button class="btn btn-block bg-blue-700 px-14 hover:bg-blue-700 text-white shadow-md">Confirm</button>
                  </div>
                </div>
              </form>
                
                {{-- @endforeach    --}}
                @endforeach   
                @endforeach   
                @endforeach
                @endforeach
        
      
  
              </div>
              </dialog>
        </div>
          <!-- total -->
  </div>
        <!-- order summary -->
    </div>
  </div>
  
    </div>
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
    </body>
    </html>
         