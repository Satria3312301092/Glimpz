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
            <!-- scroll -->
            <div class="w-full h-full">
              <div class="grid grid-cols-2 pl-12 pt-12 pr-12">
                <div>
                  <h1 class="font-bold text-2xl">Orders</h1>
                </div>
  
              </div>
              <!-- tabslist -->
              <div class="overflow-auto h-screen pl-12">
              <div role="tablist" class="tabs tabs-bordered mt-4">
                <!-- tabs 1 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="All Orders" checked/>
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white rounded-none mb-20">
                    <!-- head -->
                    <!-- All User -->
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
                    <!-- all orders -->
                        

                  </table>
                </div>

                <!-- tab 2 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Finished" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                    <!-- Finished -->
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
                        <!-- row 4 -->  
                         <!-- row 5 -->
                       
                    <!-- Finished -->


                  </table>
                </div>

                <!-- tab 3 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Pending" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                    <!-- Pending -->
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
                    <!-- Pending -->


                  </table>
                </div>

                <!-- tab 4 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Payment Pending" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                <!-- Payment Pending -->
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
                <!-- Payment Pending -->

                  </table>
                </div>

                <!-- tab 5 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="Rejected" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                    <!-- Rejected -->
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
                <!-- Rejected -->

                  </table>
                </div>

                <!-- tab 6 -->
                <input type="radio" name="my_tabs_1" role="tab" class="tab checked:!text-blue-800 checked:!border-b-2 checked:!border-blue-800" aria-label="In Progress" />
                <div role="tabpanel" class="tab-content pt-8">
                  <table class="table bg-white mb-20">
                     <!-- In Progress -->
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
                <!-- In Progress -->

                  </table>
                </div>







</body>
</html>