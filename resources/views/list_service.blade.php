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
<body class="font-sans">
  <div class="navbar shadow-lg bg-base-100 rounded-box">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 w-52">
          <li><a>Item 1</a></li>
          <li>
            <a>Home</a>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </li>
          <li><a>Item 3</a></li>
        </ul>
      </div>
      <a class="btn btn-ghost text-xl">Glimpz</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-2 text-black font-Poppins" id="nav_menu">
        <li><a>Home</a></li>
        <li><a>Services</a></li>
        <li><a>About</a></li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <div class="navbar-end">
    <button id="" class="mr-5 bg-transparent" id="btn_search1"><img src="images/search2.svg" alt=""></button>
    <button id="" class="mr-5 bg-transparent hidden" id="btn_search2"><img src="images/search2.svg" alt=""></button>
    <!-- <button id="" class="btn btn-circle mr-6"  id="btn_profile"><img src="images/Profileuser.svg" alt=""></button> -->
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full shadow-lg mr-3">
          <img alt="" src="images/Profileuser.svg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a href="{{ route('profilebuyer.index') }}"><img src="images/Profile.svg" alt="">Profile</a>
        </li>
        <form action="{{ route ('logout') }}" method="POST">
          @csrf
          <li>
            <button type="submit"><img src="images/logout.svg" alt="">Logout</button>
          </li>
        </form>
      </ul>
    </div>
  </div>
    </div>
  </div>
      <!-- navbar end -->

      <div class="container mx-auto pt-16 pb-20 px-20">
        <h2 class="text-start items-center font-medium text-6xl">3D Animation</h2>
        <div class="grid grid-cols-2 mt-3">
            <div class="col-span-1">
                <p class="text-left text-2xl">Explore the boundaries of art and technology with Glimpz artists</p>
            </div>
            <div class="col-span-1 flex justify-end">
                <button id="prevButton3" class="prevButton3 btn btn-circle">❮</button>
                <button id="nextButton3" class="nextButton3 btn btn-circle ml-2">❯</button>
            </div>
        </div>
        <div id="scrollContainer3" class="scrollContainer flex gap-4 py-4 overflow-x-hidden whitespace-nowrap scroll-snap-x w-full">
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          All Services
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Video Editing
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Video Ads
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Visual Effect
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Education
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Templates
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Short Movie
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Social Media
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          2D Animation
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          3D Animation
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Logo Animation
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Film Series
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24 truncate">
          Character Animation
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Web Animation
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          Rigging
         </button>
         <button class="btn btn-circle btn-outline border-blue-700 hover:border-blue-700 hover:bg-blue-700 text-black text-xl font-normal shadow-lg mt-8 px-24">
          NFT Animation
         </button>
      </div>

        <div class="flex justify-center mt-12">
          <div class="grid grid-cols-4 gap-8">
            <!-- card 1-->
            @foreach ($services as $service)
            @foreach ($types as $type)
            @if ($type->Type_Name == 'Basic' && $type->Id_Service == $service->Id_Service)
            @foreach ($details as $detail)
            @if ($detail->Id_Type == $type->Id_Type)
            <a href="{{  route ('service', ['id' => $service->Id_Service]) }}" class="block">
            <div class="card card-compact w-64 bg-base-100 shadow-xl ">
              <figure><img src="{{ Storage::url($service->Thumbnail) }}" alt="" /></figure>
              <div class="card-body">
                <p>{{ $service-> Category }}</p>
                <h2 class="text-base">{{ $service-> Title }}</h2>
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
                <p class="text-lg font-bold">Rp.{{ $detail->Price }}</p>
              </div>
            </div>
            </a>
            <!-- card 1-->
            @endif
            @endforeach
            @endif
            @endforeach
            @endforeach
        </div>
        </div>
        <div class="join flex justify-center mt-20 mb-20">
          <button class="join-item btn btn-md btn-active">1</button>
          <button class="join-item btn btn-md">2</button>
          <button class="join-item btn btn-md">3</button>
          <button class="join-item btn btn-md">4</button>
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