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
    <style>
      /* Custom styles */
      .custom-file-input::-webkit-file-upload-button {
          color: #fff;
          background-color: #3b82f6;
          border-color: transparent;
          padding: 0.5rem 1rem;
          cursor: pointer;
      }

      .custom-file-input::-webkit-file-upload-button:hover {
          background-color: #2563eb;
      }

      .custom-file-input {
          width: calc(100% - 8rem); /* Menyesuaikan lebar input */
          border-radius: 0.375rem;
          border: 2px solid #3b82f6;
          color: #3b82f6;
          transition: border-color 0.3s ease;
          outline: none;
      }

      .custom-file-input:focus {
          border-color: #2563eb;
      }
  </style>
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
      <a class="btn btn-ghost text-xl">Glimpz</a>
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
    <!-- <button id="" class="btn btn-circle mr-6"  id="btn_profile"><img src="images/Profileuser.svg" alt=""></button> -->
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full shadow-lg">
          <img src="{{ asset('/icon/Profileuser.svg') }}" alt="">
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="{{ route('profileseller.index') }}">
          <img src="{{ asset('/icon/Profile.svg') }}" alt="">
          Profile</a></li>
        <form action="{{ route ('logout') }}" method="POST">
          @csrf
          <li><button type="submit">
            <img src="{{ asset('/icon/logout.svg') }}" alt="">
          Logout</button>
        </li>
        </form>
      </ul>
    </div>
  </div>
    </div>
  </div>
  <!-- navbar end -->

  <div class="container mx-auto flex justify-start px-12 py-10">
    <div class="bg-white w-full h-full px-12 pt-8 border-2 shadow-2xl rounded-xl">
    <!-- bagian atas -->
    <h1 class="font-bold text-3xl mb-6">Edit Services</h1>
    <form id="serviceForm" action="{{ route('sellerservice.update', $service->Id_Service) }}" method="POST" enctype="multipart/form-data"> 
      @csrf
      @method('PUT')
      <div class="grid grid-cols-2">
        <div class="col-span-1">

        <label class="form-control w-full max-w-96">
          <div class="label">
            <span class="label-text text-gray-700 font-bold">Title</span>
          </div>
          <input type="text" id="title" name="Title" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{ $service->Title }}" />
        </label>

        <label class="form-control w-full max-w-96">
          <div class="label">
            <span class="label-text text-gray-700 font-bold">Description</span>
          </div>
          <textarea id="description" name="Description" class="textarea textarea-bordered text-base shadow-lg hover:shadow-lg focus:shadow-lg h-24">{{ $service->Description }}</textarea>
        </label>

        <label class="form-control w-full max-w-96">
          <div class="label">
            <span class="label-text text-gray-700 font-bold">Category</span>
          </div>
          <select name="Category" class="select select-bordered w-full max-w-96 text-black shadow-lg hover:shadow-lg focus:shadow-lg">
          <option class="text-zinc-500 font-bold" selected>{{ $service->Category }}</option>
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
        </label>

        <label class="form-control w-full max-w-96">
          <div class="label">
            <span class="label-text text-gray-700 font-bold">Image</span>
          </div>
          <input name="Thumbnail" id="fileInput" type="file" class="mt-1 custom-file-input w-96 mb-10">
        </label>
      </div>

      <?php if(!'Thumbnail' == 0) { ?>
            <input name="ThumbnailOld" value="{{ $service->Thumbnail }}" type="text" class="hidden">
        <?php } ?>

        <div class="col-span-1">
          <div role="tablist" class="tabs tabs-lifted">
          @foreach ($types as $type)
            @if ($type->Type_Name == 'Basic' && $type->Id_Service == $service->Id_Service)
              @foreach ($details as $detail)
                @if ($detail->Id_Type == $type->Id_Type)
                  <!-- tab 1 -->
                  <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Basic" checked />
                  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                    <div class="grid gap-y-1.5">

                    <label class="form-control w-full max-w-96">
                      <div class="label">
                        <span class="label-text text-gray-700 font-bold">Day</span>
                      </div>
                      <input type="text" name="Day1" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{$detail->Day}}" />
                    </label>

                    <label class="form-control w-full max-w-96">
                      <div class="label">
                        <span class="label-text text-gray-700 font-bold">Revision</span>
                      </div>
                      <input type="text" name="Revision1" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{$detail->Revision}}" />
                    </label>

                    <label class="form-control w-full max-w-96">
                      <div class="label">
                        <span class="label-text text-gray-700 font-bold">Price</span>
                      </div>
                      <input type="text" name="Price1" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{$detail->Price}}" />
                    </label>

                    <label class="form-control w-full max-w-96">
                      <div class="label">
                        <span class="label-text text-gray-700 font-bold">Description</span>
                      </div>
                      <textarea name="Description1" class="textarea textarea-bordered text-base shadow-lg hover:shadow-lg focus:shadow-lg h-24">{{$detail->Descriptions}}</textarea>
                    </label>

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
                  <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Standard" />
                  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                    <div class="grid gap-y-1.5">

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Day</span>
                        </div>
                        <input type="text" name="Day2" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{ $detail->Day }}" />
                      </label>

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Revision</span>
                        </div>
                        <input type="text" name="Revision2" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{ $detail->Revision }}" />
                      </label>

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Price</span>
                        </div>
                        <input type="text" name="Price2" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{ $detail->Price }}" />
                      </label>

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Description</span>
                        </div>
                        <textarea name="Description2" class="textarea textarea-bordered text-base shadow-lg hover:shadow-lg focus:shadow-lg h-24">{{ $detail->Descriptions }}</textarea>
                      </label>

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
                  <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Premium" />
                  <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                    <div class="grid gap-y-1.5">

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Day</span>
                        </div>
                        <input type="text" name="Day3" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{ $detail->Day }}" />
                      </label>

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Revision</span>
                        </div>
                        <input type="text" name="Revision3" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{ $detail->Revision }}" />
                      </label>

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Price</span>
                        </div>
                        <input type="text" name="Price3" class="input input-bordered shadow-lg hover:shadow-lg focus:shadow-lg" value="{{ $detail->Price }}" />
                      </label>

                      <label class="form-control w-full max-w-96">
                        <div class="label">
                          <span class="label-text text-gray-700 font-bold">Description</span>
                        </div>
                        <textarea name="Description3" class="textarea textarea-bordered text-base shadow-lg hover:shadow-lg focus:shadow-lg h-24">{{ $detail->Descriptions }}</textarea>
                      </label>  

                    </div>
                  </div>
                @endif
              @endforeach
            @endif
          @endforeach
      </div>
        </div>
      </div>

      <div class="flex justify-center py-14">
        <button class="btn btn-blue-300 hover:bg-blue-700 btn-outline text-blue-700 hover:text-white border-blue-700 hover:border-none font-medium text-base px-20">Edit Service</button>
      </div>
    </form>
  </div>
  </div>

  <!-- modal success -->
