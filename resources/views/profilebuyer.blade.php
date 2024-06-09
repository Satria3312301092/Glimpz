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
  <!-- navbar -->
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
        <li><a href="beranda">Home</a></li>
        <li>
          <details>
            <summary>Service</summary>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </details>
        </li>
        <li><a>About</a></li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <div class="navbar-end">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full shadow-lg mr-3">
          <img alt="" src="images/Profileuser.svg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
        </li>
          <button><li><a href="{{ route('profilebuyer.index') }}"><img src="images/Profile.svg" alt="">Profile</a></li></button>
        <form action="{{ route ('logout') }}" method="POST">
          @csrf
          <button type="submit"><li><a><img src="images/logout.svg" alt="">Logout</a></li></button>
        </form>
      </ul>
    </div>
    </div>
  </div>
  <!-- Navbar end -->

  <!-- content -->
    <div class="container mx-auto flex justify-center items-center">
        <div class="grid grid-cols-3 gap-8 mb-20">
          <!-- profile -->
          @foreach ($users as $user)
          <div class="col-span-1">
            <div class="card card-compact w-96 bg-base-100 shadow-xl border-2 pb-20">
              <figure class="border-b-2 py-5">
                <div class="avatar">
                <div class="w-32 h-32 rounded-full border-2 overflow-hidden flex items-center justify-center">
                <img src="{{ Storage::url($user->Picture) }}" class="object-cover w-full h-full" alt="profile image" />
              </div>
                </div>
              </figure>
              <div class="card-body ml-4 mr-4">
                <div class="grid grid-cols-2 gap-4">
                  <div class="grid items-center">
                    <h2 class="card-title">{{ $user->Name }}</h2>
                  </div>
                  <div class="grid justify-end items-center">
                    <!-- You can open the modal using ID.showModal() method -->
                      <button class="btn bg-transparent border-none shadow-none" onclick="my_modal_3.showModal()">
                        <svg class="h-7 w-7" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5837 8.33335C11.1319 8.33335 8.33366 11.1316 8.33366 14.5834V35.4167C8.33366 38.8685 11.1319 41.6667 14.5837 41.6667H35.417C38.8688 41.6667 41.667 38.8685 41.667 35.4167V22.9167C41.667 21.7661 42.5997 20.8334 43.7503 20.8334C44.9009 20.8334 45.8337 21.7661 45.8337 22.9167V35.4167C45.8337 41.1697 41.17 45.8334 35.417 45.8334H14.5837C8.83069 45.8334 4.16699 41.1697 4.16699 35.4167V14.5834C4.16699 8.83039 8.83069 4.16669 14.5837 4.16669H27.0837C28.2343 4.16669 29.167 5.09943 29.167 6.25002C29.167 7.40061 28.2343 8.33335 27.0837 8.33335H14.5837Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.9948 8.33335C39.5513 8.33335 39.126 8.50953 38.8124 8.82313L22.4019 25.2336L21.6136 28.3868L24.7668 27.5985L41.1773 11.188C41.4909 10.8744 41.667 10.449 41.667 10.0055C41.667 9.56205 41.4909 9.13672 41.1773 8.82313C40.8637 8.50953 40.4383 8.33335 39.9948 8.33335ZM35.8661 5.87685C36.9611 4.78185 38.4463 4.16669 39.9948 4.16669C41.5434 4.16669 43.0285 4.78185 44.1235 5.87685C45.2185 6.97185 45.8337 8.45699 45.8337 10.0055C45.8337 11.5541 45.2185 13.0392 44.1235 14.1342L27.305 30.9528C27.038 31.2198 26.7035 31.4092 26.3371 31.5008L19.2557 33.2711C18.5457 33.4486 17.7947 33.2406 17.2772 32.7232C16.7598 32.2057 16.5518 31.4547 16.7292 30.7447L18.4996 23.6632C18.5912 23.2969 18.7806 22.9624 19.0476 22.6954L35.8661 5.87685Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.8602 11.0269C32.6738 10.2133 33.9929 10.2133 34.8065 11.0269L38.9731 15.1935C39.7867 16.0071 39.7867 17.3262 38.9731 18.1398C38.1595 18.9534 36.8405 18.9534 36.0269 18.1398L31.8602 13.9732C31.0466 13.1596 31.0466 11.8405 31.8602 11.0269Z" fill="currentColor"/>
                        </svg></button>
                      <dialog id="my_modal_3" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <h3 class="font-bold text-lg">Edit Your Profile</h3>
                          <form action="{{ route('profilebuyer.update', $user->Id_User) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="label p-2">
                            <label class="mt-3 font-semibold font-sans">Photo</label>
                          </div>
                          <input name="Picture" type="file" class="mt-1 custom-file-input w-96 mb-10">

                            <div class="label p-2">
                              <label class="mt-3 font-semibold font-sans">Full Name</label>
                            </div>
                            <div class="input shadow-2xl">
                                <input name="Name" type="text" value="{{ $user->Name }}"></input>
                            </div>
                            <div class="label p-2">
                              <label class="mt-3 font-semibold font-sans">Phone Number</label>
                            </div>
                            <div class="input shadow-2xl">
                                <input name="Numberphone" type="text" value="{{ $user->Number_Phone }}"></input>
                            </div>
                            <div class="label p-2">
                              <label class="mt-3 font-semibold font-sans">Email</label>
                            </div>
                            <div class="input shadow-2xl">
                                <input name="Email" type="text" value="{{ $user->Email }}"></input>
                            </div>
                            <div class="label p-2">
                              <label class="mt-3 font-semibold font-sans">Date of Birth</label>
                            </div>
                            <div class="input shadow-2xl">
                            <input type="date" name="Date" class="grow" value="{{ $user->Date_Of_Birth }}" placeholder="Date of Birth" />
                            </div>
                            <div class="flex justify-end">
                            <button type="submit" class="btn bg-blue-600 text-white">Update</button>
                            </div>
                        </div>
