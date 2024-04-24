<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
    <title>Home</title>
</head>

<body>
  <!-- navbar -->

@include('components.navbarilang')

<!-- carousel -->
<div class="carousel w-full">
<div id="slide1" class="carousel-item relative w-full h-screen">
  <img src="images/gambar1.png" class="w-full " />
  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 z-10">
    <a href="#slide4" class="btn btn-circle">❮</a> 
    <a href="#slide2" class="btn btn-circle">❯</a>
  </div>
  <div class="absolute inset-0 flex justify-center items-center ">
    <p class="font-semibold leading-normal mx-auto text-center">
      <a class="text-white text-8xl font-bold">Vibrant </a>
      <a class="bg-white text-blue-700 rounded-lg px-3 text-8xl font-bold"><u>Visions.</u></a><br><br><br>
      <a class="text-white text-2xl font-normal">Every pixel pulsates with life, every scene a</a><br>
      <a class="text-white text-2xl font-normal">masterpiece in motion. GLIMPZ, where imagination</a><br>
      <a class="text-white text-2xl font-normal">meets animation</a>
    </p>
  </div>
</div> 

<div id="slide2" class="carousel-item relative w-full h-screen">
  <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" class="w-full " />
  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
    <a href="#slide1" class="btn btn-circle">❮</a> 
    <a href="#slide3" class="btn btn-circle">❯</a>
  </div>
</div>
  <div id="slide3" class="carousel-item relative w-full h-screen">
    <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full " />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="carousel-item relative w-full h-screen">
    <img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full " />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>

<!-- Categories content -->
<div class="container mx-auto px-6">
  <h1 class="text-center mt-24 mb-20 font-bold text-5xl">Explore by Categories</h1>
  <div class="font-bold ml-16 text-4xl">Videos</div>
  <div class="grid grid-cols-6 gap-0">
    <div class="col-span-5">
      <div class="mt-5 ml-16 text-1xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempore delectus odit expedita culpa fugit consequuntur<br> ipsam vitae impedit deleniti, accusantium nam? Officiis porro magni blanditiis repellat, perspiciatis obcaecati sequi.</div>
    </div>
    <div class="col-span-1">
    <div class="flex justify-end items-end mr-20 h-full">
      <button id="prevButton1" class="btn btn-circle"><img src="images/kiri.svg" alt=""></button>
      <button id="nextButton1" class="btn btn-circle"><img src="images/kanan.svg" alt=""></button>
    </div>
    </div>
  </div>
      <!-- Videos -->
      <div class="flex justify-center items-center px-16">
        <div id="scrollContainer1" class="scrollContainer flex gap-7 overflow-x-hidden whitespace-nowrap scroll-snap-x w-full">
            <!-- Card 1 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video Editing</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card1.png" alt="card1.png" /></figure>
            </div>
            <!-- Card 2 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video ADS</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card2.png" alt="card2.png " /></figure>
            </div>
            <!-- Card 3 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Visual Effect</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card3.png" alt="card3.png" /></figure>
            </div>
            <!-- Card 1 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video 2</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card4.png" alt="card4.png" /></figure>
          </div>
        </div>
    </div>
  <div class="font-bold mt-40 ml-16 text-4xl">Animation</div>
  <div class="grid grid-cols-6 gap-0">
    <div class="col-span-5">
      <div class="mt-5 ml-16 text-1xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet tempore delectus odit expedita culpa fugit consequuntur<br> ipsam vitae impedit deleniti, accusantium nam? Officiis porro magni blanditiis repellat, perspiciatis obcaecati sequi.</div>
    </div>
    <div class="col-span-1">
    <div class="flex justify-end items-end mr-20 h-full">
      <button id="prevButton2" class="btn btn-circle"><img src="images/kiri.svg" alt=""></button>
      <button id="nextButton2" class="btn btn-circle"><img src="images/kanan.svg" alt=""></button>
    </div>
    </div>
  </div>
      <!-- Animation -->
      <div class="flex justify-center items-center px-16">
        <div id="scrollContainer2" class="scrollContainer flex gap-7 overflow-x-hidden whitespace-nowrap scroll-snap-x w-full">
            <!-- Card 1 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video Editing</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card1.png" alt="card1.png" /></figure>
            </div>
            <!-- Card 2 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video ADS</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card2.png" alt="card2.png " /></figure>
            </div>
            <!-- Card 3 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Visual Effect</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card3.png" alt="card3.png" /></figure>
            </div>
            <!-- Card 1 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video 2</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p> 
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="images/card4.png" alt="card4.png" /></figure>
          </div>
        </div>
    </div>
    <div class="font-bold ml-16 text-5xl mt-40">Service</div>
    <a class="flex justify-end text-blue-600 mr-16 text-xl" href="#">View All</a>
  <!-- Service card -->
              <div class="flex justify-center mt-5">
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
              </div>

              @include('components.foter')
     

              <!-- <footer class="footer p-10 mt-40 bg-base-200 text-base-content">
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
              </footer> -->


   
</body>
</html>