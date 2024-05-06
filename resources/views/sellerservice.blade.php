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
      <a class="btn btn-sm bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none rounded-md ml-3">
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

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Status</li>
                  <li>
                    <div class="badge badge-success rounded-lg badge-outline">Finished</div>
                  </li>
                </ul>
              </div>

              <div class="col-span-1 text-start">
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

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Status</li>
                  <li>
                    <div class="badge badge-error rounded-lg badge-outline">Rejected</div>
                  </li>
                </ul>
              </div>

              <div class="col-span-1 text-start">
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

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Status</li>
                  <li>
                    <div class="badge badge-warning rounded-lg badge-outline">Pending</div>
                  </li>
                </ul>
              </div>

              <div class="col-span-1 text-start">
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

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Status</li>
                  <li>
                    <div class="badge badge-outline text-xs rounded-lg whitespace-nowrap text-orange-500">Payment Pending</div>
                  </li>
                </ul>
              </div>

              <div class="col-span-1 text-start">
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

              <div class="col-span-2 text-start">
                <ul class="text-sm">
                  <li class="font-bold">Status</li>
                  <li>
                    <div class="badge badge-outline text-xs rounded-lg text-blue-600">In Progress</div>
                  </li>
                </ul>
              </div>

              <div class="col-span-1 text-start">
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
        <!-- content -->



</body>
</html>