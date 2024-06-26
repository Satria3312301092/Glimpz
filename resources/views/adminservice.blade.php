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
          @include('components.nav_admin')

          <!-- content -->
          <div class="container mx-auto flex justify-start">
            <div class="w-full h-full">
              <div class="grid grid-cols-2 pl-12 pt-12 pr-12">
                <div>
                  <h1 class="font-bold text-2xl">Service</h1>
                  <a class="text-xs text-blue-500">{{ $countService }} Service Found</a>
                </div>
                <div class="flex items-end justify-end">
                  <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered input-sm text-xs rounded-full mr-3" />
                  </div>
                  <a class="btn btn-sm bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none rounded-md">
                    <svg class="h-4 w-4 text-white" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.8947 18.3684C14.8947 15.8105 11.7843 13.7368 7.94737 13.7368C4.11044 13.7368 1 15.8105 1 18.3684M19.5263 14.8947V11.4211M19.5263 
                    11.4211V7.94737M19.5263 11.4211H16.0526M19.5263 11.4211H23M7.94737 10.2632C5.38942 10.2632 3.31579 8.18953 3.31579 5.63158C3.31579 3.07363 5.38942 
                    1 7.94737 1C10.5053 1 12.5789 3.07363 12.5789 5.63158C12.5789 8.18953 10.5053 10.2632 7.94737 10.2632Z" stroke="currentColor" stroke-width="2" 
                    stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Add User</a>
                </div>
              </div>
              <div class="overflow-auto max-h-screen pl-12 pt-12">
              <!-- table service -->
                <table class="table bg-white mb-20 text-slate-700">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
