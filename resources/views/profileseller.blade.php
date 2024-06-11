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
      <li><a>Dashboard</a></li>
        <li><a href="{{route ('sellerservice.index')}}" >Service</a></li>
        <li><a>Orders</a></li>
        <li><a>Earnings</a></li>
      </ul>
    </div>
    <div class="navbar-end">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full shadow-lg">
          <img alt="" src="images/Profileuser.svg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="{{ route('profileseller.index') }}"><img src="images/Profile.svg" alt="">Profile</a></li>
        <form action="{{ route ('logout') }}" method="POST">
          @csrf
          <li><button type="submit"><img src="images/logout.svg" alt="">Logout</button></li>
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
         @if ($user)
   
         
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

                      <!-- modal mikel -->
                      <dialog id="my_modal_3" class="modal">
                        <form method="dialog" class="modal-backdrop">
                          <button>close</button>
                        </form>
                          <div class="modal-box w-6/12 max-w-5xl py-12">
                            <form method="dialog">
                              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <form action="{{ route('profileseller.update', $user->Id_User) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-3 gap-4">
                              <div class="cols-span-1 avatar flex justify-center">
                                <div class="w-32 h-32 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                                  <img src="{{ Storage::url($user->Picture) }}" alt="profile image" />
                                </div>
                              </div>
                              <div class="col-span-2">
                                <h3 class="font-bold text-2xl">My Profile</h3>
                              <div class="grid grid-cols-2 gap-x-4">
                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Full Name</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                      <svg class="w-4 h-4 text-black" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
                                        <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
                                        </svg>
                                        <input type="text" name="Name" class="grow" value="{{ $user->Name }}" />
                                    </label>
                                  </label>
                                </div>
                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Phone Number</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.54518 8.64285L10.509 8.37611L10.509 8.3761L9.54518 8.64285ZM15.3591 14.4382L15.6262 13.4745L15.6262 13.4745L15.3591 14.4382ZM17.836 18.7018L16.8873 18.3858L16.8872 18.3858L17.836 18.7018ZM5.28475 6.16411L5.60114 7.11273L5.60116 7.11273L5.28475 
                                          6.16411ZM10.7574 15.5971L11.3298 14.7771L10.7574 15.5971ZM11.4363 15.4941L10.7054 14.8116L11.4363 15.4941ZM8.5005 12.5588L9.18647 13.2865L8.5005 12.5588ZM8.39933 13.2365L7.57878 13.8081L7.57878 13.8081L8.39933 13.2365ZM9.18647 13.2865C10.4545 12.091 11.0099 
                                          10.186 10.509 8.37611L8.58141 8.90958C8.88743 10.0153 8.53516 11.1518 7.81453 11.8312L9.18647 13.2865ZM10.1826 13.8149C9.82246 13.4545 9.50171 13.0695 9.21988 12.6649L7.57878 13.8081C7.92751 14.3087 8.32391 14.7843 8.76787 15.2286L10.1826 13.8149ZM11.3298 
                                          14.7771C10.9263 14.4954 10.5423 14.1748 10.1826 13.8149L8.76787 15.2286C9.21114 15.6722 9.68554 
                                        16.0684 10.1851 16.4171L11.3298 14.7771ZM15.6262 13.4745C13.8106 12.9713 11.8992 13.533 10.7054 14.8116L12.1672 16.1766C12.8451 15.4505 13.9841 15.0948 15.092 15.4018L15.6262 13.4745ZM18.7848 19.0178C19.5901 16.5997 18.0782 14.1542 15.6262 13.4745L15.092 
                                        15.4018C16.5807 15.8145 17.2866 17.1867 16.8873 18.3858L18.7848 19.0178ZM10.509 8.3761C9.83018 5.92366 7.38653 4.4089 4.96834 5.21548L5.60116 7.11273C6.7975 6.71369 8.16873 7.4185 8.58142 8.90959L10.509 8.3761ZM4.96836 5.21548C3.39284 5.74096 2.43378 6.7213 
                                        2.11585 8.02889C1.82033 9.24428 2.12835 10.5559 2.60671 11.715C3.57004 14.0491 5.47664 16.3617 6.55614 17.442L7.97088 16.0283C6.98981 15.0465 5.27992 12.9497 4.45545 10.952C4.03992 9.94514 3.91121 9.11016 4.05923 8.50141C4.18483 7.98485 4.54955 7.46347 5.60114 
                                        7.11273L4.96836 5.21548ZM6.55614 17.442C7.61075 18.4974 9.91993 20.4122 12.2585 21.3844C13.4196 
                                        21.867 14.7361 22.1805 15.9571 21.8856C17.2711 21.5683 18.2564 20.6044 18.7848 19.0178L16.8872 18.3858C16.5331 19.4492 16.007 19.8161 15.4876 19.9415C14.8752 20.0894 14.0361 19.9574 13.0262 19.5376C11.0228 18.7048 8.92821 16.9863 7.97088 16.0283L6.55614 
                                        17.442ZM10.1851 16.4171C10.895 16.9126 11.7294 16.6454 12.1672 16.1766L10.7054 14.8116C10.7607 14.7523 10.8398 14.7043 10.9423 14.6869C11.052 14.6682 11.1985 14.6854 11.3298 14.7771L10.1851 16.4171ZM7.81453 11.8312C7.34911 12.27 7.08636 13.1012 7.57878 
                                        13.8081L9.21988 12.6649C9.31091 12.7956 9.32818 12.9411 9.30989 13.0501C9.29279 13.152 9.24536 13.231 9.18647 13.2865L7.81453 11.8312Z" fill="black"/>
                                        </svg>
                                      <input type="text" name="Numberphone" class="grow" value="{{ $user->Number_Phone }}" />
                                    </label>
                                  </label>
                                </div>
                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Date of Birth</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 5.23858 4.23858 3 7 3H17C19.7614 3 22 5.23858 22 8V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V8ZM7 5C5.34315 5 4 6.34315 4 8V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V8C20 6.34315 18.6569 5 17 5H7Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.55228 2 9 2.44772 9 3V6C9 6.55228 8.55228 7 8 7C7.44772 7 7 6.55228 7 6V3C7 2.44772 7.44772 2 8 2Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6 10C6 9.44772 6.44772 9 7 9H17C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11H7C6.44772 11 6 10.5523 6 10Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15 17C15 16.4477 15.4477 16 16 16L17 16C17.5523 16 18 16.4477 18 17C18 17.5523 17.5523 18 17 18H16C15.4477 18 15 17.5523 15 17Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16 2C16.5523 2 17 2.44772 17 3V6C17 6.55228 16.5523 7 16 7C15.4477 7 15 6.55228 15 6V3C15 2.44772 15.4477 2 16 2Z" fill="black"/>
                                      </svg>
                                        <input type="date" name="Date" class="grow" value="{{ $user->Date_Of_Birth }}" />
                                    </label>
                                  </label>
                                </div>

                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Account Number</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                      <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 5.23858 4.23858 3 7 3H17C19.7614 3 22 5.23858 22 8V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V8ZM7 5C5.34315 5 4 6.34315 4 8V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V8C20 6.34315 18.6569 5 17 5H7Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.55228 2 9 2.44772 9 3V6C9 6.55228 8.55228 7 8 7C7.44772 7 7 6.55228 7 6V3C7 2.44772 7.44772 2 8 2Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6 10C6 9.44772 6.44772 9 7 9H17C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11H7C6.44772 11 6 10.5523 6 10Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15 17C15 16.4477 15.4477 16 16 16L17 16C17.5523 16 18 16.4477 18 17C18 17.5523 17.5523 18 17 18H16C15.4477 18 15 17.5523 15 17Z" fill="black"/>
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16 2C16.5523 2 17 2.44772 17 3V6C17 6.55228 16.5523 7 16 7C15.4477 7 15 6.55228 15 6V3C15 2.44772 15.4477 2 16 2Z" fill="black"/>
                                      </svg>
                                        <input type="text" name="AccountNumber" class="grow" value="{{ $seller->Account_Number }}" />
                                    </label>
                                  </label>
                                </div>
                                <div class="col-span-2">

                                  <label class="form-control w-full">
                                      <div class="label">
                                        <span class="label-text text-xs">Email</span>
                                      </div>
                                      <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                      <svg class="w-4 h-4 text-black" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M3.22222 4.22222L10.6871 9.85944L10.6896 9.8615C11.5185 10.4693 11.9332 10.7735 12.3874 10.8909C12.7888 10.9948 13.2108 10.9948 13.6123 10.8909C14.0669 10.7733 14.4828 10.4684 15.3132 9.85944C15.3132 9.85944 20.1012 6.18504 22.7778 4.22222M2 16.2002V6.91135C2 5.54233 2 4.85731 2.26643 
                                      4.33442C2.50079 3.87447 2.87447 3.50079 3.33442 3.26643C3.85731 3 4.54233 3 5.91135 3H20.0891C21.4581 3 22.1417 3 22.6646 3.26643C23.1245 3.50079 23.4995 3.87447 23.7338 4.33442C24 4.8568 24 5.54099 24 6.90733V16.2044C24 17.5707 24 18.2539 23.7338 18.7763C23.4995 19.2363 23.1245 19.6106 22.6646 
                                      19.8449C22.1422 20.1111 21.459 20.1111 20.0927 20.1111H5.90733C4.54099 20.1111 3.8568 20.1111 3.33442 19.8449C2.87447 19.6106 2.50079 19.2363 2.26643 18.7763C2 18.2534 2 17.5693 2 16.2002Z" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                          <input type="email" class="grow" name="Email" value="{{ $user->Email }}" />
                                      </label>
                                    </label>
                                    
                                  <label class="form-control w-full">
                                    <div class="label">
                                      <span class="label-text text-xs">Change Photo</span>
                                    </div>
                                    <input name="Picture" id="fileInput" type="file" class="mt-1 custom-file-input w-full">
                                  </label>
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="modal-action">
                              <form method="dialog">
                                <!-- if there is a button, it will close the modal -->
                                <button class="btn btn-blue-300 btn-sm hover:bg-blue-700 btn-outline text-blue-800 hover:text-white border-blue-700 hover:border-none font-medium text-base w-40 h-10">
                                  Update
                                </button>
                              </form>
                              </div>
                              </div>
                            </dialog>
                        <!-- modal mikel -->
                  </div>
                </div>
                <h1 class="font-semibold mt-4">About Me</h1>
                <p>{{ $user->Date_Of_Birth }}</p>
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
                    {{ $user->Number_Phone }}</a></li>
                  <li><a class="inline-flex items-center"><svg class="h-4 w-4 mr-1"  viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.22222 4.22222L10.6871 9.85944L10.6896 9.8615C11.5185 10.4693 11.9332 10.7735 12.3874 10.8909C12.7888 10.9948 13.2108 10.9948 13.6123 10.8909C14.0669 
                      10.7733 14.4828 10.4684 15.3132 9.85944C15.3132 9.85944 20.1012 6.18504 22.7778 4.22222M2 16.2002V6.91135C2 5.54233 2 4.85731 2.26643 4.33442C2.50079 3.87447 2.87447 
                      3.50079 3.33442 3.26643C3.85731 3 4.54233 3 5.91135 3H20.0891C21.4581 3 22.1417 3 22.6646 3.26643C23.1245 3.50079 23.4995 3.87447 23.7338 4.33442C24 4.8568 24 5.54099 
                      24 6.90733V16.2044C24 17.5707 24 18.2539 23.7338 18.7763C23.4995 19.2363 23.1245 19.6106 22.6646 19.8449C22.1422 20.1111 21.459 20.1111 20.0927 20.1111H5.90733C4.54099 
                      20.1111 3.8568 20.1111 3.33442 19.8449C2.87447 19.6106 2.50079 19.2363 2.26643 18.7763C2 18.2534 2 17.5693 2 16.2002Z" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      {{ $user->Email }}</a></li>   
                </ul>
              </div>  
            </div>
          </div>
        <!-- profile -->

        <!-- table card -->
        <div class="col-span-2">
          <div class="grid grid-cols-2 items-center mb-4">
            <div class="grid justify-start">
              <a class="font-bold text-2xl">Orders</a>
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
          <div class="card card-side bg-base-100 h-28 shadow-xl my-5">
            <figure>
              <img src="../Asset/jasa-dummy.png" alt="Product"/>
            </figure>
            <div class="card-body">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-16 rounded-full border-2">
                      <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-success rounded-lg badge-outline">Finished</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-10 h-10 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                  </div>
                </div>

              </div>
            </div>
          </div>
