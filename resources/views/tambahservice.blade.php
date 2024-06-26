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

      .modalSuccess {
        background-color: #0006;
        animation: modal-pop .2s ease-out;
        animation-duration: 0.2s;
        animation-timing-function: ease-out;
        animation-delay: 0s;
        animation-iteration-count: 1;
        animation-direction: normal;
        animation-fill-mode: none;
        animation-play-state: running;
        animation-name: modal-pop;
        animation-timeline: auto;
        animation-range-start: normal;
        animation-range-end: normal;
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
    <h1 class="font-bold text-3xl mb-6">Add Services</h1>
    <form id="serviceForm" action="{{ route('tambahservice.store') }}" method="POST" enctype="multipart/form-data"> 
      @csrf
      <div class="grid grid-cols-2">
        <div class="col-span-1">
          
        <!-- <a class="block text-gray-700 text-sm font-semibold mb-1">Id Seller</a>
        <input type="text" id="title" name="Id_Seller" class="shadow-lg border rounded py-2 px-3 w-96"> -->

        <a class="block text-gray-700 text-sm font-semibold mb-1">Title</a>
        <input type="text" id="title" name="Title" class="shadow-lg border rounded py-2 px-3 w-96">
        
        <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
        <textarea id="description" name="Description" class="shadow-lg border rounded py-2 px-3 w-96 resize-y h-24"></textarea>

        <a for="title" class="block text-gray-700 text-sm font-semibold mb-1">Category</a>
        <select name="Category" class="select select-bordered w-full max-w-xs text-black shadow-lg border-[1px]">
        <option class="text-zinc-500 font-bold" disabled selected>All Services</option>
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

        <a class="block text-gray-700 text-sm font-semibold mb-1">Image</a>
        <input name="Thumbnail" id="fileInput" type="file" class="mt-1 custom-file-input w-96 mb-10">

        </div>

        <div class="col-span-1">
          <div role="tablist" class="tabs tabs-lifted">
            <!-- tab 1 -->
            <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Basic" checked />
            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
          
            <div class="grid gap-y-1.5">

              <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
              <input type="text"  name="Day1" class="shadow-lg border rounded py-2 px-3 w-96">
              
              <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
              <input type="text"  name="Revision1" class="shadow-lg border rounded py-2 px-3 w-96">
              
              <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
              <input type="text"  name="Price1" class="shadow-lg border rounded py-2 px-3 w-96">
      
              <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
              <textarea  name="Description1" class="shadow-lg border rounded py-2 px-3 w-96 resize-y h-20"></textarea>
            </div>
        </div>


        <!-- tab2 -->
        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Standard" />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">

        <div class="grid gap-y-1.5">
              
              <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
              <input type="text"  name="Day2" class="shadow-lg border rounded py-2 px-3 w-96">
              
              <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
              <input type="text"  name="Revision2" class="shadow-lg border rounded py-2 px-3 w-96">
              
              <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
              <input type="text"  name="Price2" class="shadow-lg border rounded py-2 px-3 w-96">
      
              <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
              <textarea  name="Description2" class="shadow-lg border rounded py-2 px-3 w-96 resize-y h-20"></textarea>
            </div>
        </div>
      
        <!-- tab 3 -->

        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Premium" />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        <div class="grid gap-y-1.5">

              <a class="block text-gray-700 text-sm font-semibold mb-1">Day</a>
              <input type="text"  name="Day3" class="shadow-lg border rounded py-2 px-3 w-96">
              
              <a class="block text-gray-700 text-sm font-semibold mb-1">Revisi</a>
              <input type="text"  name="Revision3" class="shadow-lg border rounded py-2 px-3 w-96">
              
              <a class="block text-gray-700 text-sm font-semibold mb-1">Price</a>
              <input type="text"  name="Price3" class="shadow-lg border rounded py-2 px-3 w-96">
      
              <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
              <textarea  name="Description3" class="shadow-lg border rounded py-2 px-3 w-96 resize-y h-20"></textarea>
            </div>
        </div>

      </div>
    </div>
  </div>
  
  <div class="flex justify-center py-14">
    <button class="btn btn-blue-300 hover:bg-blue-700 btn-outline text-blue-700 hover:text-white border-blue-700 hover:border-none font-medium text-base px-20">Add Service</button>
  </div>
</form>
</div>
  </div>
  

  <dialog id="successModal" class="modalSuccess fixed top-0 left-0 w-full h-full flex items-center justify-center hidden">
    <div class="modal-box">
      <h3 class="font-bold text-lg">Success!</h3>
      <p class="py-4">Your service has been added succesfully.</p>
      <div class="modal-action">
      </div>
    </div>
</dialog>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tangkap form menggunakan id
    const form = document.getElementById('serviceForm');

    // Tambahkan event listener untuk event submit
    form.addEventListener('submit', function(event) {
        // Menghentikan form submission default
        event.preventDefault();

        // Lakukan validasi atau tindakan lain di sini
        // Contoh validasi sederhana
        let title = document.getElementById('title').value.trim();
        if (!title) {
            alert('Title cannot be empty');
            return;
        }

        // Simulasikan penambahan jasa (di sini Anda bisa menambahkan AJAX untuk menyimpan data ke server)
        // Sebagai contoh, kita menampilkan modal
        showModalSuccess();

        // Jeda sebelum mengirim form
        setTimeout(function() {
            // Lanjutkan pengiriman form setelah jeda
            form.submit();
        }, 1500); // Mengatur jeda 1 detik (1000 milidetik)
    });

    // Fungsi untuk menampilkan modal
    function showModalSuccess() {
        const modal = document.getElementById('successModal');
        modal.classList.remove('hidden');
    }

    // Event listener untuk tombol close modal
    const closeModalButton = document.getElementById('closeModal');
    if (closeModalButton) {
        closeModalButton.addEventListener('click', function() {
            const modal = document.getElementById('successModal');
            modal.classList.add('hidden');
        });
    }
});
</script>




@if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif


</body>
</html>