@foreach ($services as $service)
  @foreach ($types as $type)
      @if ($type->Type_Name == 'Basic')
      @foreach ($details as $detail)
          @if($detail->Id_Type == $type->Id_Type && $detail->Id_Service == $service->Id_Service)
                    <!-- row 1 -->
                    <tr>
                        <th>
                          {{ $service->Id_Service }}
                        </th>
                        <td>
                            <div class="avatar">
                              <div class="w-24 h-16 rounded-md">
                                <img src="{{ Storage::url($service->Thumbnail) }}" alt="Avatar Tailwind CSS Component" />
                              </div>
                            </div>
                        </td>
                        <td>
                          {{ $service->Title }}
                        </td>
                        <td>{{ $service->Category }}</td>
                        <td>Rp{{ number_format($detail->Price, 0, ',', '.') }}</td>
                        <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-400 bg-base-100 font-normal rounded-box w-52">
                                <li><a onclick="my_modal_0{{ $service->Id_Service }}.showModal()"><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li>
                                <li><a onclick="my_modal_1{{ $service->Id_Service }}.showModal()"><svg class="w-4 text-blue-800" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.2633 3.12132L20.0917 5.94975C20.4822 6.34027 20.4822 6.97344 20.0917 7.36396L11.3153 16.1403L5.3049 17.9081L7.07267 11.8977L15.849 
                                  3.12132C16.2396 2.7308 16.8727 2.7308 17.2633 3.12132Z" stroke="currentColor" stroke-width="2"/>
                                  </svg>                                  
                                  Edit</a></li>
                                <li><a onclick="my_modal_2{{ $service->Id_Service }}.showModal(); selectFirstTab(<?php echo $service->Id_Service; ?>)"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
                      </tr>
                      <dialog id="my_modal_0{{ $service->Id_Service }}" class="modal">
                        <div class="modal-box">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <form action="{{ route('adminservice.destroy', $service->Id_Service) }}" method="POST">
                            @csrf
                            @method('DELETE')
                          <h3 class="font-bold text-lg">Delete this Service?!</h3>
                          <p class="py-4">Are You Sure Want To Delete This Service with ID {{ $service->Id_Service }}</p>
                          <button type="submit"  class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 mt-2">Delete</button>
                        </div>
                      </form>
                      </dialog>
                      @endif
                      @endforeach
                    @endif
                @endforeach
                

                      <dialog id="my_modal_1{{ $service->Id_Service }}" class="modal">
                        <div class="modal-box w-full max-w-6xl rounded-2xl shadow-xl">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          
                            <h3 class="font-bold text-xl mb-3">Edit Service</h3>
                            <form action="{{ route('adminservice.update', $service->Id_Service) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                            <div class="grid grid-cols-3 gap-x-5">
                                <div class="col-span-1 gap-x-20">
                                <img class="w-full rounded-xl" src="{{ Storage::url($service->Thumbnail) }}" alt="" width="150">
                                <input name="Thumbnail" type="file" class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-blue-50 file:text-blue-700
                                hover:file:bg-blue-100
                                mt-4
                              "/>
                              <input type="text" value="{{ $service->Thumbnail }}" name="ThumbnailOld">
                                <div class="col-span-1 gap-x-20 mt-3">
                                  <label for="">ID Seller</label>
                                  <input type="text"  value="{{$service->Id_Seller}}" id="title" name="Id_Service" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                                </div>
                                </div>
                                <div>
                                    <div class="col-span-1">
                                        <div class="grid gap-y-1.5">
                                            <a class="block text-gray-700 text-sm font-semibold">ID SERVICE</a>
                                            <input type="text" value="{{$service->Id_Service}}" id="id_service" name="Id_Service" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                                            
                                            <a class="block text-gray-700 text-sm font-semibold">Title</a>
                                            <input type="text"  value="{{$service->Title}}" id="title" name="Title" class="shadow-lg border rounded py-2 px-3 w-full" >
                                            
                                            <a class="block text-gray-700 text-sm font-semibold">Description</a>
                                            <textarea id="description" name="Description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-24">{{$service->Description}}</textarea>
                                            
                                            <a for="title" class="block text-gray-700 text-sm font-semibold">Category</a>
                                            <select name="Category" class="select select-bordered w-full max-w-xs text-black shadow-lg border-[1px]">
                                              <option class="text-zinc-500 font-bold" selected>{{ $service->Category }}</option>
                                              <option class="text-slate-700" disabled>All Service</option>
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
                                      </div>
                                      </div>
                                     
                                      <div class="col-span-1">
                                        <div role="tablist" class="tabs tabs-lifted">
                                         
                                        @foreach ($types as $type)
                                          @if ($type->Type_Name == 'Basic' && $type->Id_Service == $service->Id_Service)
                                              @foreach ($details as $detail)
                                                @if ($detail->Id_Type == $type->Id_Type)
                                              <!-- tab 1 -->
                                              <input type="radio" id="tab12_<?php echo $service->Id_Service; ?>" name="my_tabs_2" role="tab" class="tab" aria-label="Basic" checked />
                                              <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                                                  <div class="grid gap-y-1.5">
                                                      
                                                      <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                                                      <input type="text" value="{{$detail->Day}}" id="day" name="Day1" class="shadow-lg border rounded py-2 px-3 w-full" >
                                                      
                                                      <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                                                      <input type="text" value="{{$detail->Revision}}" id="Revision1" name="Revision1" class="shadow-lg border rounded py-2 px-3 w-full" >
                                                      
                                                      <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                                                      <input type="text" value="{{$detail->Price}}" id="Price1" name="Price1" class="shadow-lg border rounded py-2 px-3 w-full" >
                                              
                                                      <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                                                      <textarea id="description" name="Description1" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20">{{$detail->Descriptions}}</textarea>
                                                  </div>
                                              </div>
                                              @endif
                                              @endforeach
                                          @endif
                                        @endforeach
                                      
                                                 
                                        @foreach ($types as $type)
                                          @if ($type->Type_Name == 'Standard' && $type->Id_Service == $service->Id_Service)
                                              @foreach ($details as $detail)
                                                @if ($detail->Id_Type == $type->Id_Type)
                                                  <!-- tab2 -->
                                                  <input type="radio" id="tab2_" name="my_tabs_2" role="tab" class="tab" aria-label="Standard" />
                                                  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                                                  <div class="grid gap-y-1.5">
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                                                        <input type="text" value="{{$detail->Day}}" name="Day2" class="shadow-lg border rounded py-2 px-3 w-full" >
                                                        
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                                                        <input type="text" value="{{$detail->Revision}}" id="Revision" name="Revision2" class="shadow-lg border rounded py-2 px-3 w-full" >
                                                        
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                                                        <input type="text" value="{{$detail->Price}}" id="Price" name="Price2" class="shadow-lg border rounded py-2 px-3 w-full" >
                                          
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                                                        <textarea id="Description" name="Description2" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20" >{{$detail->Descriptions}}</textarea>
                                                      </div>
                                                  </div>
                                                  @endif
                                              @endforeach
                                          @endif
                                        @endforeach
                                                 
                                        @foreach ($types as $type)
                                          @if ($type->Type_Name == 'Premium' && $type->Id_Service == $service->Id_Service)
                                              @foreach ($details as $detail)
                                                @if ($detail->Id_Type == $type->Id_Type)
                                                  <!-- tab 3 -->
                                                  <input type="radio" id="tab3_" name="my_tabs_2" role="tab" class="tab" aria-label="Premium" />
                                                  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                                                  <div class="grid gap-y-1.5">
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                                                        <input type="text" value="{{$detail->Day}}" id="title" name="Day3" class="shadow-lg border rounded py-2 px-3 w-full">
                                                        
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                                                        <input type="text" value="{{$detail->Revision}}" id="title" name="Revision3" class="shadow-lg border rounded py-2 px-3 w-full d">
                                                        
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                                                        <input type="text" value="{{$detail->Price}}" id="title" name="Price3" class="shadow-lg border rounded py-2 px-3 w-full">
                                                
                                                        <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                                                        <textarea id="description" name="Description3" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20">{{$detail->Descriptions}}</textarea>
                                                      </div>
                                                  </div>
                                                  @endif
                                              @endforeach
                                          @endif
                                        @endforeach
                                      <div class="grid grid-rows-1 flex col-end-5 row-end-9 mt-3 ml-9">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 
                                        focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                                        me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 
                                        dark:focus:ring-blue-800">Update</button>
                                      </div>
                                    </form>
                        </dialog>
                      

                      <dialog id="my_modal_2{{ $service->Id_Service }}" class="modal">
                        <div class="modal-box w-full h-full max-w-6xl max-h-6xl rounded-2xl shadow-xl">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                          </form>
                          <h3 class="font-bold text-xl mb-3">Detail Service</h3>
                          <div class="divider"></div>
                          <div class="grid grid-cols-3 gap-x-5">
                              <div class="col-span-1">
                                <img class="w-full rounded-xl" src="{{ Storage::url($service->Thumbnail) }}" alt="" width="150">
                              </div>
                              <div>
                                  <div class="col-span-1">
                                      <div class="grid gap-y-1.5">
                                        <label class="form-control w-full">
                                                <div class="label">
                                                  <span class="label-text font-bold text-slate-700 text-sm">ID Seller</span>
                                                </div>
                                                <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-sm">
                                                    <input type="text" id="title" name="title" class="grow" value="{{$service->Id_Seller}}" disabled/>
                                                </label>
                                              </label>

                                              <label class="form-control w-full">
                                                <div class="label">
                                                  <span class="label-text font-bold text-slate-700 text-sm">ID Service</span>
                                                </div>
                                                <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-sm">
                                                    <input type="text" id="title" name="title" class="grow" value="{{$service->Id_Service}}" disabled/>
                                                </label>
                                          </label>

                                        <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Title</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-sm">
                                                <input type="text" id="title" name="title" class="grow" value="{{$service->Title}}" disabled/>
                                            </label>
                                          </label>

                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Description</span>
                                            </div>
                                            <textarea id="description" name="description" class="shadow-md text-sm border border-[#1f293733] rounded py-2 px-3 w-full resize-y h-20" disabled>{{$service->Description}}</textarea>
                                          </label>

                                          <label class="form-control w-full">
                                            <div class="label">
                                              <span class="label-text font-bold text-slate-700 text-sm">Category</span>
                                            </div>
                                            <label class="input input-bordered h-10 flex items-center gap-2 shadow-md focus:shadow-md rounded text-sm">
                                                <input type="text" id="title" name="title" class="grow" value="{{$service->Category}}" disabled/>
                                            </label>
                                          </label>
                      </div>
                      </div>
                      </div>
                      
           

