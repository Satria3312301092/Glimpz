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

  <div class="container mx-auto flex justify-start">
    <!-- bagian atas -->
    <div class="w-full h-full">
      <div class="grid grid-cols-2 pl-12 pt-12 pr-12">
        <div>
          <h1 class="font-bold text-2xl">Services</h1>
          <a class="text-xs text-blue-500">5 Services Found</a>
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
      <a href="tambahservice" class="btn btn-sm bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none rounded-md ml-3">
        <svg class="h-4 w-4 text-white" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.8947 18.3684C14.8947 15.8105 11.7843 13.7368 7.94737 13.7368C4.11044 13.7368 1 15.8105 1 18.3684M19.5263 14.8947V11.4211M19.5263 11.4211V7.94737M19.5263 11.4211H16.0526M19.5263 11.4211H23M7.94737 10.2632C5.38942 10.2632 3.31579 8.18953 3.31579 5.63158C3.31579 3.07363 5.38942 1 7.94737 1C10.5053 1 12.5789 3.07363 12.5789 5.63158C12.5789 8.18953 10.5053 10.2632 7.94737 10.2632Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Add Service</a>
      </div>
    </div>
    
    <!-- bagian atas -->
    <!-- content -->
    <div class="bg-white border-2 px-5 rounded-xl mt-4 mx-10">
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

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Title</li>
                  <li>I will made 2D motion cha...</li>
                </ul>
              </div>

              <div class="col-span-1 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Price</li>
                  <li>Rp. 26.000</li>
                </ul>
              </div>

              <div class="col-span-3 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Category</li>
                  <li class="">Video Editing</li>
                </ul>
              </div>

              <div class="col-span-1 grid justify-center items-center">
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                                <li><a href="editservice"><svg class="w-4 text-green-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M19 7L10.25 17L5 12.4545" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>                                  
                                  Edit</a></li>
                                <li><a onclick="my_modal_delete1.showModal()"><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li>
                                <li><a onclick="my_modal_detail1.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
              </div>
              <!-- modal delete -->
        <!-- Open the modal using ID.showModal() method -->
          <dialog id="my_modal_delete1" class="modal">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Hello!</h3>
              <p class="py-4">Apakah anda yakin ingin menghapus?</p>
              <div class="modal-action">
                <form method="dialog">
                  <!-- if there is a button in form, it will close the modal -->
                  <button class="btn">Cancel</button>
                  <button class="btn">Delete</button>
                </form>
              </div>
            </div>
          </dialog>
        <!-- modal delete -->

        <!-- modal detail -->
        <dialog id="my_modal_detail1" class="modal">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Hello!</h3>
              <p class="py-4">Press ESC key or click the button below to close</p>
              <div class="modal-action">
                <form method="dialog">
                  <!-- if there is a button in form, it will close the modal -->
                  <button class="btn">Close</button>
                </form>
              </div>
            </div>
          </dialog>
        <!-- modal detail -->

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

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Title</li>
                  <li>I will made 2D motion cha...</li>
                </ul>
              </div>

              <div class="col-span-1 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Price</li>
                  <li>Rp. 26.000</li>
                </ul>
              </div>

              <div class="col-span-3 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Category</li>
                  <li class="">Video Editing</li>
                </ul>
              </div>

              

              <div class="col-span-1 grid justify-center items-center">
              <th>
                            <div class="dropdown">
                              <div tabindex="0" role="button" class="btn btn-square btn-ghost bg-base-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                              </div>
                              <ul tabindex="0" class="dropdown-content z-[1] menu shadow-md shadow-neutral-300 bg-base-100 font-normal rounded-box w-52">
                                <li><a href="editservice"><svg class="w-4 text-green-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M19 7L10.25 17L5 12.4545" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>                                  
                                  Edit</a></li>
                                <li><a onclick="my_modal_delete2.showModal()"><svg class="w-4 text-red-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M17.9999 17.9999L12 12M12 12L6 6M12 12L18 6M12 12L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Delete</a></li>
                                <li><a onclick="my_modal_detail2.showModal()"><svg class="w-4 text-neutral-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 11V16M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12.0498 
                                  8V8.1L11.9502 8.1002V8H12.0498Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Details</a></li>
                              </ul>
                            </div>
                        </th>
              </div>
          </div>
        </div>
        <!-- modal delete -->
        <!-- Open the modal using ID.showModal() method -->
          <dialog id="my_modal_delete2" class="modal">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Hello!</h3>
              <p class="py-4">Apakah anda yakin ingin menghapus?</p>
              <div class="modal-action">
                <form method="dialog">
                  <!-- if there is a button in form, it will close the modal -->
                  <button class="btn">Cancel</button>
                  <button class="btn">Delete</button>
                </form>
              </div>
            </div>
          </dialog>
        <!-- modal delete -->

        <!-- modal detail -->
        <dialog id="my_modal_detail2" class="modal">
            <div class="modal-box">
              <h3 class="font-bold text-lg">Add New Service</h3>
              <div class="grid grid-cols-3">
                <!-- modal -->
              </div>
              <div class="modal-action">
                <form method="dialog">
                  <!-- if there is a button in form, it will close the modal -->
                  <button class="btn">Close</button>
                </form>
              </div>
            </div>
          </dialog>
        <!-- modal detail -->

        
<!-- row 3 -->
       
        <!-- row 4 -->
       
<!-- row 5 -->
        
        <!-- content -->



</body>
</html>