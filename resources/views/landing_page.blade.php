  @extends('layout.landing_page')

@section('title', 'Glimpz | Landing Page')
@section('content')


<!-- Landing page content -->
<div class="bg-cover bg-no-repeat w-full h-[120vh] pt-44 px-24 -z-50" style="background-image: url(images/gambar1.png)">
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
                          <img class="w-10 pointer-events-none select-none" src="images/image23.png" alt="">
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
                      <img class="pointer-events-none select-none rounded-l-3xl" src="images/image23.png" alt="">
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
@endsection