<dialog id="successModal" class="modal">
  <div class="modal-box">
    <h3 class="text-lg font-bold">Success!</h3>
    <p class="py-4">Your service has been Updated successfully.</p>
  </div>
</dialog>
<!-- modal success -->

<!-- modal validation error -->
<dialog id="validationModal" class="modal">
  <div class="modal-box">
  <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="text-lg font-bold">Validation Error</h3>
    <p class="py-4">Please fill in all the required fields.<br>
    <a>Data can't be empty!</a>
    </p>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>
<!-- modal validation error -->

<dialog id="fileSizeModal" class="modal">
  <div class="modal-box">
    <h3 class="text-lg font-bold">File Size Error</h3>
    <p class="py-4">Image size must not exceed 240 KB.</p>
  </div>
</dialog>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('serviceForm');

    form.addEventListener('submit', function(event) {
      // Menghentikan form submission default
      event.preventDefault();

      // validasi semua input kecuali tipe file
      let inputs = form.querySelectorAll('input, textarea, select'); // target semua elemen input, textarea, dan select
      let isValid = true;
      let fileSizeValid = true;

      inputs.forEach(function(input) {
        if (input.type !== 'submit' && input.type !== 'file' && input.value.trim() === '') {
          isValid = false;
        }
        // Validasi ukuran file
        if (input.type === 'file') {
          if (input.files.length > 0 && input.files[0].size > 10 * 1024 * 1024) { // 10 MB in bytes
            fileSizeValid = false;
          }
        }
      });

      if (!isValid) {
        showModalValidation();
        return;
      }

      if (!fileSizeValid) {
        showModalFileSize();
        return;
      }

      showModalSuccess();

      setTimeout(function() {
        form.submit();
      }, 1000); // Mengatur jeda 1 detik (1000 milidetik)
    });

    // Fungsi untuk menampilkan modal sukses
    function showModalSuccess() {
      document.getElementById('successModal').showModal();
    }

    // Fungsi untuk menampilkan modal validasi
    function showModalValidation() {
      document.getElementById('validationModal').showModal();
    }

    // Fungsi untuk menampilkan modal ukuran file
    function showModalFileSize() {
      document.getElementById('fileSizeModal').showModal();
    }
  });
</script>
</body>
</html>