<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimpz - Category | 3D Animation</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
</head>
<body class="font-poppins bg-white">
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
      <a class="btn btn-ghost text-xl" >Glimpz</a>
    </div>
    <div class="navbar-center hidden lg:flex z-[1]">
      <ul class="menu menu-horizontal px-1">
        <li><a>Home</a></li>
        <li><a>Service</a></li>
        <li><a>About</a></li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <div class="navbar-end">
    <button class="btn btn-ghost btn-circle">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
    <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                  <div class="w-8 p-2 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                    <img src="../images/Profileuser.svg" alt="Avatar Tailwind CSS Component" />
                  </div>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                  <li>
                    <a class="justify-between">
                      Profile
                      <span class="badge">New</span>
                    </a>
                  </li>
                  <li><a>Settings</a></li>
                  <li><a>Logout</a></li>
                </ul>
              </div>
            </div>
        </div>
  <!-- navbar end -->



    

  <div class="container mx-auto pt-20">
    <h2 class="font-semibold font-['Poppins'] text-2xl mb-16 text-black">{{$service->Title}}</h2>
    <div class="grid grid-cols-5 gap-x-14">
        <div class="col-span-3 grid gap-y-4">
            <img src="{{ Storage::url($service->Thumbnail) }}" class="rounded-2xl w-full" alt="">
            <div class="flex py-6 divide-x-2 divide-gray-500 border-b-2 border-gray-500">
                <div class="flex items-center pr-10">
                        <div class="avatar mr-3">
                            <div class="w-10 rounded-full border-2 border-zinc-300">
                              <img src="../images/Profileuser.svg" class="" />
                            </div>
                        </div>
                       
                        <a class="font-bold text-lg">Hyerin</a>
                        
                </div>
                <div class="flex items-center pl-10">
                        <div class="rating rating-sm">
                            <input type="radio" name="rating-9" class="mask mask-star-2" />
                            <input type="radio" name="rating-9" class="mask mask-star-2" checked />
                            <input type="radio" name="rating-9" class="mask mask-star-2" />
                            <input type="radio" name="rating-9" class="mask mask-star-2" />
                            <input type="radio" name="rating-9" class="mask mask-star-2" />
                        </div>
                        <span>(77 Reviews)</span>
                </div>
            </div>

            <div>
                <h1 class="font-bold text-slate-700 text-xl mb-2">Description</h1>
                <p class="text-neutral-500">{{$service->Description}}</p>
            </div>

            <div>
                <h1 class="font-bold text-slate-700 text-xl mb-2">Category</h1>
                <p class="text-neutral-500">{{$service->Category}}</p>
            </div>
        </div>
        <div class="col-span-2">
            <div class="bg-white border-2 border-slate-300 rounded-xl shadow-lg pt-5 px-10">
                <div role="tablist" class="tabs tabs-boxed grid justify-center font-bold rounded-2xl">
                  <a role="tab" class="tab tab-active !bg-blue-700 w-32 h-16 text-lg !rounded-2xl" onclick="toggleTab('tab-1')">Basic</a>
                  <a role="tab" class="tab w-32 h-16 text-lg !rounded-2xl" onclick="toggleTab('tab-2')">Standard</a>
                  <a role="tab" class="tab w-32 h-16 text-lg !rounded-2xl" onclick="toggleTab('tab-3')">Premium</a>
                </div>
          
                @foreach ($service->types as $type)
                @if ($type->Type_Name == 'Basic')
                @foreach ($type->details as $detail)
                <div class="pt-5 pb-10">
                  <div id="tab-1" role="tabpanel" class="tab_content">
                    <div class="grid gap-y-3">
                        <div class="flex justify-between font-bold items-end text-xl">
                            <h3>Basic Animation</h3>
                            <a">Rp.{{$detail->Price}}</a>
                        </div>
                        <p>{{$detail->Descriptions}}</p>
                        <ul class="font-bold text-base">
                            <li class="flex items-center mb-3">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.1923 19.3079L17 24.5002L22.1923 29.6925" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.8076 12.3846L16.9999 7.19228L11.8076 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 24.4998H27.3846C29.9337 24.4998 32 22.4335 32 19.8844V11.8075C32 9.25852 29.9337 7.19214 27.3846 7.19214H23.9231" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 7.19214H6.61538C4.06638 7.19214 2 9.25852 2 11.8075V19.8844C2 22.4335 4.06638 24.4998 6.61538 24.4998H10.0769" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Revision}} Revisions
                            </li>
                            <li class="flex items-center mb-3">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9999 31.9998C24.0098 31.9998 29.6922 26.3174 29.6922 19.3075C29.6922 12.2978 24.0098 6.61523 16.9999 6.61523C9.99015 6.61523 4.30762 12.2978 4.30762 19.3075C4.30762 26.3174 9.99015 31.9998 16.9999 31.9998Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 6.61538C3.62065 4.73288 5.5769 3.16788 7.76923 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M32.0007 6.61538C30.38 4.73288 28.4238 3.16788 26.2314 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 12.3848V19.3078H22.7692" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Day}} Days Delivery Time
                            </li>
                        </ul>
                        <button onclick="my_modal_1{{ $type->Id_Type }}.showModal()" class="btn bg-blue-700 hover:bg-blue-700 text-white text-lg font-normal border-none w-full h-14 mt-7 shadow-neutral-400 shadow-lg">Continue</button>
                    </div>
                  </div>

               <!-- modal Order basic -->
                      <!-- Open the modal using ID.showModal() method -->
                      <dialog id="my_modal_1{{ $type->Id_Type }}" class="modal">
                        <div class="modal-box">
                          <h3 class="font-bold text-lg ">Add Order</h3>
                          <div class="divider"></div>
                          <div class="grid gap-y-3">
                        <div class="flex justify-between font-bold items-end">
                            <h3 class="text-base text-slate-700">Basic Animation</h3>
                        </div>
                        <p class="text-zinc-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.{{$detail->Descriptions}}</p>
                        <ul class="font-bold text-base bg-slate-50 rounded-xl p-5">
                            <li class="flex items-center mb-3 text-slate-700">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.1923 19.3079L17 24.5002L22.1923 29.6925" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.8076 12.3846L16.9999 7.19228L11.8076 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 24.4998H27.3846C29.9337 24.4998 32 22.4335 32 19.8844V11.8075C32 9.25852 29.9337 7.19214 27.3846 7.19214H23.9231" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 7.19214H6.61538C4.06638 7.19214 2 9.25852 2 11.8075V19.8844C2 22.4335 4.06638 24.4998 6.61538 24.4998H10.0769" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Revision}} Revisions
            
                            </li>
                            <li class="flex items-center mb-3 text-slate-700">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9999 31.9998C24.0098 31.9998 29.6922 26.3174 29.6922 19.3075C29.6922 12.2978 24.0098 6.61523 16.9999 6.61523C9.99015 6.61523 4.30762 12.2978 4.30762 19.3075C4.30762 26.3174 9.99015 31.9998 16.9999 31.9998Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 6.61538C3.62065 4.73288 5.5769 3.16788 7.76923 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M32.0007 6.61538C30.38 4.73288 28.4238 3.16788 26.2314 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 12.3848V19.3078H22.7692" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Day}} Days Delivery Time
                            </li>
                        </ul>
                        <a class="font-bold text-xl text-slate-700">Rp.{{$detail->Price}}</a>
                          <div class="modal-action">
                            <form method="dialog">
                              <button class="btn">Close</button>
                            </form>
                            <form action="{{route('service.store')}}" method="POST">
                              @csrf
                              <input type="hidden" name="id_user" value="{{ $users->Id_User }}">
                              <input type="hidden" name="id_service" value="{{ $service->Id_Service }}">
                              <input type="hidden" name="id_type" value="{{ $type->Id_Type }}">
                              <input type="hidden" name="id_detail" value="{{ $detail->Id_Detail }}">
                            <button class="btn btn-outline text-blue-700 hover:!border-blue-700 hover:bg-blue-700 hover:text-white">Confirm</button>
                            </form>
                          </div>
                    </div>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                          <button>close</button>
                        </form>
                      </dialog>
                <!-- modal Order Basic -->

                  @endforeach
                  @elseif ($type->Type_Name == 'Standard')
                  @foreach ($type->details as $detail)
                  <div id="tab-2" role="tabpanel" class="hidden tab_content">
                    <div class="grid gap-y-3">
                        <div class="flex justify-between font-bold items-end">
                            <h3 class="text-base">Standard Animation</h3>
                            <a class="text-xl">Rp.{{$detail->Price}}</a>
                        </div>
                        <p>{{$detail->Descriptions}}</p>
                        <ul class="font-bold text-base">
                            <li class="flex items-center mb-3">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.1923 19.3079L17 24.5002L22.1923 29.6925" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.8076 12.3846L16.9999 7.19228L11.8076 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 24.4998H27.3846C29.9337 24.4998 32 22.4335 32 19.8844V11.8075C32 9.25852 29.9337 7.19214 27.3846 7.19214H23.9231" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 7.19214H6.61538C4.06638 7.19214 2 9.25852 2 11.8075V19.8844C2 22.4335 4.06638 24.4998 6.61538 24.4998H10.0769" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                
                                {{$detail->Revision}} Revisions
                            </li>
                            <li class="flex items-center mb-3">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9999 31.9998C24.0098 31.9998 29.6922 26.3174 29.6922 19.3075C29.6922 12.2978 24.0098 6.61523 16.9999 6.61523C9.99015 6.61523 4.30762 12.2978 4.30762 19.3075C4.30762 26.3174 9.99015 31.9998 16.9999 31.9998Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 6.61538C3.62065 4.73288 5.5769 3.16788 7.76923 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M32.0007 6.61538C30.38 4.73288 28.4238 3.16788 26.2314 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 12.3848V19.3078H22.7692" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Day}} Days Delivery Time
                            </li>
                        </ul>
                        <button  onclick="my_modal_2{{ $type->Id_Type }}.showModal()" class="btn bg-blue-700 hover:bg-blue-700 text-white text-lg font-normal border-none w-full h-14 mt-7 shadow-neutral-400 shadow-lg">Continue</button>
                    </div>
                  </div>

                  <!-- modal Order basic -->
                      <!-- Open the modal using ID.showModal() method -->
                      <dialog id="my_modal_2{{ $type->Id_Type }}" class="modal">
                        <div class="modal-box">
                          <h3 class="font-bold text-lg ">Add Order</h3>
                          <div class="divider"></div>
                          <div class="grid gap-y-3">
                        <div class="flex justify-between font-bold items-end">
                            <h3 class="text-base text-slate-700">Basic Animation</h3>
                        </div>
                        <p class="text-zinc-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.{{$detail->Descriptions}}</p>
                        <ul class="font-bold text-base bg-slate-50 rounded-xl p-5">
                            <li class="flex items-center mb-3 text-slate-700">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.1923 19.3079L17 24.5002L22.1923 29.6925" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.8076 12.3846L16.9999 7.19228L11.8076 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 24.4998H27.3846C29.9337 24.4998 32 22.4335 32 19.8844V11.8075C32 9.25852 29.9337 7.19214 27.3846 7.19214H23.9231" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 7.19214H6.61538C4.06638 7.19214 2 9.25852 2 11.8075V19.8844C2 22.4335 4.06638 24.4998 6.61538 24.4998H10.0769" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Revision}} Revisions
                            </li>
                            <li class="flex items-center mb-3 text-slate-700">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9999 31.9998C24.0098 31.9998 29.6922 26.3174 29.6922 19.3075C29.6922 12.2978 24.0098 6.61523 16.9999 6.61523C9.99015 6.61523 4.30762 12.2978 4.30762 19.3075C4.30762 26.3174 9.99015 31.9998 16.9999 31.9998Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 6.61538C3.62065 4.73288 5.5769 3.16788 7.76923 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M32.0007 6.61538C30.38 4.73288 28.4238 3.16788 26.2314 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 12.3848V19.3078H22.7692" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Day}} Days Delivery Time
                            </li>
                        </ul>
                        <a class="font-bold text-xl text-slate-700">Rp.{{$detail->Price}}</a>
                          <div class="modal-action">
                            <form method="dialog">
                              <button class="btn">Close</button>
                            </form>
                            <button class="btn btn-outline text-blue-700 hover:!border-blue-700 hover:bg-blue-700 hover:text-white">Confirm</button>
                          </div>
                    </div>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                          <button>close</button>
                        </form>
                      </dialog>
                <!-- modal Order Basic -->

                  @endforeach
                 @elseif ($type->Type_Name == 'Premium')
                  @foreach ($type->details as $detail)
                  <div id="tab-3" role="tabpanel" class="hidden tab_content">
                    <div class="grid gap-y-3">
                        <div class="flex justify-between font-bold items-end">
                            <h3 class="text-base">Premium Animation</h3>
                            <a class="text-xl">Rp.{{$detail->Price}}</a>
                        </div>
                        <p>{{$detail->Descriptions}}</p>
                        <ul class="font-bold text-base">
                            <li class="flex items-center mb-3">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.1923 19.3079L17 24.5002L22.1923 29.6925" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.8076 12.3846L16.9999 7.19228L11.8076 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 24.4998H27.3846C29.9337 24.4998 32 22.4335 32 19.8844V11.8075C32 9.25852 29.9337 7.19214 27.3846 7.19214H23.9231" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 7.19214H6.61538C4.06638 7.19214 2 9.25852 2 11.8075V19.8844C2 22.4335 4.06638 24.4998 6.61538 24.4998H10.0769" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                
                                {{$detail->Revision}} Revisions
                            </li>
                            <li class="flex items-center mb-3">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9999 31.9998C24.0098 31.9998 29.6922 26.3174 29.6922 19.3075C29.6922 12.2978 24.0098 6.61523 16.9999 6.61523C9.99015 6.61523 4.30762 12.2978 4.30762 19.3075C4.30762 26.3174 9.99015 31.9998 16.9999 31.9998Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 6.61538C3.62065 4.73288 5.5769 3.16788 7.76923 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M32.0007 6.61538C30.38 4.73288 28.4238 3.16788 26.2314 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 12.3848V19.3078H22.7692" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Day}} Days Delivery Time
                            </li>
                        </ul>
                        <button  onclick="my_modal_3{{ $type->Id_Type }}.showModal()" class="btn bg-blue-700 hover:bg-blue-700 text-white text-lg font-normal border-none w-full h-14 mt-7 shadow-neutral-400 shadow-lg">Continue</button>
                    </div>
                  </div>

                    <!-- modal Order basic -->
                      <!-- Open the modal using ID.showModal() method -->
                      <dialog id="my_modal_3{{ $type->Id_Type }}" class="modal">
                        <div class="modal-box">
                          <h3 class="font-bold text-lg ">Add Order</h3>
                          <div class="divider"></div>
                          <div class="grid gap-y-3">
                        <div class="flex justify-between font-bold items-end">
                            <h3 class="text-base text-slate-700">Basic Animation</h3>
                        </div>
                        <p class="text-zinc-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.{{$detail->Descriptions}}</p>
                        <ul class="font-bold text-base bg-slate-50 rounded-xl p-5">
                            <li class="flex items-center mb-3 text-slate-700">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.1923 19.3079L17 24.5002L22.1923 29.6925" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.8076 12.3846L16.9999 7.19228L11.8076 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 24.4998H27.3846C29.9337 24.4998 32 22.4335 32 19.8844V11.8075C32 9.25852 29.9337 7.19214 27.3846 7.19214H23.9231" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 7.19214H6.61538C4.06638 7.19214 2 9.25852 2 11.8075V19.8844C2 22.4335 4.06638 24.4998 6.61538 24.4998H10.0769" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Revision}} Revisions
                            </li>
                            <li class="flex items-center mb-3 text-slate-700">
                                <svg class="w-6 h-6 mr-4" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.9999 31.9998C24.0098 31.9998 29.6922 26.3174 29.6922 19.3075C29.6922 12.2978 24.0098 6.61523 16.9999 6.61523C9.99015 6.61523 4.30762 12.2978 4.30762 19.3075C4.30762 26.3174 9.99015 31.9998 16.9999 31.9998Z" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 6.61538C3.62065 4.73288 5.5769 3.16788 7.76923 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M32.0007 6.61538C30.38 4.73288 28.4238 3.16788 26.2314 2" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 12.3848V19.3078H22.7692" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$detail->Day}} Days Delivery Time
                            </li>
                        </ul>
                        <a class="font-bold text-xl text-slate-700">Rp.{{$detail->Price}}</a>
                          <div class="modal-action">
                            <form method="dialog">
                              <button class="btn">Close</button>
                            </form>
                            <button class="btn btn-outline text-blue-700 hover:!border-blue-700 hover:bg-blue-700 hover:text-white">Confirm</button>
                          </div>
                    </div>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                          <button>close</button>
                        </form>
                      </dialog>
                <!-- modal Order Basic -->
                <!-- modal Order -->

                  @endforeach
                  @endif
                  @endforeach
                 
                

                 
                </div>
            </div>
        </div>
    </div>


    <div class="grid justify-center py-80">
        <h3 class="font-bold text-2xl text-center mb-20">See Other Services</h3>
        <div class="grid grid-cols-3 gap-6">
            
            <div class="card card-compact w-64 bg-base-100 shadow-xl ">
                <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <p>Category</p>
                        <h2 class="text-base">I Will Animate Your Character </h2>
                            <div class="card-actions justify-start">
                                    <div class="rating rating-sm">
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" checked />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <span>128</span>
                                    </div>
                            </div>
                        <p class="text-lg font-bold">Rp.99.999</p>
                    </div>
            </div>
            
            <div class="card card-compact w-64 bg-base-100 shadow-xl ">
                <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <p>Category</p>
                        <h2 class="text-base">I Will Animate Your Character </h2>
                            <div class="card-actions justify-start">
                                    <div class="rating rating-sm">
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" checked />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <span>128</span>
                                    </div>
                            </div>
                        <p class="text-lg font-bold">Rp.99.999</p>
                    </div>
            </div>
            
            <div class="card card-compact w-64 bg-base-100 shadow-xl ">
                <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    <div class="card-body">
                        <p>Category</p>
                        <h2 class="text-base">I Will Animate Your Character </h2>
                            <div class="card-actions justify-start">
                                    <div class="rating rating-sm">
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" checked />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <input type="radio" name="rating-9" class="mask mask-star-2" />
                                        <span>128</span>
                                    </div>
                            </div>
                        <p class="text-lg font-bold">Rp.99.999</p>
                    </div>
            </div>
        </div>
    </div>
  </div>

@include ('components/footer')
  

  <script>
    function toggleTab(tabId) {
        // Sembunyikan semua tab content
        document.querySelectorAll('.tab_content').forEach(content => {
            content.classList.add('hidden');
        });
        // Tampilkan tab content yang sesuai
        document.getElementById(tabId).classList.remove('hidden');
        // Hapus kelas tab-active dari semua tab
        document.querySelectorAll('.tab').forEach(tab => {
            tab.classList.remove('tab-active', '!bg-blue-700');
        });
        // Tambahkan kelas tab-active ke tab yang ditekan
        document.querySelector(`[onclick="toggleTab('${tabId}')"]`).classList.add('tab-active', '!bg-blue-700');
    }
  </script>
  </body>
  </html>