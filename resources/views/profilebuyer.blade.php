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
        <div class="w-10 rounded-full shadow-lg">
          <img alt="" src="icon/Profileuser.svg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a href="{{ route('profilebuyer.index') }}"><img src="icon/Profile.svg" alt="">Profile</a>
        </li>
        <form action="{{ route ('logout') }}" method="POST">
          @csrf
          <li>
            <button type="submit"><img src="icon/logout.svg" alt="">Logout</button>
          </li>
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
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5837 8.33335C11.1319 8.33335 8.33366 11.1316 8.33366 14.5834V35.4167C8.33366 38.8685 11.1319 41.6667 14.5837 41.6667H35.417C38.8688 41.6667 41.667 38.8685 41.667 35.4167V22.9167C41.667 21.7661 42.5997 20.8334 43.7503 20.8334C44.9009 20.8334 
                        45.8337 21.7661 45.8337 22.9167V35.4167C45.8337 41.1697 41.17 45.8334 35.417 45.8334H14.5837C8.83069 45.8334 4.16699 41.1697 4.16699 35.4167V14.5834C4.16699 8.83039 8.83069 4.16669 14.5837 4.16669H27.0837C28.2343 4.16669 29.167 5.09943 29.167 6.25002C29.167 7.40061 28.2343 8.33335 27.0837 8.33335H14.5837Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.9948 8.33335C39.5513 8.33335 39.126 8.50953 38.8124 8.82313L22.4019 25.2336L21.6136 28.3868L24.7668 27.5985L41.1773 11.188C41.4909 10.8744 41.667 10.449 41.667 10.0055C41.667 9.56205 41.4909 9.13672 41.1773 8.82313C40.8637 8.50953 40.4383 8.33335 39.9948 8.33335ZM35.8661 
                        5.87685C36.9611 4.78185 38.4463 4.16669 39.9948 4.16669C41.5434 4.16669 43.0285 4.78185 44.1235 5.87685C45.2185 6.97185 45.8337 8.45699 45.8337 10.0055C45.8337 11.5541 45.2185 13.0392 44.1235 14.1342L27.305 30.9528C27.038 31.2198 26.7035 31.4092 26.3371 31.5008L19.2557 33.2711C18.5457 33.4486 17.7947 33.2406 17.2772 
                        32.7232C16.7598 32.2057 16.5518 31.4547 16.7292 30.7447L18.4996 23.6632C18.5912 23.2969 18.7806 22.9624 19.0476 22.6954L35.8661 5.87685Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.8602 11.0269C32.6738 10.2133 33.9929 10.2133 34.8065 11.0269L38.9731 15.1935C39.7867 16.0071 39.7867 17.3262 38.9731 18.1398C38.1595 18.9534 36.8405 18.9534 36.0269 18.1398L31.8602 13.9732C31.0466 13.1596 31.0466 11.8405 31.8602 11.0269Z" fill="currentColor"/>
                        </svg>
                      </button>

                      <!-- modal edit -->
                      <dialog id="my_modal_3" class="modal">
                        <form method="dialog" class="modal-backdrop">
                          <button>close</button>
                        </form>
                          <div class="modal-box w-6/12 max-w-5xl py-12">
                            <form method="dialog">
                              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                              <form action="{{ route('profilebuyer.update', $user->Id_User) }}" method="POST" enctype="multipart/form-data">
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
                                </div>
                                <div class="col-span-2">
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
                        <!-- modal edit -->

                  </div>
                </div>
                <h1 class="font-semibold mt-4">About Me</h1>
                <a class="inline-flex items-center"><svg class="mr-1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 5.23858 4.23858 3 7 3H17C19.7614 3 22 5.23858 22 8V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V8ZM7 
                      5C5.34315 5 4 6.34315 4 8V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V8C20 6.34315 18.6569 5 17 5H7Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.55228 2 9 2.44772 9 3V6C9 6.55228 8.55228 7 8 7C7.44772 7 7 6.55228 7 6V3C7 2.44772 7.44772 2 8 2Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6 10C6 9.44772 6.44772 9 7 9H17C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11H7C6.44772 11 6 10.5523 6 10Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15 17C15 16.4477 15.4477 16 16 16L17 16C17.5523 16 18 16.4477 18 17C18 17.5523 17.5523 18 17 18H16C15.4477 18 15 17.5523 15 17Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16 2C16.5523 2 17 2.44772 17 3V6C17 6.55228 16.5523 7 16 7C15.4477 7 15 6.55228 15 6V3C15 2.44772 15.4477 2 16 2Z" fill="black"/>
                      </svg>
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
                   <div class="flex justify-center mt-4">
                     <button class="btn text-base rounded-lg border-0
                                  text-sm font-semibold
                                  bg-blue-50 text-blue-700
                                  hover:bg-blue-600 hover:text-white hover:shadow-lg" onclick="my_modal_1.showModal()">Join as Seller</button>
                   </div>
                  <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                      <form method="dialog">
                          <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                      </form>
                        <h3 class="font-bold text-lg">Switch to seller</h3>
                          <form action="{{ route('profilebuyer.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="Id_User" value="{{ $user->Id_User }}">
                          <div class="label">
                                <span class="label-text">Example Identity Card</span>
                              </div>
                          <div class="border-2 rounded-xl">
                            <img class="w-full h-68 object-cover rounded-xl" src="../images/default-identity.jpg" alt="">
                          </div>

                            <label class="form-control w-full">
                              <div class="label">
                                <span class="label-text">Upload Your Identity Card</span>
                              </div>
                                <input name="IdentityCard" id="fileInput" type="file" class="mt-1 custom-file-input w-full">
                            </label>

                            <label class="form-control w-full">
                              <div class="label">
                                <span class="label-text">Account Number</span>
                              </div>
                                <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                  <input name="AccountNumber" type="text" class="grow" value="" />
                                </label>
                            </label>

                            <div class="modal-action">
                              <form method="dialog">
                                <button type="submit" class="btn btn-blue-300 btn-sm hover:bg-blue-700 btn-outline text-blue-800 hover:text-white border-blue-700 hover:border-none font-medium text-base w-40 h-10">
                                  Switch
                                </button>
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
            @foreach ($orders as  $order)
            @foreach ($servicesOrder as $serviceOrder)
                    @if ($order->Id_Service == $serviceOrder->Id_Service)
                    @foreach ($typesOrder as $typeOrder)
                    @foreach ($detailsOrder as $detailOrder)
                    @if ($typeOrder->Id_Type == $detailOrder->Id_Type)
                    @if ($detailOrder->Id_Detail == $order->Id_Detail)
          <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
            <figure class="w-32">
              <img src="{{ Storage::url($serviceOrder->Thumbnail) }}" class="w-full h-full" alt="Product"/>
            </figure>
            <div class="card-body p-5">
              <div class="grid grid-cols-9 gap-4">

                <div class="col-span-1">
                  <div class="avatar">
                    <div class="w-10 rounded-full border-2">
                      <img src="icon/Profileuser.svg"/>
                    </div>
                  </div>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Price</li>
                    <li>Rp{{ number_format($detailOrder->Price, 0, ',', '.') }}  </li>
                  </ul>
                </div>

                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Status</li>
                    @if ($order->Status == 'Waiting')
                        <td><div class="badge badge-outline text-xs text-yellow-400">Waiting</div></td>
                        @elseif ($order->Status == 'Payment')
                        <div class="badge badge-outline text-xs rounded-lg whitespace-nowrap text-orange-500">Payment Pending</div>
                        @elseif ($order->Status == 'Proses')
                        <td><div class="badge badge-outline text-xs text-blue-600">In Progress</div></td>
                        @elseif ($order->Status == 'Finish')
                        <td><div class="badge badge-outline text-xs text-green-600">Finished</div></td>
                        @elseif ($order->Status == 'Cancel')
                        <td><div class="badge badge-outline text-xs text-red-600">Rejected</div></td>
                        @elseif ($order->Status == 'Pending')
                        <div class="badge badge-warning rounded-lg badge-outline">Pending</div>
                        @endif
                  </ul>
                </div>


                <div class="col-span-2 text-center">
                  <ul class="text-sm">
                    <li class="font-bold">Delivery Time</li>
                    <li>{{ $detailOrder->Day }} Day</li>
                  </ul>
                </div>
  
              
                <div class="col-span-2 grid justify-center items-center">
                  <div class="dropdown">
                      <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 text-blue-600 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                      </svg>
                      </div>
                      <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                      @if ($order->Status == 'Payment')            
                      <li>
                                    <form action="{{route ('orderpayment.show', $order->Id_Order)}}" >
                                <button type="submit" class="flex items-center">
                                  <svg class="w-4 mr-2" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 0H5C3.67441 0.00158786 2.40356 0.528882 1.46622 1.46622C0.528882 2.40356 0.00158786 3.67441 0 5L0 13C0.00158786 14.3256 0.528882 15.5964 1.46622 16.5338C2.40356 17.4711 3.67441 
                                    17.9984 5 18H19C20.3256 17.9984 21.5964 17.4711 22.5338 16.5338C23.4711 15.5964 23.9984 14.3256 24 13V5C23.9984 3.67441 23.4711 2.40356 22.5338 1.46622C21.5964 0.528882 20.3256 0.00158786 19 
                                    0ZM5 2H19C19.7956 2 20.5587 2.31607 21.1213 2.87868C21.6839 3.44129 22 4.20435 22 5H2C2 4.20435 2.31607 3.44129 2.87868 2.87868C3.44129 2.31607 4.20435 2 5 2ZM19 16H5C4.20435 16 3.44129 15.6839 
                                    2.87868 15.1213C2.31607 14.5587 2 13.7956 2 13V7H22V13C22 13.7956 21.6839 14.5587 21.1213 15.1213C20.5587 15.6839 19.7956 16 19 16Z" fill="currentColor"/>
                                  </svg>
                                  Payment
                                </button>
                            </form>
                        </li>
                        @endif
                         <li>  
                                <button type="submit" class="flex items-center" onclick="my_modal_cancel{{ $order->Id_Order }}.showModal()">
                                    <svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Cancel
                                </button>
                        </li>
                        @endif
                        <!-- Open the modal using ID.showModal() method -->

                        

                        <li>
                          <a onclick="my_modal_detail{{ $order->Id_Order }}.showModal()">
                          <svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                            8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          Details</a>
                        </li>
                        <li>
                          <a onclick="my_modal_invoice{{ $order->Id_Order }}.showModal()">
                          <svg class="w-3 mr-1" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9491 5.53651L14.4651 2.05051C13.8164 1.39865 13.045 0.881842 12.1953 0.529971C11.3457 0.178099 10.4347 -0.0018556 9.51512 0.00051133H5.00012C3.67453 0.00209919 2.40368 0.529393 1.46634 
                            1.46673C0.529004 2.40407 0.00170993 3.67492 0.00012207 5.00051V19.0005C0.00170993 20.3261 0.529004 21.597 1.46634 22.5343C2.40368 23.4716 3.67453 23.9989 5.00012 24.0005H15.0001C16.3257 23.9989 17.5966 
                            23.4716 18.5339 22.5343C19.4712 21.597 19.9985 20.3261 20.0001 19.0005V10.4855C20.0026 9.56593 19.8226 8.655 19.4705 7.80549C19.1185 6.95597 18.6014 6.18475 17.9491 5.53651ZM16.5351 6.95051C16.8405 7.26466 
                            17.1031 7.6177 17.3161 8.00051H13.0001C12.7349 8.00051 12.4806 7.89515 12.293 7.70762C12.1055 7.52008 12.0001 7.26573 12.0001 7.00051V2.68451C12.3831 2.89744 12.7364 3.15967 13.0511 3.46451L16.5351 6.95051ZM18.0001 
                            19.0005C18.0001 19.7962 17.6841 20.5592 17.1214 21.1218C16.5588 21.6844 15.7958 22.0005 15.0001 22.0005H5.00012C4.20447 22.0005 3.44141 21.6844 2.8788 21.1218C2.31619 20.5592 2.00012 19.7962 2.00012 19.0005V5.00051C2.00012 
                            4.20486 2.31619 3.4418 2.8788 2.87919C3.44141 2.31658 4.20447 2.00051 5.00012 2.00051H9.51512C9.67912 2.00051 9.83812 2.03251 10.0001 2.04751V7.00051C10.0001 7.79616 10.3162 8.55922 10.8788 9.12183C11.4414 9.68444 12.2045 
                            10.0005 13.0001 10.0005H17.9531C17.9681 10.1625 18.0001 10.3205 18.0001 10.4855V19.0005Z" fill="currentColor"/>
                          </svg>
                          Invoice
                          </a>
                        </li>
                        <li>
                          <a onclick="my_modal_delivery{{ $order->Id_Order }}.showModal()">
                          <svg class="w-3 mr-1" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9491 5.53651L14.4651 2.05051C13.8164 1.39865 13.045 0.881842 12.1953 0.529971C11.3457 0.178099 10.4347 -0.0018556 9.51512 0.00051133H5.00012C3.67453 0.00209919 2.40368 0.529393 1.46634 
                            1.46673C0.529004 2.40407 0.00170993 3.67492 0.00012207 5.00051V19.0005C0.00170993 20.3261 0.529004 21.597 1.46634 22.5343C2.40368 23.4716 3.67453 23.9989 5.00012 24.0005H15.0001C16.3257 23.9989 17.5966 
                            23.4716 18.5339 22.5343C19.4712 21.597 19.9985 20.3261 20.0001 19.0005V10.4855C20.0026 9.56593 19.8226 8.655 19.4705 7.80549C19.1185 6.95597 18.6014 6.18475 17.9491 5.53651ZM16.5351 6.95051C16.8405 7.26466 
                            17.1031 7.6177 17.3161 8.00051H13.0001C12.7349 8.00051 12.4806 7.89515 12.293 7.70762C12.1055 7.52008 12.0001 7.26573 12.0001 7.00051V2.68451C12.3831 2.89744 12.7364 3.15967 13.0511 3.46451L16.5351 6.95051ZM18.0001 
                            19.0005C18.0001 19.7962 17.6841 20.5592 17.1214 21.1218C16.5588 21.6844 15.7958 22.0005 15.0001 22.0005H5.00012C4.20447 22.0005 3.44141 21.6844 2.8788 21.1218C2.31619 20.5592 2.00012 19.7962 2.00012 19.0005V5.00051C2.00012 
                            4.20486 2.31619 3.4418 2.8788 2.87919C3.44141 2.31658 4.20447 2.00051 5.00012 2.00051H9.51512C9.67912 2.00051 9.83812 2.03251 10.0001 2.04751V7.00051C10.0001 7.79616 10.3162 8.55922 10.8788 9.12183C11.4414 9.68444 12.2045 
                            10.0005 13.0001 10.0005H17.9531C17.9681 10.1625 18.0001 10.3205 18.0001 10.4855V19.0005Z" fill="currentColor"/>
                          </svg>
                          Delivery
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>

              </div>
            </div>
          </div>
                  <!-- modal cancel -->
                  <dialog id="my_modal_cancel{{ $order->Id_Order }}" class="modal">
                    <div class="modal-box">
                      <h3 class="font-bold text-lg">Cancel Service?</h3>
                      <p class="py-4">Are you sure want to cancel this service!!!</p>
                      <div class="modal-action">
                        <form method="dialog">
                          <!-- if there is a button in form, it will close the modal -->
                          <button class="btn">Close</button>
                        </form>
                        <form method="POST" action="{{ route('profilebuyer.cancel', $order->Id_Order) }}">
                              @csrf
                        <button type="submit" class="btn bg-red-500 text-white">Cancel</button>
                      </form>
                      </div>
                    </div>
                  </dialog>
                  <!-- modal cancel -->
                  
                  <!-- modal delivery -->
                  <dialog id="my_modal_delivery{{ $order->Id_Order }}" class="modal">
                    <div class="modal-box w-full max-w-2xl rounded-2xl shadow-xl">
                    <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                      <h3 class="font-bold text-xl mb-3">Delivery</h3>
                      <div class="divider"></div>
                        <!-- content -->
                        <div class="bg-white border-2 rounded-2xl grid justify-center shadow-lg shadow-gray-300">
                          <img src="background/108617873_p0.png" class="w-full rounded-2xl" alt="">
                        </div>
                      <!-- content -->
                      <div class="modal-action border-t-2 border-gray-200">
                        <div class="flex justify-center gap-x-3 mt-10">
                              <button class="btn btn-blue-300 hover:bg-blue-700 btn-outline text-blue-700 hover:text-white border-blue-700 hover:border-none font-medium text-base">
                                <svg class="w-4 h-3" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.76947 14.9916L3.05034 14.2967C2.93938 14.4116 2.85753 14.5513 2.81165 14.7043L3.76947 14.9916ZM16.286 2.03794L15.5789 1.33084C15.5749 1.33488 15.5709 1.33896 15.5669 
                                1.34307L16.286 2.03794ZM21.1664 6.9183L21.8612 7.63744C21.8654 7.63346 21.8694 7.62945 21.8735 7.62541L21.1664 6.9183ZM8.2127 19.4348L8.50005 20.3927C8.653 20.3468 8.79274 20.2649 
                                8.90757 20.154L8.2127 19.4348ZM1.86523 21.3391L0.907408 21.0517C0.801698 21.4041 0.897995 21.7861 1.15813 22.0462C1.41826 22.3063 1.80021 22.4026 2.15258 22.2969L1.86523 21.3391ZM20.3787 
                                3.02932L21.0858 2.32222L21.0858 2.32222L20.3787 3.02932ZM4.48861 15.6865L17.0051 2.73281L15.5669 1.34307L3.05034 14.2967L4.48861 15.6865ZM20.4715 6.19916L7.51783 18.7157L8.90757 
                                20.154L21.8612 7.63744L20.4715 6.19916ZM7.92536 18.477L1.57789 20.3813L2.15258 22.2969L8.50005 20.3927L7.92536 18.477ZM2.82306 21.6264L4.7273 15.279L2.81165 14.7043L0.907408 
                                21.0517L2.82306 21.6264ZM21.8735 7.62541C22.2952 7.20372 22.6073 6.73664 22.7609 6.21314C22.9177 5.67889 22.8876 5.15903 22.7385 4.67775C22.4607 3.78174 21.756 2.9924 21.0858 
                                2.32222L19.6716 3.73643C20.3491 4.41392 20.712 4.89523 20.8281 5.26987C20.8759 5.42391 20.8743 5.53938 20.8418 5.65008C20.8062 5.77153 20.7114 5.95903 20.4593 6.21119L21.8735 
                                7.62541ZM16.9931 2.74505C17.2234 2.51475 17.4002 2.43777 17.5204 2.4112C17.6405 2.38466 17.7886 2.38973 17.9927 2.46342C18.4508 2.62886 19.001 3.06583 19.6716 3.73643L21.0858 
                                2.32222C20.4087 1.64515 19.5864 0.912582 18.672 0.582338C18.1898 0.40818 17.6517 0.333867 17.0887 0.458357C16.5257 0.582827 16.0224 0.8873 15.5789 1.33084L16.9931 2.74505Z" fill="currentColor"/>
                                </svg>
                                Revision</button>
                              <button class="btn btn-blue-300 hover:bg-green-500 btn-outline text-green-600 hover:text-white border-green-500 hover:border-none font-medium text-base">
                                <svg class="w-4 h-3" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.75 2.25L9.25 16.5357L1.75 10.0422" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Confirm</button>
                            </div>
                      </div>
                    </div>
                  </dialog>
                  <!-- modal delivery -->

          <!-- modal detail -->
          <dialog id="my_modal_detail{{ $order->Id_Order }}" class="modal">
                        <div class="modal-box w-full max-w-6xl rounded-2xl shadow-xl">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <h3 class="font-bold text-xl mb-3">Detail Orders</h3>
                            <div class="divider"></div>
                              <div class="grid grid-cols-2 gap-x-8">
                                <div class="col-span-1">
                                  <img class="w-full shadow-xl shadow-neutral-300 rounded-xl" src="{{ Storage::url($serviceOrder->Thumbnail) }}" alt="" width="150">
                                    <div class="flex py-6 divide-x-2 divide-gray-500 border-gray-500">
                                      <div class="flex items-center pr-10">
                                              <div class="avatar mr-3">
                                                  <div class="w-10 rounded-full border-2 border-zinc-300">
                                                    <img src="icon/Profileuser.svg" class="" />
                                                  </div>
                                              </div>
                                            
                                              <a class="font-bold text-lg">Hyerin</a>
                                              
                                      </div>
                                      @if ($order->Status == 'Finish')
                                      <div class="flex items-center pl-10">
                                              <div class="rating rating-sm">
                                                  <input type="radio" name="rating" class="mask mask-star-2" value="1" />
                                                  <input type="radio" name="rating" class="mask mask-star-2" value="2"  />
                                                  <input type="radio" name="rating" class="mask mask-star-2" value="3" />
                                                  <input type="radio" name="rating" class="mask mask-star-2" value="4"  />
                                                  <input type="radio" name="rating" class="mask mask-star-2" value="5"  />
                                              </div>
                                              <span>(77 Reviews)</span>
                                      </div>
                                      @endif
                                      
 
                                    </div> 
                              </div>
                              <div>
                                  <div class="col-span-1">
                                    <div class="overflow-auto max-h-80 px-5 pb-5">
                                      <div class="grid gap-y-1.5">

                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Title</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                                                <input type="text" id="title" name="title" class="grow" value="{{ $serviceOrder->Title }}" disabled/>
                                            </label>
                                          </label>
                                          
                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Description</span>
                                            </div>
                                            <textarea id="description" name="description" class="shadow-md border border-[#1f293733] rounded py-2 px-3 w-full resize-y h-24 text-xs" disabled>{{ $serviceOrder->Description}}</textarea>
                                          </label>
                                          
                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Category</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                                                <input type="text" id="category" name="category" class="grow" value="{{ $serviceOrder->Category}}" disabled/>
                                            </label>
                                          </label>

                                          <div class="divider"></div>

                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Type of Package</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                                                <input type="text" id="title" name="title" class="grow" value="{{ $typeOrder->Type_Name }}" disabled/>
                                            </label>
                                          </label>

                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Revisions</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                                                <input type="text" id="title" name="title" class="grow" value="{{ $detailOrder->Revision }}" disabled/>
                                            </label>
                                          </label>

                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Delivery Time</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                                                <input type="text" id="title" name="title" class="grow" value="{{ $detailOrder->Day }} Day" disabled/>
                                            </label>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                      </div>
                      @if ($order->Status == 'Payment')
                      <div class="modal-action border-t-2 border-gray-200">
                        <button class="btn bg-red-50 text-red-600 mt-3">
                          <svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                            Reject</button>
                        <button class="btn bg-green-50 text-green-600 mt-3">
                          <svg class="w-5" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.25 12.25L17.9375 29.75L8.75 21.7955" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          Accept</button>
                      </div>
                      </div>
                      @endif
</dialog>
<!-- modal detail -->

          @endif
          @endif
          @endforeach
          @endforeach
          @endif
          @endforeach
          @endforeach
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