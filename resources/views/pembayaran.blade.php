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
                    <img class="mx-auto w-20 h-20 mb-5" src="Jamal-Image/logo.png" alt="">Log in</h2>
                    <form class="flex flex-col gap-3" action="{{ url('/login') }}" method="POST">
                        @csrf
                        <span class="font-bold label-text text-sm ">Username</span>
                        <div class="relative">
                        <input type="text" id="username" name="username" value="username" class="form-control p-5 shadow-xl w-full md:text-justify rounded-lg bg-gray-100 border "required>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                        </div>
                        <span class="font-bold label-text">Password</span>
                        <div class="relative">
                        <input type="password" id="password" name="password" value="password" class="p-5 shadow-lg w-full rounded-lg bg-gray-100 border" required>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                        </svg>
                        </div>
                        <button><p class="text-blue-600 text-left mt-5 text-xs py-1">Forgor your password?</p></button>
                        <button type="submit" class="bg-blue-600 min-h-16 text-white py-2">Login</button>
                        <div class="text-sm flex justify-center">
                        <p class="text-center">Don't have an account?</p>
                        <a href="{{ url('daftar') }}" class="text-blue-600 font-bold underline">Sign up</a>
                        </div>
                    </form>
                <!-- Modal -->
                <div x-data="{ showModal: @json(session('login_failed', false)) }" x-show="showModal" class="fixed inset-0 flex items-center justify-center z-50">
                    <div class="bg-black bg-opacity-50 absolute inset-0" @click="showModal = false"></div>
                    <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Login Failed</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Your login attempt was unsuccessful. Please try again.</p>
                            </div>
                            <div class="mt-5 sm:mt-6">
                                <button @click="showModal = false" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-indigo-600 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alpine.js for modal functionality -->
                <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
                </div>
                <!-- image -->
                <div class="sm:block hidden w-1/2">
                    <img class="" src="Jamal-Image/login.png" alt="">
                </div>
            </div>
    </section>
</body>
</html>