<div class="col-span-1">
  <div role="tablist" class="tabs tabs-lifted">
   
  @foreach ($types as $type)
    @if ($type->Type_Name == 'Basic' && $type->Id_Service == $service->Id_Service)
        @foreach ($details as $detail)
          @if ($detail->Id_Type == $type->Id_Type)
        <!-- tab 1 -->
        <input type="radio" id="tab13_<?php echo $service->Id_Service; ?>" name="my_tabs_2" role="tab" class="tab" aria-label="Basic" checked />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
            <div class="grid gap-y-1.5">
                <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                <input type="text" value="{{$detail->Day}}" id="day" name="day" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                
                <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                <input type="text" value="{{$detail->Revision}}" id="revision" name="revision" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                
                <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                <input type="text" value="{{$detail->Price}}" id="price" name="price" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
        
                <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                <textarea id="description" name="description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20" disabled>{{$detail->Descriptions}}</textarea>
            </div>
        </div>
        @endif
        @endforeach
    @endif
  @endforeach

           
  @foreach ($types as $type)
    @if ($type->Type_Name == 'Standard' && $type->Id_Service == $service->Id_Service)
        @foreach ($details as $detail)
          @if ($detail->Id_Type == $type->Id_Type)
            <!-- tab2 -->
            <input type="radio" id="tab2_" name="my_tabs_2" role="tab" class="tab" aria-label="Standard" />
            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
            <div class="grid gap-y-1.5">
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                  <input type="text" value="{{$detail->Day}}" name="Day" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                  <input type="text" value="{{$detail->Revision}}" id="revisi" name="revisi" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                  <input type="text" value="{{$detail->Price}}" id="Price" name="Price" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
    
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                  <textarea id="Description" name="Description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20" disabled>{{$detail->Descriptions}}</textarea>
                </div>
            </div>
            @endif
        @endforeach
    @endif
  @endforeach
           
  @foreach ($types as $type)
    @if ($type->Type_Name == 'Premium' && $type->Id_Service == $service->Id_Service)
        @foreach ($details as $detail)
          @if ($detail->Id_Type == $type->Id_Type)
            <!-- tab 3 -->
            <input type="radio" id="tab3_" name="my_tabs_2" role="tab" class="tab" aria-label="Premium" />
            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
            <div class="grid gap-y-1.5">
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
                  <input type="text" value="{{$detail->Day}}" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
                  <input type="text" value="{{$detail->Revision}}" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full d" disabled>
                  
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
                  <input type="text" value="{{$detail->Price}}" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
          
                  <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
                  <textarea id="description" name="description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-20" disabled>{{$detail->Descriptions}}</textarea>
                </div>
            </div>
            @endif
        @endforeach
    @endif
  @endforeach
  </div>
  </div>
