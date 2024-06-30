@extends('layout.halaman_beranda')

@section('title', 'Glimpz | Landing Page')
@section('content')

<!-- carousel -->
@include('components.carousel')

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
            <figure class="p-4"><img src="category/card1.png" alt="card1.png" /></figure>
            </div>
            <!-- Card 2 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video ADS</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="category/card2.png" alt="card2.png " /></figure>
            </div>
            <!-- Card 3 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Visual Effect</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="category/card3.png" alt="card3.png" /></figure>
            </div>
            <!-- Card 1 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video 2</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="category/card4.png" alt="card4.png" /></figure>
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
            <figure class="p-4"><img src="category/card1.png" alt="card1.png" /></figure>
            </div>
            <!-- Card 2 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video ADS</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="category/card2.png" alt="card2.png " /></figure>
            </div>
            <!-- Card 3 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Visual Effect</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="category/card3.png" alt="card3.png" /></figure>
            </div>
            <!-- Card 1 -->
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video 2</h2>
            <hr class="border-black mb-4">
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <p>detektif</p>
            </div>
            <figure class="p-4"><img src="category/card4.png" alt="card4.png" /></figure>
          </div>
        </div>
    </div>
    <div class="font-bold ml-16 text-5xl mt-40">Service</div>
    <a class="flex justify-end text-blue-600 mr-16 text-xl" href="{{route('listservice.index')}}">View All</a>
  <!-- Service card -->
              <div class="flex justify-center mt-5">
                <div class="grid grid-cols-4 gap-8">
                  <!-- card 1-->
                @foreach ($services as $service)
            @foreach ($types as $type)
            @if ($type->Type_Name == 'Basic' && $type->Id_Service == $service->Id_Service)
            @foreach ($details as $detail)
            @if ($detail->Id_Type == $type->Id_Type)
            <a href="{{  route ('service.show', $service->Id_Service) }}" class="block">
            <div class="card card-compact w-64 bg-base-100 shadow-xl ">
              <figure><img src="{{ Storage::url($service->Thumbnail) }}" alt="" class="h-40"/></figure>
              <div class="card-body">
                <p>{{ $service-> Category }}</p>
                <h2 class="text-base">{{ $service-> Title }}</h2>
                <div class="card-actions justify-start">
                  <div class="rating rating-sm">
                    <input type="radio" name="rating-9" class="mask mask-star-2" />
                    <span class="ml-2 text-sm">{{ number_format($service->average_rating, 1) }}/5 ({{ $service->rating_count }} ratings)</span>
                
                    <!-- <span>128</span> -->
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
                  <!-- card 1-->
                 
                  <!-- card 1-->
                 
                  <!-- card 1-->
                 
                  <!-- card 1-->
                 
                  <!-- card 1-->
                
                  <!-- card 1-->
                 
                  <!-- card 1-->
                 
              </div>
              </div>
              </div>

@endsection