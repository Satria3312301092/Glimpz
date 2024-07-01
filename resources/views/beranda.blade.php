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
      <div class="mt-5 ml-16 text-1xl">Discover a marketplace filled with talented videographers ready to produce professional content for any occasion, from corporate presentations to social media campaigns.</div>
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
            <a href="{{ route('listservice.index', ['category' => 'Video Editing']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video Editing</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Find talented video editors who turn raw footage into polished videos that captivate your audience and clearly convey your message.</p>

            </div>
            <figure class="p-4"><img src="category/card1.png" alt="card1.png" /></figure>
            </div>
            </a>
            <!-- Card 2 -->
            <a href="{{ route('listservice.index', ['category' => 'Video Ads']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Video ADS</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Engage your audience with eye-catching video ads created by experts who know how to make compelling content that boosts sales and increases brand visibility.</p>
            </div>
            <figure class="p-4"><img src="category/card2.png" alt="card2.png " /></figure>
            </div>
            </a>
            <!-- Card 3 -->
            <a href="{{ route('listservice.index', ['category' => 'Visual Effect']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Visual Effect</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Explore creativity with visual effects artists who enhance videos with stunning visuals, turning ordinary footage into extraordinary experiences.</p>
            </div>
            <figure class="p-4"><img src="category/card3.png" alt="card3.png" /></figure>
            </div>
            </a>
            <!-- Card 1 -->
            <a href="{{ route('listservice.index', ['category' => 'Education']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Education</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Discover specialists who create engaging educational videos that simplify complex topics, making learning enjoyable and accessible for all ages.</p>
            </div>
            <figure class="p-4"><img src="background/image_41_1.png" alt="card4.png" /></figure>
          </div>
            </a>
        </div>
    </div>
  <div class="font-bold mt-40 ml-16 text-4xl">Animation</div>
  <div class="grid grid-cols-6 gap-0">
    <div class="col-span-5">
      <div class="mt-5 ml-16 text-1xl">Immerse yourself in a world of creativity with animators skilled in crafting immersive 2D animations that breathe life into your ideas.</div>
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
            <a href="{{ route('listservice.index', ['category' => '2D Animation']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">2D Animation</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Explore the charm of 2D animation with talented artists who bring your ideas to life with vibrant visuals and engaging storytelling.</p>

            </div>
            <figure class="p-4"><img src="background/image_41.png" alt="card1.png" /></figure>
            </div>
            </a>
            <!-- Card 2 -->
            <a href="{{ route('listservice.index', ['category' => '3D Animation']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">3D Animation</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Step into the realm of 3D animation where skilled animators create immersive worlds and lifelike characters that captivate audiences with their depth and realism.</p>
            </div>
            <figure class="p-4"><img src="background/image_42_1.png" alt="card2.png " /></figure>
            </div>
            </a>
            <!-- Card 3 -->
            <a href="{{ route('listservice.index', ['category' => 'Logo Animation']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Logo Animation</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Enhance your brand identity with captivating logo animations that leave a lasting impression, showcasing your brand’s personality and professionalism.</p>
            </div>
            <figure class="p-4"><img src="background/image_45.png" alt="card3.png" /></figure>
            </div>
            </a>
            <!-- Card 1 -->
            <a href="{{ route('listservice.index', ['category' => 'Character Animation']) }}">
            <div class="card w-96 bg-base-100 shadow-xl mt-10 border border-black">
            <div class="card-body">
            <h2 class="card-title">Character Animation</h2>
            <hr class="border-black mb-4">
            <p class="truncate whitespace-normal max-w-xs">Discover experts in character animation who breathe personality and emotion into animated characters, creating narratives that resonate with your audience.</p>
            </div>
            <figure class="p-4"><img src="category/card4.png" alt="card4.png" /></figure>
          </div>
            </a>
        </div>
    </div>
    <div class="font-bold ml-16 text-5xl mt-40">Service</div>
    <a class="flex justify-end text-blue-600 mr-16 text-xl" href="#">View All</a>
  <!-- Service card -->
              <div class="flex justify-center mt-5">
                <div class="grid grid-cols-4 gap-8">
                  <!-- card 1-->
                  @if(isset($services) && isset($types) && isset($details))
    @foreach ($services as $service)
        @foreach ($types as $type)
            @if ($type->Type_Name == 'Basic' && $type->Id_Service == $service->Id_Service)
                @foreach ($details as $detail)
                    @if ($detail->Id_Type == $type->Id_Type)
                        <a href="{{ route('service.show', $service->Id_Service) }}" class="block">
                            <div class="card card-compact w-64 bg-base-100 shadow-xl">
                                <figure><img src="{{ Storage::url($service->Thumbnail) }}" alt="" class="h-40"/></figure>
                                <div class="card-body">
                                    <p>{{ $service->Category }}</p>
                                    <h2 class="text-base">{{ $service->Title }}</h2>
                                    <div class="card-actions justify-start">
                                        <div class="rating rating-sm">
                                            <input type="radio" name="rating-9" class="mask mask-star-2" />
                                            <span class="ml-2 text-sm">{{ number_format($service->average_rating, 1) }}/5 ({{ $service->rating_count }} ratings)</span>
                                        </div>
                                    </div>
                                    <p class="text-lg font-bold">Rp.{{ $detail->Price }}</p>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
    @endforeach
@endif
                  <!-- card 1-->
                 
              </div>
              </div>
              </div>

@endsection