</form>
                      </dialog>
                  </div>
                </div>
                <h1 class="font-semibold mt-4">About Me</h1>
                <a class="inline-flex items-center"><svg class="mr-1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                  <g>
                   <title>Layer 1</title>
                   <image stroke="null" xlink:href="data:image/png;base64,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" xlink:href="data:image/png;base64,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" id="svg_1" height="20" width="20" y="0" x="0"/>
                  </g>
                 </svg>
                  {{ $user->Date_Of_Birth }}</a>
                <p></p>
                <h1 class="font-semibold mt-4">Contact Me</h1>
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
                    {{$user->Number_Phone}}</a></li>
                  <li><a class="inline-flex items-center"><svg class="h-4 w-4 mr-1"  viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.22222 4.22222L10.6871 9.85944L10.6896 9.8615C11.5185 10.4693 11.9332 10.7735 12.3874 10.8909C12.7888 10.9948 13.2108 10.9948 13.6123 10.8909C14.0669 
                      10.7733 14.4828 10.4684 15.3132 9.85944C15.3132 9.85944 20.1012 6.18504 22.7778 4.22222M2 16.2002V6.91135C2 5.54233 2 4.85731 2.26643 4.33442C2.50079 3.87447 2.87447 
                      3.50079 3.33442 3.26643C3.85731 3 4.54233 3 5.91135 3H20.0891C21.4581 3 22.1417 3 22.6646 3.26643C23.1245 3.50079 23.4995 3.87447 23.7338 4.33442C24 4.8568 24 5.54099 
                      24 6.90733V16.2044C24 17.5707 24 18.2539 23.7338 18.7763C23.4995 19.2363 23.1245 19.6106 22.6646 19.8449C22.1422 20.1111 21.459 20.1111 20.0927 20.1111H5.90733C4.54099 
                      20.1111 3.8568 20.1111 3.33442 19.8449C2.87447 19.6106 2.50079 19.2363 2.26643 18.7763C2 18.2534 2 17.5693 2 16.2002Z" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      {{ $user->Email }}</a></li>


                                        <!-- Open the modal using ID.showModal() method -->
                  <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
                  <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                      <h3 class="font-bold text-lg">Switch to seller</h3>
                      <form action="{{ route('profilebuyer.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="Id_User" value="{{ $user->Id_User }}">
                          <div class="label p-2">
                            <label class="mt-3 font-semibold font-sans">Identity Card</label>
                          </div>
                          <input name="IdentityCard" type="file" class="mt-1 custom-file-input w-96 mb-10">

                            <div class="label p-2">
                              <label class="mt-3 font-semibold font-sans">Account Number</label>
                            </div>
                            <div class="input shadow-2xl">
                                <input name="AccountNumber" type="text" value=""></input>
                            </div>
                      <div class="modal-action">
                        <form method="dialog">
                          <!-- if there is a button in form, it will close the modal -->
                          <button class="btn">Close</button>
                          <button type="submit" class="btn">Switch</button>
                      </form>
                          </div>
                          </div>
                          </form>
                  </dialog>

                </ul>
              </div>  
            </div>
          </div>
        <!-- profile -->

        <!-- table card -->
        <div class="col-span-2">
          <div class="grid grid-cols-2 items-center mb-4">
            <div class="grid justify-start">
              <a class="font-bold text-2xl">My Orders</a>
            </div>
            <div class="grid justify-end">
              <select class="select select-bordered select-sm text-xs max-w-xs text-blue-700 border-blue-700 focus:outline-2 focus:outline-blue-700">
                <option class="text-zinc-500 font-bold" disabled selected>Category</option>
                <option class="text-slate-700 ">All Service</option>
                <option class="text-slate-700">Video Editing</option>
                <option class="text-slate-700">Video Ads</option>
                <option class="text-slate-700">Visual Effect</option>
                <option class="text-slate-700">Education</option>
                <option class="text-slate-700">Templates</option>
                <option class="text-slate-700">Short Movie</option>
                <option class="text-slate-700">Social Media</option>
                <option class="text-slate-700">2D Animation</option>
                <option class="text-slate-700">3D Animation</option>
                <option class="text-slate-700">Logo Animation</option>
                <option class="text-slate-700">Film Series</option>
                <option class="text-slate-700">Character Animation</option>
                <option class="text-slate-700">Web Animation</option>
                <option class="text-slate-700">Rigging</option>
                <option class="text-slate-700">NFT Animation</option>
              </select>
            </div>
          </div>
          
