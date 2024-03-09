<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="bg-cover bg-center h-screen py-10" style="background-image: url(images/myimage2.png);">
        <div class="container mx-auto">
            <div class="flex w-4/5 mx-auto bg-white shadow-xl shadow-gray-600 rounded-xl">
                <div class="w-1/2 px-24 py-16">
                    <h1 class="text-xl font-bold text-center text-black mb-10">Welcome Back</h1>
                    <label class="input input-bordered flex items-center gap-2 mb-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215
                         0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
                    <input type="text" class="grow" placeholder="Username" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0
                         1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 
                         1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
                    <input type="password" class="grow" value="password" />
                    </label>
                    <div class="flex flex-col gap-4"> <!-- Tambahkan div ini -->
                    <a class="link text-sm link-hover link-primary mb-5">Forgot Password?</a>
                    <button class="btn btn-neutral w-full mb-10">Login</button>
                </div>
                <div class="text-center">
                <label for="">Dont have an account?</label>
                    <a class="link link-hover link-primary mb-5">Sign in</a>
                </div>
                    <div class="grid-cols-2">

                    </div>
                </div>
                <!-- ini adalah kode yang saya maksud -->
                <div class="w-1/2 bg-center scale-95 bg-[length:1000px] bg-no-repeat rounded-xl" style="background-image: url(images/myimage2.png);">

                </div>
            </div>
        </div>
    </div>
</body>
</html>