<!-- row 2 -->
          <div class="card card-side bg-base-100 h-28 shadow-xl my-5">
            <figure>
              <img src="../Asset/jasa-dummy.png" alt="Product"/>
            </figure>
            <div class="card-body">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-16 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-error rounded-lg badge-outline">Rejected</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-10 h-10 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                  </div>
                </div>

              </div>
            </div>
          </div>

<!-- row 3 -->
          <div class="card card-side bg-base-100 h-28 shadow-xl my-5">
            <figure>
              <img src="../Asset/jasa-dummy.png" alt="Product"/>
            </figure>
            <div class="card-body">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-16 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-warning rounded-lg badge-outline">Pending</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-10 h-10 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- row 4 -->
          <div class="card card-side bg-base-100 h-28 shadow-xl my-5">
            <figure>
              <img src="../Asset/jasa-dummy.png" alt="Product"/>
            </figure>
            <div class="card-body">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-16 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-outline rounded-lg whitespace-nowrap text-orange-500">Payment Pending</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-10 h-10 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                  </div>
                </div>

              </div>
            </div>
          </div>
<!-- row 5 -->
          <div class="card card-side bg-base-100 h-28 shadow-xl my-5">
            <figure>
              <img src="../Asset/jasa-dummy.png" alt="Product"/>
            </figure>
            <div class="card-body">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-16 rounded-full border-2">
                        <img src="../Asset/Profile-user.svg" class="p-3"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Price</li>
                    <li>Rp. 26.000</li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Status</li>
                    <li>
                      <div class="badge badge-outline rounded-lg text-blue-800">In Progress</div>
                    </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul>
                    <li class="font-bold">Delivery Time</li>
                    <li>2024-07-27</li>
                  </ul>
                </div>

                <div class="col-span-2 grid justify-center items-center">
                  <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-10 h-10 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                  </div>
                </div>
             @endif
     

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
       
          