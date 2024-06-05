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
        <li><a >Service</a></li>
        <li><a>Orders</a></li>
        <li><a>Earnings</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a class="btn">Button</a>
    </div>
  </div>
  <!-- navbar end -->

  <div class="container mx-auto flex justify-start">
    <!-- bagian atas -->
    <div class="w-full h-full">
      <div class="grid grid-cols-2 pl-12 pt-12 pr-12">
        <div>
          <h1 class="font-bold text-2xl">Services</h1>
          <a class="text-xs text-blue-500">{{$count}} Services Found</a>
        </div>
    <div class="flex items-end justify-end">
        <div class="form-control">
          <input type="text" placeholder="Search" class="input input-bordered input-sm text-xs rounded-full mr-3" />
        </div>
        <select class="select select-bordered select-sm text-xs max-w-xs text-blue-700 border-blue-700 focus:outline-2 focus:outline-blue-700">
        <option class="text-zinc-500 font-bold" disabled selected>All Services</option>
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
      <a href="{{ route('tambahservice.create') }}" class="btn btn-sm bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none rounded-md ml-3">
        <svg class="h-4 w-4 text-white" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.8947 18.3684C14.8947 15.8105 11.7843 13.7368 7.94737 13.7368C4.11044 13.7368 1 15.8105 1 18.3684M19.5263 14.8947V11.4211M19.5263 11.4211V7.94737M19.5263 11.4211H16.0526M19.5263 
        11.4211H23M7.94737 10.2632C5.38942 10.2632 3.31579 8.18953 3.31579 5.63158C3.31579 3.07363 5.38942 1 7.94737 1C10.5053 1 12.5789 3.07363 12.5789 5.63158C12.5789 8.18953 10.5053 10.2632 7.94737 10.2632Z" 
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Add Service</a>
      </div>
    </div>
    
    <!-- bagian atas -->
    <!-- content -->


  

    <div class="bg-white border-2 px-5 rounded-xl mt-4 mx-10">
              @foreach ($services as $service)
                <div class="card card-side bg-base-100 h-20 shadow-xl my-5">
                  <figure class="w-32">
                  <img src="{{ Storage::url($service->Thumbnail) }}" alt="" width="150">
                  </figure>
                  <div class="card-body p-5">
                    <div class="grid grid-cols-9 gap-4">

                      <div class="col-span-1">
                        <div class="avatar">
                          <div class="w-10 rounded-full border-2">
                            <img src="images/Profileuser.svg" class="p-1"/>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-span-2 text-start">
                        <ul class="text-sm">
                          <li class="font-bold" name="Title">Title</li>
                          <li>{{$service->cut_title}}</li>
                        </ul>
                      </div>

                      <div class="col-span-1 text-start">
                        <ul class="text-sm">
                          <li class="font-bold">Description</li>
                          <li>{{$service->cut_description}}</li>
                        </ul>
                      </div>

                      <div class="col-span-3 text-start">
                        <ul class="text-sm">
                          <li class="font-bold">Category</li>
                          <li class="">{{$service->Category}}</li>
                        </ul>
                      </div>

                      <div class="col-span-1 grid justify-center items-center">
                                    <div class="dropdown">
                                      <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                      </div>
                                      <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                                        <li><a href="{{ route('editservice.edit', $service->Id_Service) }}"><svg class="w-4 text-green-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19 7L10.25 17L5 12.4545" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>                                  
                                          Edit</a></li>
                                        <li><a onclick="my_modal_delete1{{ $service->Id_Service }}.showModal(); selectFirstTab(<?php echo $service->Id_Service; ?>)">
                                          <svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                          Delete</a>
                                        </li>
                                        <li><a onclick="my_modal_detail1{{ $service->Id_Service }}.showModal(); selectFirstTab(<?php echo $service->Id_Service; ?>)">
                                        <svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                          8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                          Details</a></li>
                                      </ul>
                                    </div>
                      </div>
                      
                    
         
              <!-- modal delete -->
        <!-- Open the modal using ID.showModal() method -->
          <dialog id="my_modal_delete1{{$service->Id_Service}}" class="modal">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Hello!</h3>
              <p class="py-4">Apakah anda yakin ingin menghapus?</p>
              <div class="modal-action">
              <button type="button" class="btn" onclick="document.getElementById('my_modal_delete1{{$service->Id_Service}}').close()">Cancel</button>
                <form action="{{route('sellerservice.destroy', $service->Id_Service )}}" method="POST">    
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn bg-red-600 text-white">Delete</button>
                </form>
              </div>
            </div>
          </dialog>
        <!-- modal delete -->

        <!-- modal detail -->
       
        <dialog id="my_modal_detail1{{$service->Id_Service}}" class="modal">
    <!-- content -->
    
  <div class="modal-box w-full max-w-6xl rounded-2xl shadow-xl">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="font-bold text-xl mb-3">Detail Service</h3>
    <div class="grid grid-cols-3 gap-x-5">
        <div class="col-span-1 gap-x-20">
        <img class="w-full rounded-xl" src="{{ Storage::url($service->Thumbnail) }}" alt="" width="150">
        </div>
        <div>
            <div class="col-span-1">
                <div class="grid gap-y-1.5">
                    <a class="block text-gray-700 text-sm font-semibold">ID SERVICE</a>
                    <input type="text" value="{{$service->Id_Service}}" id="id_service" name="id_service" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                    
                    <a class="block text-gray-700 text-sm font-semibold">Title</a>
                    <input type="text"  value="{{$service->Title}}" id="title" name="title" class="shadow-lg border rounded py-2 px-3 w-full" disabled>
                    
                    <a class="block text-gray-700 text-sm font-semibold">Description</a>
                    <textarea id="description" name="description" class="shadow-lg border rounded py-2 px-3 w-full resize-y h-24" disabled>{{$service->Description}}</textarea>
                    
                    <a for="title" class="block text-gray-700 text-sm font-semibold">Category</a>
                    <select class="select select-bordered w-full max-w-xs text-black shadow-lg border-[1px]">
                        <option class="text-zinc-500 font-bold" disabled selected>{{$service->Category}}</option>
                        <option class="text-slate-700 hover:!bg-blue-50" disabled>Video Editing</option>
                        <option class="text-slate-700"disabled>Video Ads</option>
                        <option class="text-slate-700"disabled>Visual Effect</option>
                        <option class="text-slate-700"disabled>Education</option>
                        <option class="text-slate-700"disabled>Templates</option>
                        <option class="text-slate-700"disabled>Short Movie</option>
                        <option class="text-slate-700"disabled>Social Media</option>
                        <option class="text-slate-700"disabled>2D Animation</option>
                        <option class="text-slate-700"disabled>3D Animation</option>
                        <option class="text-slate-700"disabled>Logo Animation</option>
                        <option class="text-slate-700"disabled>Film Series</option>
                        <option class="text-slate-700"disabled>Character Animation</option>
                        <option class="text-slate-700"disabled>Web Animation</option>
                        <option class="text-slate-700"disabled>Rigging</option>
                        <option class="text-slate-700"disabled>NFT Animation</option>
                    </select>
</div>
</div>
</div>

<!-- tabs -->
<div class="col-span-1">
  <div role="tablist" class="tabs tabs-lifted">
   
  @foreach ($types as $type)
    @if ($type->Type_Name == 'Basic' && $type->Id_Service == $service->Id_Service)
        @foreach ($details as $detail)
          @if ($detail->Id_Type == $type->Id_Type)
        <!-- tab 1 -->
        <input type="radio" id="tab1_<?php echo $service->Id_Service; ?>" name="my_tabs_2" role="tab" class="tab" aria-label="Basic" checked />
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
    </div>
    </div>
</dialog>
        <!-- modal detail -->
        

            </div>
          </div>
          
        </div>
        @endforeach
    </div>
        
        
        <!-- content -->
        <script>
          function selectFirstTab(serviceId) {
            var tab1 = document.getElementById('tab1_' + serviceId);
            tab1.checked = true;
          }
        </script>

<script>
  function openModal(serviceId) {
    document.getElementById(`my_modal_delete1${serviceId}`).showModal();
  }
</script>

@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

        
</body>
</html>






