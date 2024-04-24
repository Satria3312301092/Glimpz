<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <!-- navbar -->
    <div class="navbar bg-transparent absolute -mb-20 z-10">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-transparent rounded-box w-52 text-white">
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
          <a class="btn btn-ghost text-2xl text-black absolute-0">Glimpz</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1 text-base font-medium text-white">
            <li><a>Home</a></li>
            <li>
              <details>
                <summary>Services</summary>
                <ul class="p-2 text-black">
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </details>
            </li>
            <li><a>About</a></li>
            <li><a>Contact</a></li>
          </ul>
        </div>
        <div class="navbar-end gap-4 mr-4">
          <a class="btn btn-blue-300 hover:bg-blue-300 btn-outline text-white hover:text-gray-900 border-blue-300 hover:border-none rounded-full font-medium text-base w-24">Login</a>
          <a class="btn bg-blue-700 hover:bg-blue-700 text-white text-base font-medium border-none rounded-md w-24">Sign Up</a>
        </div>
      </div>
      <!-- navbar end -->
    
      <!-- Landing page content -->
            <div class="bg-cover bg-no-repeat w-full h-[120vh] pt-44 px-24 -z-50" style="background-image: url(../Asset/Landing-page-background.png)">
            <p class="text-6xl font-semibold leading-normal">
              <a class="text-black">Brighten Up Your</a><br> 
              <a class="bg-black text-white rounded-lg px-3">Videos</a>
              <a class="text-black">Bring</a><br>
              <a class="text-blue-700">Animation</a> 
              <a class="text-white underline underline-offset-8 decoration-2">to Life.</a>
            </p>
              <a class="text-gray-900 block">Welcome to Glimpz - the place to find</a>
              <a class="text-gray-900 block"> and sell amazing video and animation work!</a>
              <a href="#" class="btn bg-blue-700 hover:bg-blue-700 text-white text-lg font-normal border-none w-44 h-14 mt-12">Get Started</a>
            </div>

            <!-- Categories card-->
            <div class="container mx-auto pt-10 pb-20">
              <h1 class="text-center text-3xl text-neutral-900 font-bold">Our Categories</h1>
              <div class="flex justify-center">
                <p class="text-center text-slate-400 font-thin w-1/3 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
              </div>
              <div class="flex justify-center mt-12">
                <div class="grid grid-cols-3 gap-8">
                  <!-- card 1-->
                  <div class="card w-[22rem] bg-base-100 border border-neutral-400">
                    <figure class="px-8 pt-7">
                      <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center -mt-2 mb-8">
                      <h2 class="card-title text-lg font-semibold">Video Editing</h2>
                      <p class="text-sm text-slate-400">Lorem ipsum dolor sit amet, consectetur 
                          adipiscing elit, sed do eiusmod</p>
                    </div>
                  </div>
                  <!-- card 2-->
                  <div class="card w-[22rem] bg-base-100 border border-neutral-400">
                    <figure class="px-8 pt-7">
                      <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center -mt-2 mb-8">
                      <h2 class="card-title text-lg font-semibold">2D Animation</h2>
                      <p class="text-sm text-slate-400">Lorem ipsum dolor sit amet, consectetur 
                          adipiscing elit, sed do eiusmod</p>
                    </div>
                  </div>
                  <!-- card 3-->
                  <div class="card w-[22rem] bg-base-100 border border-neutral-400">
                    <figure class="px-8 pt-7">
                      <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center -mt-2 mb-8">
                      <h2 class="card-title text-lg font-semibold">3D Animation</h2>
                      <p class="text-sm text-slate-400">Lorem ipsum dolor sit amet, consectetur 
                          adipiscing elit, sed do eiusmod</p>
                    </div>
                  </div>
                </div>
              </div>
              </div>

              <!-- CTA section -->
              <div class="container mx-auto py-12 grid grid-cols-12 bg-blue-50">
                <div class="col-span-7">
                    <!-- Kolom pertama -->
                    <h1 class="text-center text-3xl text-neutral-900 font-extrabold">Why Choose Us?</h1>
                    <div class="grid grid-cols-2 gap-10 mt-8 px-10">
                      <div class="card w-80 bg-base-100 shadow-xl">
                        <div class="card-body">
                          <img class="w-10 pointer-events-none select-none" src="../Asset/shine-star-icon.svg" alt="">
                          <h2 class="card-title text-lg">High Quality </h2>
                          <p class="text-xs text-slate-400">We ensure top-notch quality using cutting-edge technology and creative techniques, 
                            guaranteeing every video and animation meets the highest standards.</p>
                        </div>
                      </div>
                      <div class="card w-80 bg-base-100 shadow-xl">
                        <div class="card-body">
                          <img class="w-10 pointer-events-none select-none" src="../Asset/bubble-chat-icon.svg" alt="">
                          <h2 class="card-title text-lg">Ease Of Collaboration</h2>
                          <p class="text-xs text-slate-400">We prioritize clear communication in every project,
                            ensuring direct connection to meet your expectations.</p>
                        </div>
                      </div>
                      <div class="card w-80 bg-base-100 shadow-xl">
                        <div class="card-body">
                          <img class="w-10 pointer-events-none select-none" src="../Asset/pallete-icon.svg" alt="">
                          <h2 class="card-title text-lg">Customization As Needed</h2>
                          <p class="text-xs text-slate-400">We tailor each project to your unique needs, 
                            from visual style to video length, ensuring every specification is met.</p>
                        </div>
                      </div>
                      <div class="card w-80 bg-base-100 shadow-xl h-52">
                        <div class="card-body">
                          <img class="w-10 pointer-events-none select-none" src="../Asset/money-icon.svg" alt="">
                          <h2 class="card-title text-lg">Affordable Price</h2>
                          <p class="text-xs text-slate-400">We believe that quality does not have to come at a high price.
                            With Glimpz, you get premium quality at a competitive price.</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-span-5">
                    <!-- Kolom kedua -->
                    <div class="d-flex justify-end">
                      <img class="pointer-events-none select-none rounded-l-3xl" src="../Asset/image 23.png" alt="">
                    </div>
                </div>
            </div>

            <!-- Service card -->
            <div class="container mx-auto px-20 pt-10 pb-20">
              <h1 class="text-center text-3xl text-neutral-900 font-bold">Our Services</h1>
              <div class="flex justify-center">
                <p class="text-center text-slate-400 font-thin w-1/3 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
              </div>
              <div class="flex justify-center mt-12">
                <div class="grid grid-cols-4 gap-8">
                  <!-- card 1-->
                  <div class="card card-compact w-64 bg-base-100 shadow-xl">
                    <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
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
                  <!-- card 1-->
                  <div class="card card-compact w-64 bg-base-100 shadow-xl">
                    <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
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
                  <!-- card 1-->
                  <div class="card card-compact w-64 bg-base-100 shadow-xl">
                    <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
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
                  <!-- card 1-->
                  <div class="card card-compact w-64 bg-base-100 shadow-xl">
                    <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
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
              <div class="flex justify-end">
                <a class="btn bg-blue-700 hover:bg-blue-700 text-white text-base font-medium border-none rounded-md mt-8 w-32" href="#">
                  Explore <img class="w-5" src="../Asset/arrow-right.svg" alt="">
                </a>
              </div>
              </div>

              <footer class="footer p-10 bg-base-200 text-base-content">
                <aside>
                  <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
                  <p>ACME Industries Ltd.<br>Providing reliable tech since 1992</p>
                </aside> 
                <nav>
                  <h6 class="footer-title">Videos</h6> 
                  <a class="link link-hover">Video Editing</a>
                  <a class="link link-hover">Video Ads</a>
                  <a class="link link-hover">Visual Effect</a>
                  <a class="link link-hover">Education</a>
                  <a class="link link-hover">Templates</a>
                  <a class="link link-hover">Short Movie</a>
                  <a class="link link-hover">Social Media</a>
                </nav> 
                <nav>
                  <h6 class="footer-title">Animation</h6> 
                  <a class="link link-hover">2D Animation</a>
                  <a class="link link-hover">3D Animation</a>
                  <a class="link link-hover">Logo Animation</a>
                  <a class="link link-hover">Film Series</a>
                  <a class="link link-hover">Character Animation</a>
                  <a class="link link-hover">Web Animation</a>
                  <a class="link link-hover">Rigging</a>
                  <a class="link link-hover">NFT Animation</a>
                </nav> 
                <nav>
                  <h6 class="footer-title">Company</h6> 
                  <a class="link link-hover">About Us</a>
                  <a class="link link-hover">Contact</a>
                </nav>
              </footer>
            </body>
            </html>