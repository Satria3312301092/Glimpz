<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <body class="font-poppins">
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center bg-slate-50">
          <!-- Page content here -->
          <!-- navbar start -->
      
          @include('components.nav_admin')

          <!-- content -->

          <div class="container mx-auto flex justify-start">
            <!-- scroll -->
            
            <div class="w-full h-full">
              <div class="grid grid-cols-2 pl-12 pt-12 pr-12">
                <div>
                  <h1 class="font-bold text-2xl">User</h1>
                  <a class="text-xs text-blue-500">{{ $count }} Users Found</a>
                </div>
                <div class="flex items-end justify-end">
                  <div class="form-control">
                    <form action="{{ url('/adminuser') }}" method="GET">
                    <input name="search" type="search" placeholder="Search" class="input input-bordered input-sm text-xs rounded-full mr-3" />
                    </form>
                  </div>
                  
                </div>
              </div>


              <!-- tabslist -->
              
              <div class="overflow-auto h-screen pl-12">
              <div role="tablist" class="tabs tabs-bordered mt-4">
                <!-- tabs 1 -->
                
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="All Users" checked/>
                <div role="tabpanel" class="tab-content pt-8">
                  
                  <table class="table bg-white rounded-none mb-20">
                    <!-- head -->
                    <thead>
                      <tr>
                        <th>
                          ID User
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                      <tbody>
                      </thead>
                      @foreach ($users as $user)
                      <!-- row 1 -->
                      <tr>
                        <th>
                          {{ $user->Id_User }}
                        </th>
                        <td>
                          <div class="flex items-center gap-3">
                            <div class="avatar">
                              <div class="w-12 h-12 border-[1px] border-[#BEBEBE] rounded-full">
                                <img src="{{ Storage::url($user->Picture) }}" alt="Avatar Tailwind CSS Component" />
                              </div>
                            </div>
                            <div>
                              <div class="font-normal">{{ $user->Name }}</div>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{ $user->Email }}
                        </td>
                        <td>{{ $user->Number_Phone }}</td>
                        <td>{{ $user->Role }}</td>
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" 
                              stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                            </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-400 bg-base-100 font-normal rounded-box w-52">
                                {{-- <li><a><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li> --}}
                                @if ($user->Role != 'Admin')
                                <li><a onclick="my_modal_ban{{ $user->Id_User }}.showModal()">
                                  <svg class="w-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                  </svg>                                
                                  Ban</a></li>
                                @endif
                                <li><a onclick="my_modal_detail{{ $user->Id_User }}.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>

                      <dialog id="my_modal_ban{{ $user->Id_User }}" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          
                          <h3 class="font-bold text-lg mb-3">Banned This User?!</h3>
                          <p>This User {{ $user->Name }} With ID {{ $user->Id_User }} Will Be Banned</p>
                          <form action="{{ route('adminuser.store') }}" method="POST">
                            @csrf
                          <div class="grid grid-rows-1 grid-cols-2 mb-4 mt-4">
                            <div class="">
                              <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Id_User" type="text" value="{{ $user->Id_User }}"></input>
                            </div>
                            <div class="">
                              <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Name" type="text" value="{{ $user->Name }}"></input>
                            </div>
                          <div class="">
                            <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Numberphone" type="text" value="{{ $user->Number_Phone }}"></input>
                          </div>
                          <div class="">
                            <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Email" type="text" value="{{ $user->Email }}"></input>
                          </div>
                        </div>
                        <div class="modal-action">
                          <button type="submit" class="btn btn-24 bg-red-600 text-white">Ban</button>
                        </div>
                      </form>
                    </div>
                        
                      </dialog>

                      <dialog id="my_modal_detail{{ $user->Id_User }}" class="modal">
                          <div class="modal-box w-6/12 max-w-5xl py-12">
                            <form method="dialog">
                              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="grid grid-cols-3 gap-4">
                              <div class="cols-span-1 avatar flex justify-center">
                                <div class="w-32 h-32 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                                  <img src="{{ Storage::url($user->Picture) }}" alt="profile image" />
                                </div>
                              </div>
                              <div class="col-span-2">
                                <h3 class="font-bold text-2xl">Detail User #{{ $user->Id_User }}</h3>
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
                                      <span class="label-text text-xs">Username</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                      <svg class="w-4 h-4 text-black" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
                                        <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
                                        </svg>
                                        <input type="text" name="Name" class="grow" value="{{ $user->Username }}" />
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

                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Role</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                        <input type="email" class="grow" name="Email" value="{{ $user->Role }}" />
                                    </label>
                                  </label>
                                </div>

                              </div>
                            </div>
                            </div>
                            <div class="modal-action">
                              <form method="dialog">

                              </form>
                              </div>
                              </div>
                            </dialog>
                      @endforeach
                    </tbody>

                    <!-- foot -->
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                

              <!-- tabs 1 -->
              <!-- tabs 2 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Buyer" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                    <!-- head -->
                    <thead>
                      <tr>
                        <th>
                          ID User
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    @foreach ($usersBuyer as $userBuyer)
                    <tbody>
                      <!-- row 1 -->
                      <tr>
                        <th>
                          {{ $userBuyer->Id_User }}
                        </th>
                        <td>
                          <div class="flex items-center gap-3">
                            <div class="avatar">
                              <div class="w-12 h-12 border-[1px] border-[#BEBEBE] rounded-full">
                                <img src="{{ Storage::url($userBuyer->Picture) }}" alt="Avatar Tailwind CSS Component" />
                              </div>
                            </div>
                            <div>
                              <div class="font-normal">{{ $userBuyer->Name }}</div>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{ $userBuyer->Email }}
                        </td>
                        <td>{{ $userBuyer->Number_Phone }}</td>
                        <td>{{ $userBuyer->Role }}</td>
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 
                                  0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-100 font-normal rounded-box w-52">
                                <li><a onclick="my_modal_ban2{{ $userBuyer->Id_User }}.showModal()"><svg class="w-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>                                
                                  Ban</a></li>
                                <li><a onclick="my_modal_detail2{{ $userBuyer->Id_User }}.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>
                      <dialog id="my_modal_ban2{{ $userBuyer->Id_User }}" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          
                          <h3 class="font-bold text-lg mb-3">Banned This User?!</h3>
                          <p>This User {{ $userBuyer->Name }} With ID {{ $userBuyer->Id_User }} Will Be Banned</p>
                          <form action="{{ route('adminuser.store') }}" method="POST">
                            @csrf
                          <div class="grid grid-rows-1 grid-cols-2 mb-4 mt-4">
                            <div class="">
                              <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Id_User" type="text" value="{{ $userBuyer->Id_User }}"></input>
                            </div>
                            <div class="">
                              <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Name" type="text" value="{{ $userBuyer->Name }}"></input>
                            </div>
                          <div class="">
                            <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Numberphone" type="text" value="{{ $userBuyer->Number_Phone }}"></input>
                          </div>
                          <div class="">
                            <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Email" type="text" value="{{ $userBuyer->Email }}"></input>
                          </div>
                        </div>
                          <button type="submit"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">BAN</button>
                        </div>
                      </form>
                        
                      </dialog>

                      <!-- modal detail -->
                      <dialog id="my_modal_detail2{{ $userBuyer->Id_User }}" class="modal">
                          <div class="modal-box w-6/12 max-w-5xl py-12">
                            <form method="dialog">
                              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="grid grid-cols-3 gap-4">
                              <div class="cols-span-1 avatar flex justify-center">
                                <div class="w-32 h-32 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                                  <img src="{{ Storage::url($userBuyer->Picture) }}" alt="profile image" />
                                </div>
                              </div>
                              <div class="col-span-2">
                                <h3 class="font-bold text-2xl">Detail User #{{ $userBuyer->Id_User }}</h3>
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
                                        <input type="text" name="Name" class="grow" value="{{ $userBuyer->Name }}" />
                                    </label>
                                  </label>
                                </div>

                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Username</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                      <svg class="w-4 h-4 text-black" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
                                        <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
                                        </svg>
                                        <input type="text" name="Name" class="grow" value="{{ $userBuyer->Username }}" />
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
                                        <input type="text" name="Numberphone" class="grow" value="{{ $userBuyer->Number_Phone }}" />
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
                                        <input type="date" name="Date" class="grow" value="{{ $userBuyer->Date_Of_Birth }}" />
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
                                        <input type="email" class="grow" name="Email" value="{{ $userBuyer->Email }}" />
                                    </label>
                                  </label>
                                </div>

                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Role</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                        <input type="email" class="grow" name="Email" value="{{ $userBuyer->Role }}" />
                                    </label>
                                  </label>
                                </div>

                              </div>
                            </div>
                            </div>
                            <div class="modal-action">
                              <form method="dialog">
                                
                              </form>
                              </div>
                              </div>
                            </dialog>
                            <!-- modal detail -->

                    </tbody>
                    @endforeach
                    <!-- foot -->
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>    
                  </table>
                </div>
              <!-- tabs 2 -->

              <!-- tabs 3 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Seller" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                    <!-- head -->
                    <thead>
                      <tr>
                        <th>
                          ID Seller
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    @foreach ($usersSeller as $userSeller)
                    @foreach ($sellersId as $sellerId)
                    @if($userSeller->Id_User == $sellerId->Id_User)  
                    <tbody>
                      <!-- row 1 -->
                      <tr>
                        <th>
                          {{ $sellerId->Id_Seller }}
                        </th>
                        <td>
                          <div class="flex items-center gap-3">
                            <div class="avatar">
                              <div class="w-12 h-12 border-[1px] border-[#BEBEBE] rounded-full">
                                <img src="{{ Storage::url($userSeller->Picture) }}" alt="Avatar Tailwind CSS Component" />
                              </div>
                            </div>
                            <div>
                              <div class="font-normal">{{ $userSeller->Name }}</div>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{ $userSeller->Email }}
                        </td>
                        <td>{{ $userSeller->Number_Phone }}</td>
                        <td>{{ $userSeller->Role }}</td>
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-100 font-normal rounded-box w-52">
                                <li><a onclick="my_modal_ban3{{ $userSeller->Id_User }}.showModal()"><svg class="w-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>                                
                                  Ban</a></li>
                                <li><a onclick="my_modal_detail3{{ $userSeller->Id_User }}.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>

                      <!-- modal ban -->
                      <dialog id="my_modal_ban3{{ $userSeller->Id_User }}" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          
                          <h3 class="font-bold text-lg mb-3">Banned This User?!</h3>
                          <p>This User {{ $userSeller->Name }} With ID {{ $sellerId->Id_Seller }} Will Be Banned</p>
                          <form action="{{ route('adminuser.store') }}" method="POST">
                            @csrf
                          <div class="grid grid-rows-1 grid-cols-2 mb-4 mt-4">
                            <div class="">
                              <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Id_User" type="text" value="{{ $userBuyer->Id_User }}"></input>
                            </div>
                            <div class="">
                              <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Name" type="text" value="{{ $userBuyer->Name }}"></input>
                            </div>
                          <div class="">
                            <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Numberphone" type="text" value="{{ $userBuyer->Number_Phone }}"></input>
                          </div>
                          <div class="">
                            <input type="hidden" class="shadow-2xl rounded-lg input p-2" name="Email" type="text" value="{{ $userBuyer->Email }}"></input>
                          </div>
                        </div>
                          <button type="submit"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">BAN</button>
                        </div>
                      </form>
                        
                      </dialog>
                      <!-- modal ban -->

                      <!-- modal detail -->
                      <dialog id="my_modal_detail3{{ $userSeller->Id_User }}" class="modal">
                          <div class="modal-box w-6/12 max-w-5xl py-12">
                            <form method="dialog">
                              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="grid grid-cols-3 gap-4">
                              <div class="cols-span-1 avatar flex justify-center">
                                <div class="w-32 h-32 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                                  <img src="{{ Storage::url($userSeller->Picture) }}" alt="profile image" />
                                </div>
                              </div>
                              <div class="col-span-2">
                                <h3 class="font-bold text-2xl">Detail User #{{ $userSeller->Id_User }}</h3>
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
                                        <input type="text" name="Name" class="grow" value="{{ $userSeller->Name }}" />
                                    </label>
                                  </label>
                                </div>

                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Username</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                      <svg class="w-4 h-4 text-black" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
                                        <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
                                        </svg>
                                        <input type="text" name="Name" class="grow" value="{{ $userSeller->Username }}" />
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
                                        <input type="text" name="Numberphone" class="grow" value="{{ $userSeller->Number_Phone }}" />
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
                                        <input disabled type="date" name="Date" class="grow" value="{{ $userSeller->Date_Of_Birth }}" />
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
                                        <input type="email" class="grow" name="Email" value="{{ $userSeller->Email }}" />
                                    </label>
                                  </label>
                                </div>

                                <div>
                                  <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                      <span class="label-text text-xs">Role</span>
                                    </div>
                                    <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                                        <input type="email" class="grow" name="Email" value="{{ $userSeller->Role }}" />
                                    </label>
                                  </label>
                                </div>

                              </div>
                            </div>
                            </div>
                            <div class="modal-action">
                              <form method="dialog">
                                
                              </form>
                              </div>
                              </div>
                            </dialog>
                            <!-- modal detail -->

                    </tbody>
                    @endif
                    @endforeach
                    @endforeach
                    <!-- foot -->
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>    
                  </table>
                </div>

                
                <!-- tabs 3 -->
                <!-- tabs 4 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Admin" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                    <!-- head -->
                    <thead>
                      <tr>
                        <th>
                          ID Admin
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    
                    
                    @foreach ($users as $user)
                    @if ($user->Role == 'Admin')
                    @foreach ($admins as $admin)
                    
                    <tbody>
                      <!-- row 1 -->
                      <tr>
                        <th>
                          {{ $admin->Id_Admin }}
                        </th>
                        
                        
                        <td>
                          <div class="flex items-center gap-3">
                            <div class="avatar">
                              <div class="w-12 h-12  border-[1px] border-[#BEBEBE] rounded-full">
                                <img src="{{ Storage::url($user->Picture) }}" alt="Avatar Tailwind CSS Component" />
                              </div>
                            </div>
                            <div>
                              <div class="font-normal">{{ $user->Name }}</div>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{ $user->Email }}
                        </td>
                        <td>{{ $user->Number_Phone }}</td>
                        <td>{{ $user->Role }}</td>
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-100 font-normal rounded-box w-52">
                                {{-- <li><a>Item 1</a></li>
                                <li><a>Item 2</a></li> --}}
                              </ul>
                            </div>
                        </th>
                      </tr>
                      
                    </tbody>

                    @endforeach
                        @endif
                    @endforeach
                    <!-- foot -->
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                    
                  </table>
                </div>
                <!-- tabs 4 -->

                <!-- tabs 5 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Unban" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                    <!-- head -->
                    <thead>
                      <tr>
                        <th>
                          ID Ban
                        </th>
                        <th>Name</th> 
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>

                    @foreach ($usersBan as $userBan)
                    @foreach ($users as $user)
                    @if ($user->Id_User == $userBan->Id_User)
                    <tbody>
                      <!-- row 1 -->
                      <tr>
                        <th>
                          {{ $userBan->Id_Ban }}
                        </th>
                        <td>
                          <div class="flex items-center gap-3">
                            <div class="avatar">
                              <div class="w-12 h-12  border-[1px] border-[#BEBEBE] rounded-full">
                                <img src="{{ Storage::url($user->Picture) }}" alt="Avatar Tailwind CSS Component" />
                              </div>
                            </div>
                            <div>
                              <div class="font-normal">{{ $user->Name }}</div>
                            </div>
                          </div>
                        </td>
                        <td>
                          {{ $user->Email }}
                        </td>
                        <td>{{ $user->Number_Phone }}</td>
                        <td>{{ $user->Role }}</td>
                        <th>
                        <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                            </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-400 bg-base-100 font-normal rounded-box w-52">
                                {{-- <li><a><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li> --}}
                                <li><a onclick="my_modal_7{{ $user->Id_User }}.showModal()">
                                  <svg class="w-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                  </svg>                                 
                                  Unban</a></li>
                                <li><a onclick="my_modal_8{{ $user->Id_User }}.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>
                      <!-- modal unban -->
                      <dialog id="my_modal_7{{ $user->Id_User }}" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          
                          <h3 class="font-bold text-lg mb-3">Unbanned This User?!</h3>
                          <p>This User {{ $user->Name }} With ID {{ $user->Id_User }} Will Be Unbanned</p>

                          <div class="modal-action">
                            <form action="{{ route('adminuser.destroy', $user->Id_User) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn bg-green-500 text-white">Unban</button>
                            </form>
                          </div>

                          </div>
                        </dialog>
                      <!-- modal unban -->
                    </tbody>
                    @endif
                    @endforeach
                    @endforeach
                    <!-- foot -->
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                    
                  </table>
                </div>
                <!-- tabs 5 -->
              </div>
              <!-- tabslist -->
              </div>
            </div>
          </div>
          <!-- content end -->
        
        </div> 
        <div class="drawer-side">
          <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
          <ul class="bg-[#0C3FF3] menu p-4 w-64 min-h-full text-white">
            <!-- Sidebar content here -->
            <li class="mx-auto font-bold text-xl drop-shadow-xl"><a>Glimpz</a></li>
            <li><a href="admindasbor"><svg class="h-6 w-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.91667 0C1.75355 0 0 1.75355 0 3.91667V6.83333C0 8.99645 1.75355 10.75 3.91667 10.75H9.75C11.9131 10.75 13.6667 8.99645 13.6667 6.83333V3.91667C13.6667 1.75355 11.9131 0 9.75 0H3.91667ZM2 3.91667C2 2.85812 2.85812 2 3.91667 2H9.75C10.8085 2 11.6667 2.85812 11.6667 3.91667V6.83333C11.6667 7.89188 10.8085 8.75 9.75 8.75H3.91667C2.85812 8.75 2 7.89188 2 6.83333V3.91667ZM3.91667 17.5833H9.75C10.2563 17.5833 10.6667 17.9937 10.6667 18.5V27.25C10.6667 27.7563 10.2563 28.1667 9.75 28.1667H3.91667C3.41041 28.1667 3 27.7563 3 27.25V18.5C3 17.9937 3.41041 17.5833 3.91667 17.5833ZM1 18.5C1 16.8892 2.30584 15.5833 3.91667 15.5833H9.75C11.3608 15.5833 12.6667 16.8892 12.6667 18.5V27.25C12.6667 28.8608 11.3608 30.1667 9.75 30.1667H3.91667C2.30584 30.1667 1 28.8608 1 27.25V18.5ZM17.5 3.91667C17.5 1.75355 19.2536 0 21.4167 0H27.25C29.4131 0 31.1667 1.75355 31.1667 3.91667V12.6667C31.1667 14.8298 29.4131 16.5833 27.25 16.5833H21.4167C19.2536 16.5833 17.5 14.8298 17.5 12.6667V3.91667ZM21.4167 2C20.3581 2 19.5 2.85812 19.5 3.91667V12.6667C19.5 13.7252 20.3581 14.5833 21.4167 14.5833H27.25C28.3086 14.5833 29.1667 13.7252 29.1667 12.6667V3.91667C29.1667 2.85812 28.3086 2 27.25 2H21.4167ZM21.4167 20.4167C19.2536 20.4167 17.5 22.1702 17.5 24.3333V27.25C17.5 29.4131 19.2536 31.1667 21.4167 31.1667H27.25C29.4131 31.1667 31.1667 29.4131 31.1667 27.25V24.3333C31.1667 22.1702 29.4131 20.4167 27.25 20.4167H21.4167ZM19.5 24.3333C19.5 23.2748 20.3581 22.4167 21.4167 22.4167H27.25C28.3086 22.4167 29.1667 23.2748 29.1667 24.3333V27.25C29.1667 28.3085 28.3086 29.1667 27.25 29.1667H21.4167C20.3581 29.1667 19.5 28.3085 19.5 27.25V24.3333Z" fill="white"/>
              </svg>
              Dashboard</a></li>
            <li class="bg-white rounded-full text-black"><a href="adminuser" class=""><svg class="h-6 w-6" fill="none" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
              <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
              <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
            </svg>
              Users</a></li>
            <li><a href="adminservice"><svg class="h-6 w-6 text-white" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.5C5.29822 2.5 2.5 5.29822 2.5 8.75V21.25C2.5 24.7018 5.29822 27.5 8.75 27.5H21.25C24.7018 27.5 27.5 24.7018 27.5 21.25V8.75C27.5 5.29822 24.7018 2.5 21.25 2.5H8.75ZM19.6875 16.6238C20.9375 15.9021 20.9375
                14.0979 19.6875 13.3762L14.0625 10.1286C12.8125 9.40689 11.25 10.309 11.25 11.7524V18.2476C11.25 19.6909 12.8125 20.593 14.0625 19.8714L19.6875 16.6238Z" stroke="currentColor" stroke-width="3"/>
              </svg>
              Service</a></li>
            <li><a href="adminorder"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.4657 4.11283C15.4825 4.12383 14.531 4.32184 13.8009 4.67109C12.5365 5.27746 5.5083 8.79609 5.5083 8.79609C7.88347 9.98409 14.0883 13.0861 14.8748 13.4794C15.7314 13.907 17.2852 13.9084 18.1418 13.4794L27.5935
                8.84007C27.5935 8.84007 21.2768 5.63634 19.3009 4.67109C18.4649 4.26271 17.4474 4.10183 16.4657 4.11283ZM4.1333 10.9878V20.5276C4.13344 22.1899 5.26011 23.9953 6.75432 24.7378L15.1333 28.8628V16.3586C14.7524 16.3063 14.0539
                16.0974 13.6293 15.8856L4.90674 11.5461C4.39771 11.2931 4.1333 10.9878 4.1333 10.9878ZM28.8833 10.9878C28.8833 10.9878 28.6193 11.2931 28.1105 11.5461L19.3875 15.8856C18.9627 16.0974 18.2642 16.3063 17.8833 16.3586V28.8628L26.2625
                24.7378C27.7558 23.9953 28.8833 22.1899 28.8833 20.5276V10.9878Z" fill="currentColor"/>
              </svg>
              Order</a></li>
            <li><a href="admininvoice"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 23.375C11 22.6156 11.6156 22 12.375 22H20.625C21.3844 22 22 22.6156 22 23.375C22 24.1344 21.3844 24.75 20.625 24.75H12.375C11.6156 24.75 11 24.1344 11 23.375Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 17.875C11 17.1156 11.6156 16.5 12.375 16.5H20.625C21.3844 16.5 22 17.1156 22 17.875C22 18.6344 21.3844 19.25 20.625 19.25H12.375C11.6156 19.25 11 18.6344 11 17.875Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 12.375C11 11.6156 11.6156 11 12.375 11H13.75C14.5094 11 15.125 11.6156 15.125 12.375C15.125 13.1344 14.5094 13.75 13.75 13.75H12.375C11.6156 13.75 11 13.1344 11 12.375Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 5.5C9.48122 5.5 8.25 6.73122 8.25 8.25V24.75C8.25 26.2688 9.48122 27.5 11 27.5H22C23.5188 27.5 24.75 26.2688 24.75 24.75V12.1391C24.75 11.7744 24.6051 11.4247 24.3473 11.1668L19.0832 5.90273C18.8253 5.64487 18.4756 5.5 18.1109 5.5H11ZM5.5 8.25C5.5 5.21244 7.96243 2.75 11 2.75H18.1109C19.2049 2.75 20.2541 3.1846 21.0277 3.95818L26.2918 9.22227C27.0654 9.99586 27.5 11.0451 27.5 12.1391V24.75C27.5 27.7876 25.0376 30.25 22 30.25H11C7.96243 30.25 5.5 27.7876 5.5 24.75V8.25Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.25 4.125V6.875C19.25 9.15317 21.0968 11 23.375 11H26.125V13.75H23.375C19.578 13.75 16.5 10.672 16.5 6.875V4.125H19.25Z" fill="currentColor"/>
              </svg>
              Earnings</a></li>
            <li><a href="adminpayment"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.125 16.5C4.125 9.66548 9.66548 4.125 16.5 4.125C23.3345 4.125 28.875 9.66548 28.875 16.5C28.875 23.3345 23.3345 28.875 16.5 28.875C9.66548 28.875 4.125 23.3345 4.125 16.5Z" stroke="currentColor" stroke-width="3"/>
              <path d="M22 12.375L15.125 20.625L11 16.875" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Payment</a></li>
          </ul>
        
        </div>
      </div>

      <dialog id="modal_Success" class="modal">
        <div class="modal-box">
            <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">User Banned</h3>
            <p class="py-4">This account has been banned</p>
        </div>
      </dialog>

      <dialog id="modalBanned_Failed" class="modal">
        <div class="modal-box">
            <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg text-red-500 rounded-full font-bold">Action Failed</h3>
            <p class="py-4">The selected user is already in the banned list</p>
        </div>
      </dialog>

      <dialog id="modalUnban" class="modal">
        <div class="modal-box">
            <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg text-red-500 rounded-full font-bold">Action Failed</h3>
            <p class="py-4">This user is no longer banned</p>
        </div>
      </dialog>

<script>
  function showModal1() {
    document.getElementById('modalSucess').showModal();
  }
  function showModal2() {
    document.getElementById('modalBanned_Failed').showModal();
  }
  function showModal3() {
    document.getElementById('modalUnban').showModal();
  }
</script>

@if(session('success'))
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      showModal1();
      });
  </script>
@endif
@if(session('banned_failed'))
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      showModal2();
      });
  </script>>
@endif
@if(session('success_del'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
      showModal3();
    });
  </script>
@endif

</body>
</html>
  