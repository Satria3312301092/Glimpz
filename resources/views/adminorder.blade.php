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
          <div class="navbar bg-base-100 shadow-xl rounded-b-2xl">
            <div class="flex-1">
              <label for="my-drawer-2" class="btn bg-base-100 border-none shadow-none drawer-button lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
              </label>
              <a class="btn btn-ghost text-xl lg:hidden">Glimpz</a>
            </div>
            <div class="flex-none gap-2">
              <!-- <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
              </div> -->
              <button class="btn btn-ghost btn-circle">
                <svg class="w-8 p-1" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.5063 47.9541C37.9361 47.9541 48.0125 37.8908 48.0125 25.4771C48.0125 13.0633 37.9361 3 25.5063 3C13.0764 3 3 13.0633 3 25.4771C3 37.8908 13.0764 47.9541 25.5063 47.9541Z" stroke="currentColor" stroke-width="5.62656" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M53.6391 53.5735L41.4014 41.3516" stroke="currentColor" stroke-width="5.62656" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>                  
              </button>
              <div class="dropdown dropdown-end pr-6">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                  <div class="w-8 p-2 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                    <img src="../Asset/Profile-user.svg" alt="Avatar Tailwind CSS Component" />
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

          <!-- content -->
          <div class="container mx-auto flex justify-start">
            <div class="w-full h-full">
              <div class="grid grid-cols-2 pl-12 pt-12 pr-12">
                <!-- header -->
                <div>
                  <h1 class="font-bold text-2xl">Order</h1>
                  <a class="text-xs text-blue-500">{{ $count }} Order Found</a>
                </div>
                <!-- search & drodpdown -->
                <div class="flex items-end justify-end">
                  <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered input-sm text-xs rounded-full mr-3" />
                  </div>
                  <select class="select select-bordered select-sm text-xs max-w-xs text-blue-700 border-blue-700 focus:outline-2 focus:outline-blue-700">
                  <option class="text-zinc-500 font-bold" disabled selected>Category</option>
                  <option class="text-slate-700 ">All Service</option>
                  <option class="text-slate-700 hover:!bg-blue-50">Video Editing</option>
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
                <!-- search & drodpdown -->
              </div>
              <!-- table service -->
              <div class="overflow-auto max-h-screen pl-12 pt-12">
                <table class="table bg-white mb-24 text-slate-700">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title Service</th>
                      <th>Date</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($orders as $order)
                    @foreach ($servicesOrder as $serviceOrder)
                    @if ($order->Id_Service == $serviceOrder->Id_Service)
                    @foreach ($typesOrder as $typeOrder)
                    @foreach ($detailsOrder as $detailOrder)
                    @if ($typeOrder->Id_Type == $detailOrder->Id_Type)
                    @if ($detailOrder->Id_Detail == $order->Id_Detail)
                    
                    
                    <!-- row 1 -->
                    <tr>
                        <th>
                          {{ $order->Id_Order }}
                        </th>
                        <td>
                            {{ $serviceOrder->Title }}
                        </td>
                        <td>
                          {{ \Carbon\Carbon::parse($order->Date)->format('d-m-Y') }}
                        </td>
                        <td>{{ $detailOrder->Price }}</td>
                        @if ($order->Status == 'waiting')
                        <td><div class="badge badge-outline text-xs text-yellow-600">Waiting</div></td>
                        @elseif ($order->Status == 'proses')
                        <td><div class="badge badge-outline text-xs text-blue-600">In Progress</div></td>
                        @elseif ($order->Status == 'finish')
                        <td><div class="badge badge-outline text-xs text-green-600">Finished</div></td>
                        @elseif ($order->Status == 'cancel')
                        <td><div class="badge badge-outline text-xs text-red-600">Rejected</div></td>
                        @endif
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                                <li>
                                  <a><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Delete</a></li>
                                <li>
                                  <a onclick="my_modal_1{{ $order->Id_Order }}.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>

                      <dialog id="my_modal_1{{ $order->Id_Order }}" class="modal">
                        <div class="modal-box w-full max-w-6xl rounded-2xl shadow-xl">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <h3 class="font-bold text-xl mb-3">Detail Orders</h3>
                            <div class="divider"></div>
                              <div class="grid grid-cols-2 gap-x-8">
                                <div class="col-span-1">
                                  <img class="w-full shadow-xl shadow-neutral-300 rounded-xl" src="{{ Storage::url($serviceOrder->Thumbnail) }}" alt="" width="150">
                                    
                              </div>
                              <div>
                                  <div class="col-span-1">
                                    <div class="overflow-auto max-h-80 px-5 pb-5">
                                      <div class="grid gap-y-1.5">

                                        <label class="input input-bordered flex items-center gap-2 rounded shadow-md font-bold text-slate-700 text-sm">
                                          ID Order
                                          <input type="text" id="" name="" class="grow text-slate-500 font-normal text-end" value="{{ $order->Id_Order }}" disabled/>
                                        </label>

                                        <label class="input input-bordered flex items-center gap-2 rounded shadow-md font-bold text-slate-700 text-sm">
                                          ID Buyer
                                          <input type="text" id="" name="" class="grow text-slate-500 font-normal text-end" value="{{ $order->Id_User }}" disabled/>
                                        </label>

                                        @foreach ($users as $user)
                                        @if ($user->Id_User == $order->Id_User)
                                        <label class="input input-bordered flex items-center gap-2 rounded shadow-md font-bold text-slate-700 text-sm">
                                          Buyer Name
                                          <input type="text" id="" name="" class="grow text-slate-500 font-normal text-end" value="{{ $user->Name }}" disabled/>
                                        </label>
                                        @endif
                                        @endforeach
                                        <label class="input input-bordered flex items-center gap-2 rounded shadow-md font-bold text-slate-700 text-sm">
                                          ID Seller
                                          <input type="text" id="" name="" class="grow text-slate-500 font-normal text-end" value="{{ $serviceOrder->Id_Seller }}" disabled/>
                                        </label>
                                        @foreach ($users as $user)
                                        @foreach ($sellers as $seller)
                                        
                                        @if ($user->Id_User == $seller->Id_User)
                                        @if ($seller->Id_Seller == $serviceOrder->Id_Seller)
                                        <label class="input input-bordered flex items-center gap-2 rounded shadow-md font-bold text-slate-700 text-sm">
                                          Seller Name
                                          <input type="text" id="" name="" class="grow text-slate-500 font-normal text-end" value="{{ $user->Name }}" disabled/>
                                        </label>
                                        @endif
                                        @endif
                                        @endforeach
                                        @endforeach
                                        <label class="input input-bordered flex items-center gap-2 rounded shadow-md font-bold text-slate-700 text-sm">
                                          ID Service
                                          <input type="text" id="id_service" name="id_service" class="grow text-slate-500 font-normal text-end" value="{{ $serviceOrder->Id_Service }}" disabled/>
                                        </label>

                                        <div class="divider"></div>

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
                                            <textarea id="description" name="description" class="shadow-md border border-[#1f293733] rounded py-2 px-3 w-full resize-y h-24" disabled>{{ $serviceOrder->Description }}</textarea>
                                          </label>
                                          
                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Category</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                                                <input type="text" id="category" name="category" class="grow" value="{{ $serviceOrder->Category }}" disabled/>
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
                                                <input type="text" id="title" name="title" class="grow" value="{{ $detailOrder->Day }}" disabled/>
                                            </label>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                      
           
                    </div>
