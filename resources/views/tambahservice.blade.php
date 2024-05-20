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
  <div class="navbar shadow-lg bg-base-100 rounded-box">
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

  <div class="container mx-auto flex justify-start px-12 py-10">
    <div class="bg-white w-full h-full px-12 pt-8 border-2 shadow-2xl rounded-xl">
    <!-- bagian atas -->
    <h1 class="font-bold text-3xl mb-6">Add Services</h1>
      <div class="grid grid-cols-2">
        <div class="col-span-1">
          <form action="code" method="POST">
            <div class="grid gap-y-1.5">
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1">Title</a>
                <input name="title" type="text" placeholder="Title" class="input input-bordered rounded text-sm shadow-lg w-96" />
              </div>
            <div>
              <a class="block text-gray-700 text-sm font-semibold mb-1">Description</a>
              <textarea name="description" placeholder="Description" class="textarea textarea-bordered rounded textarea-md w-96 h-24 text-sm shadow-lg" ></textarea>
            </div>
            <div>
              <a for="title" class="block text-gray-700 text-sm font-semibold mb-1">Category</a>
              <select name="category" class="select select-bordered w-96 text-black rounded text-sm shadow-lg border-[1px]">
              <option class="text-zinc-500 font-bold" disabled selected>Category</option>
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
            </div>
            
            <div>
              <a class="block text-gray-700 text-sm font-semibold mb-1">Image</a>
              <input name="image" id="fileInput" type="file" class="mt-1 custom-file-input text-sm w-96">
            </div>
            </div> 
        </div>
    </form>

        <div class="col-span-1">
          <div role="tablist" class="tabs tabs-lifted">
            <!-- tab 1 -->
            <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Basic" checked />
            <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
          
            <div class="grid gap-y-1.5">
            <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Day</a>
                <input type="text" placeholder="Day" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Revisi</a>
                <input type="text" placeholder="Revisi" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Price</a>
                <input type="text" placeholder="Price" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>
              <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Description</a>
              <textarea name="description" placeholder="Description" class="textarea textarea-bordered textarea-md w-96 h-24 text-sm shadow-lg" ></textarea>
            </div>
            </div>
        </div>


        <!-- tab2 -->
        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Standard" />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">

        <div class="grid gap-y-1.5">
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Day</a>
                <input type="text" placeholder="Day" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Revisi</a>
                <input type="text" placeholder="Revisi" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Price</a>
                <input type="text" placeholder="Price" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>
              <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Description</a>
              <textarea name="description" placeholder="Description" class="textarea textarea-bordered textarea-md w-96 h-24 text-sm shadow-lg" ></textarea>
            </div>
            </div>
        </div>
      
        <!-- tab 3 -->

        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Premium" />
        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
        <div class="grid gap-y-1.5">
            <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Day</a>
                <input type="text" placeholder="Day" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Revisi</a>
                <input type="text" placeholder="Revisi" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>     
                <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Price</a>
                <input type="text" placeholder="Price" class="input input-bordered text-sm shadow-lg w-96" />
              </div>
              <div>
              <a class="block text-gray-700 text-sm font-semibold mb-1 rounded">Description</a>
              <textarea name="description" placeholder="Description" class="textarea textarea-bordered textarea-md w-96 h-24 text-sm shadow-lg" ></textarea>
            </div>
            </div>
        </div>

      </div>
        </div>
      </div>

      <div class="flex justify-center py-14">
        <button name="buttontambah" class="btn btn-blue-300 hover:bg-blue-700 btn-outline text-blue-700 hover:text-white border-blue-700 hover:border-none hover:shadow-md hover:shadow-gray-300 font-medium text-base px-20">Add Service</button>
      </div>
  </div>
  </div>


</body>
</html>