<!-- row 1 -->
          <div class="bg-white border-2 px-5 rounded-xl">
          <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
            <figure class="w-32">
              <img src="../Asset/jasa-dummy.png" class="w-full h-full" alt="Product"/>
            </figure>
            <div class="card-body p-5">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-10 rounded-full border-2">
                      <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-success rounded-lg badge-outline">Finished</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                    <svg class="w-10 h-10 text-blue-600" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.4997 23.2916C22.4892 23.2916 23.2913 22.4895 23.2913 21.5C23.2913 20.5105 22.4892 19.7083 21.4997 19.7083C20.5102 19.7083 19.708 20.5105 19.708 21.5C19.708 22.4895 20.5102 23.2916 21.4997 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M34.0417 23.2916C35.0312 23.2916 35.8333 22.4895 35.8333 21.5C35.8333 20.5105 35.0312 19.7083 34.0417 19.7083C33.0522 19.7083 32.25 20.5105 32.25 21.5C32.25 22.4895 33.0522 23.2916 34.0417 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M8.95866 23.2916C9.94817 23.2916 10.7503 22.4895 10.7503 21.5C10.7503 20.5105 9.94817 19.7083 8.95866 19.7083C7.96915 19.7083 7.16699 20.5105 7.16699 21.5C7.16699 22.4895 7.96915 23.2916 8.95866 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>

              </div>
            </div>
          </div>
<!-- row 2 -->
          <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
            <figure class="w-32">
              <img src="../Asset/jasa-dummy.png" class="w-full h-full" alt="Product"/>
            </figure>
            <div class="card-body p-5">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-10 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-error rounded-lg badge-outline">Rejected</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                    <svg class="w-10 h-10 text-blue-600" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.4997 23.2916C22.4892 23.2916 23.2913 22.4895 23.2913 21.5C23.2913 20.5105 22.4892 19.7083 21.4997 19.7083C20.5102 19.7083 19.708 20.5105 19.708 21.5C19.708 22.4895 20.5102 23.2916 21.4997 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M34.0417 23.2916C35.0312 23.2916 35.8333 22.4895 35.8333 21.5C35.8333 20.5105 35.0312 19.7083 34.0417 19.7083C33.0522 19.7083 32.25 20.5105 32.25 21.5C32.25 22.4895 33.0522 23.2916 34.0417 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M8.95866 23.2916C9.94817 23.2916 10.7503 22.4895 10.7503 21.5C10.7503 20.5105 9.94817 19.7083 8.95866 19.7083C7.96915 19.7083 7.16699 20.5105 7.16699 21.5C7.16699 22.4895 7.96915 23.2916 8.95866 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                  </div>
                </div>

              </div>
            </div>
          </div>

