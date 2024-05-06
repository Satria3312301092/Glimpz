<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Jamal-CSS/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        .form-container {
            flex-direction: row-reverse;
            justify-content: center;
        }
    </style>
</head>
<body>

    <section class="bg-white-100 min-h-screen flex items-center
    justify-center ">
            <!-- Login container -->
            <div class="bg-white-50 flex rounded-3xl
            shadow-lg max-w-4xl border form-container ">
                <!-- form -->
                <div class="w-1/2 px-16 flex flex-col">
                    <h2 class="text-center font-bold text-3xl p-5 text-blue-600 ">
                    <img class="mx-auto w-20 h-20 mb-5" src="images/logo.png" alt="">Sign Up</h2>
                    <form class="flex flex-col gap-4" action="">
                    <span class="label-text">Password</span>
                        <div class="relative">
                        <input class="p-5 shadow-lg w-full rounded-lg" type="password" name="password" placeholder=" Password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                        </svg>
                        </div>
                        <span class="label-text">Confirm Password</span>
                        <div class="relative">
                        <input class="p-5 shadow-lg w-full rounded-lg" type="password" name="repassword" placeholder=" Password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                        </svg>
                        </div>
                        <a href="{{ url('pembayaran') }}" class="bg-blue-600 min-h-16 text-white py-5 mt-5 rounded-lg block text-center text-xl">Sign Up</a>
                        <div class="text-sm flex justify-center">
                        <p class="text-center">Already have account?</p>
                        <a href="{{ url('login') }}" class="text-blue-600 font-bold underline">Login</a>
                        </div>
                    </form>
                </div>
                <!-- image -->
                <div class="sm:block hidden w-1/2">
                    <img class="rounded-l-2xl border" src="images/login.png" alt="">
                </div>
            </div>
    </section>
</body>
</html>