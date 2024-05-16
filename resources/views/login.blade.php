<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script.js"></script>
    <title>Sign Up</title>
    <style>
      #cover-login{
        background-image: url('public/asset/Login.png');
      }
    </style>
</head>
<body class="font-poppins bg-[#F8F8F8]">
    <div class="container mx-auto flex justify-center items-center h-screen">
      <div class="bg-white w-2/3 rounded-2xl shadow-xl shadow-neutral-500">
        <div class="grid grid-cols-2">
          <div class="bg-cover rounded-l-2xl bg-[url('../public/asset/Login.png')]" id="cover-login"></div>
          <!-- form input -->
          <div class="flex flex-col items-center w-full h-[528px] py-12 px-20">
            <div class="flex justify-center">
              <img class="w-10 h-10 mb-2" src="../Asset/logo.png" alt="">
            </div>
              <h1 class="text-2xl text-center text-blue-600 font-bold mb-3">Log In</h1>
            <label class="form-control w-full max-w-xs">
              <div class="label">
                <span class="label-text text-xs"></span>
              </div>
              <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                <svg class="w-4 h-4 text-black" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
                  <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
                  </svg>
                  <input type="text" class="grow" placeholder="Username" />
              </label>
            </label>
            <label class="form-control w-full max-w-xs mb-8">
              <div class="label">
                <span class="label-text text-xs"></span>
              </div>
              <label class="input input-bordered h-10 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                <svg class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="4" y="9" width="16" height="12" rx="4" stroke="currentColor" stroke-width="2"/>
                  <path d="M11.4662 15.2884L11.4662 13.3773" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M16 9V7C16 4.79086 14.2091 3 12 3V3C9.79086 3 8 4.79086 8 7L8 9" stroke="black" stroke-width="2"/>
                  </svg>                  
                <input type="password" class="grow" value="password" />
              </label>
            </label>
            <div class="form-control w-full max-w-xs mb-12">
              <button class="btn btn-sm h-10 bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none shadow-lg hover:shadow-lg rounded-md">
                Log In
              </button>
            </div>
            <p class="text-xs">
              <a class="text-slate-400">Dont have an account yet?</a>
              <a href="#" class="text-blue-800 hover:underline">Sign Up</a>
            </p>
          </div>
          <!-- form input -->
        </div>
      </div>
    </div>
</body>
</html>