<!-- row 3 -->
          <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
            <figure class="w-32">
              <img src="../Asset/jasa-dummy.png" class="w-full h-full" alt="Product"/>
            </figure>
            <div class="card-body p-5">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-10 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-warning rounded-lg badge-outline">Pending</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                    <svg class="w-10 h-10 text-blue-600" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.4997 23.2916C22.4892 23.2916 23.2913 22.4895 23.2913 21.5C23.2913 20.5105 22.4892 19.7083 21.4997 19.7083C20.5102 19.7083 19.708 20.5105 19.708 21.5C19.708 22.4895 20.5102 23.2916 21.4997 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M34.0417 23.2916C35.0312 23.2916 35.8333 22.4895 35.8333 21.5C35.8333 20.5105 35.0312 19.7083 34.0417 19.7083C33.0522 19.7083 32.25 20.5105 32.25 21.5C32.25 22.4895 33.0522 23.2916 34.0417 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M8.95866 23.2916C9.94817 23.2916 10.7503 22.4895 10.7503 21.5C10.7503 20.5105 9.94817 19.7083 8.95866 19.7083C7.96915 19.7083 7.16699 20.5105 7.16699 21.5C7.16699 22.4895 7.96915 23.2916 8.95866 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- row 4 -->
          <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
            <figure class="w-32">
              <img src="../Asset/jasa-dummy.png" class="w-full h-full" alt="Product"/>
            </figure>
            <div class="card-body p-5">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-10 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-outline text-xs rounded-lg whitespace-nowrap text-orange-500">Payment Pending</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                    <svg class="w-10 h-10 text-blue-600" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.4997 23.2916C22.4892 23.2916 23.2913 22.4895 23.2913 21.5C23.2913 20.5105 22.4892 19.7083 21.4997 19.7083C20.5102 19.7083 19.708 20.5105 19.708 21.5C19.708 22.4895 20.5102 23.2916 21.4997 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M34.0417 23.2916C35.0312 23.2916 35.8333 22.4895 35.8333 21.5C35.8333 20.5105 35.0312 19.7083 34.0417 19.7083C33.0522 19.7083 32.25 20.5105 32.25 21.5C32.25 22.4895 33.0522 23.2916 34.0417 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M8.95866 23.2916C9.94817 23.2916 10.7503 22.4895 10.7503 21.5C10.7503 20.5105 9.94817 19.7083 8.95866 19.7083C7.96915 19.7083 7.16699 20.5105 7.16699 21.5C7.16699 22.4895 7.96915 23.2916 8.95866 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>

              </div>
            </div>
          </div>
<!-- row 5 -->
          <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
            <figure class="w-32">
              <img src="../Asset/jasa-dummy.png" class="w-full h-full" alt="Product"/>
            </figure>
            <div class="card-body p-5">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-10 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-outline text-xs rounded-lg text-b">In Progress</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                    <svg class="w-10 h-10 text-blue-600" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21.4997 23.2916C22.4892 23.2916 23.2913 22.4895 23.2913 21.5C23.2913 20.5105 22.4892 19.7083 21.4997 19.7083C20.5102 19.7083 19.708 20.5105 19.708 21.5C19.708 22.4895 20.5102 23.2916 21.4997 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M34.0417 23.2916C35.0312 23.2916 35.8333 22.4895 35.8333 21.5C35.8333 20.5105 35.0312 19.7083 34.0417 19.7083C33.0522 19.7083 32.25 20.5105 32.25 21.5C32.25 22.4895 33.0522 23.2916 34.0417 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M8.95866 23.2916C9.94817 23.2916 10.7503 22.4895 10.7503 21.5C10.7503 20.5105 9.94817 19.7083 8.95866 19.7083C7.96915 19.7083 7.16699 20.5105 7.16699 21.5C7.16699 22.4895 7.96915 23.2916 8.95866 23.2916Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>

    </div>
  </div>
    
  @if (session('success'))
      <script> alert("{{ session('success') }}"); </script>
  @endif
  @if (session('error'))
      <script> alert("{{ session('error') }}"); </script>
  @endif
    
  </body>
  </html>
       
          