</dialog>             <!-- row 1 -->
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
                      <th></th>
                    </tr>
                  </tfoot>
                  
                </table>
              <!-- table service -->
              </div>
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
            <li><a class="" href="adminuser"><svg class="h-6 w-6" fill="none" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
              <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
              <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
            </svg>
              Users</a></li>
            <li class="bg-white rounded-full text-black"><a href="adminservice"><svg class="h-6 w-6" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
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
              Invoice</a></li>
            <li><a href="adminpayment"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.125 16.5C4.125 9.66548 9.66548 4.125 16.5 4.125C23.3345 4.125 28.875 9.66548 28.875 16.5C28.875 23.3345 23.3345 28.875 16.5 28.875C9.66548 28.875 4.125 23.3345 4.125 16.5Z" stroke="currentColor" stroke-width="3"/>
              <path d="M22 12.375L15.125 20.625L11 16.875" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Payment</a></li>
          </ul>
        
        </div>
      </div>

      <script>
        function selectFirstTab(serviceId) {
          var tab12 = document.getElementById('tab12_' + serviceId);
          tab12.checked = true;
        }
      </script>

      <script>
        function selectFirstTab(serviceId) {
          var tab13 = document.getElementById('tab13_' + serviceId);
          tab13.checked = true;
        }
      </script>

      <script>
        function openModal(serviceId) {
        document.getElementById(`my_modal_delete1${serviceId}`).showModal();
        }
    </script>
    
    
    @if(session('success_del'))
      <script>
        alert("{{ session('success_del') }}");
      </script>
    @endif
    @if(session('success_update'))
      <script>
        alert("{{ session('success_update') }}");
      </script>
    @endif
</body>
</html>
  