</dialog>
                      
                      @endif
                      @endif
                      @endforeach
                      @endforeach
                      @endif
                      @endforeach
                    @endforeach
                    <!-- row 1 -->

                    <!-- row 2 -->
                    {{-- <tr>
                        <th>
                          #2
                        </th>
                        <td>
                            I will animate your character
                        </td>
                        <td>
                            2024-03-22
                        </td>
                        <td>Rp.99.000</td>
                        <td><div class="badge badge-outline text-xs text-red-600">Rejected</div></td>
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                                <li><a><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li>
                                <li><a onclick="my_modal_2.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>
                      <dialog id="my_modal_2" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <h3 class="font-bold text-lg">Hello!</h3>
                          <p class="py-4">Press ESC key or click on ✕ button to close</p>
                        </div>
                      </dialog> --}}
                    <!-- row 2 -->

                    <!-- row 3 -->
                    {{-- <tr>
                        <th>
                          #3
                        </th>
                        <td>
                            I will animate your character
                        </td>
                        <td>
                            2024-03-22
                        </td>
                        <td>Rp.99.000</td>
                        <td><div class="badge badge-outline text-xs text-blue-800">In Progress</div></td>
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                                <li><a><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li>
                                <li><a onclick="my_modal_2.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>
                      <dialog id="my_modal_3" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <h3 class="font-bold text-lg">Hello!</h3>
                          <p class="py-4">Press ESC key or click on ✕ button to close</p>
                        </div>
                      </dialog>
                      <dialog id="my_modal_3" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <h3 class="font-bold text-lg">Hello!</h3>
                          <p class="py-4">Press ESC key or click on ✕ button to close</p>
                        </div>
                      </dialog> --}}
                    <!-- row 3 -->
                      
                    <!-- row 4 -->
                    
                    <!-- row 4 -->

                    <!-- row 5 -->
                   
                    <!-- row 5 -->



                  </tbody>
                  <!-- foot -->
                  <tfoot>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                  
                </table>
              </div>
              <!-- table service -->
              </div>
          </div>
        
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
            <li><a href="adminuser"><svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
              <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
              <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
            </svg>
              Users</a></li>
            <li><a href="adminservice"><svg class="h-6 w-6 text-white" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.5C5.29822 2.5 2.5 5.29822 2.5 8.75V21.25C2.5 24.7018 5.29822 27.5 8.75 27.5H21.25C24.7018 27.5 27.5 24.7018 27.5 21.25V8.75C27.5 5.29822 24.7018 2.5 21.25 2.5H8.75ZM19.6875 16.6238C20.9375 15.9021 20.9375
               14.0979 19.6875 13.3762L14.0625 10.1286C12.8125 9.40689 11.25 10.309 11.25 11.7524V18.2476C11.25 19.6909 12.8125 20.593 14.0625 19.8714L19.6875 16.6238Z" stroke="currentColor" stroke-width="3"/>
              </svg>
              Service</a></li>
            <li class="bg-white rounded-full text-black"><a href="adminorder"><svg class="h-6 w-6" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
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
              Invoice</a></li>
            <li><a href="adminpayment"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.125 16.5C4.125 9.66548 9.66548 4.125 16.5 4.125C23.3345 4.125 28.875 9.66548 28.875 16.5C28.875 23.3345 23.3345 28.875 16.5 28.875C9.66548 28.875 4.125 23.3345 4.125 16.5Z" stroke="currentColor" stroke-width="3"/>
              <path d="M22 12.375L15.125 20.625L11 16.875" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Payment</a></li>
          </ul>
        
        </div>
      </div>
</body>
</html>
  