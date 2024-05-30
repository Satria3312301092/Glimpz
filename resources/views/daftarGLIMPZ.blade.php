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
            <div class="bg-white-50 flex rounded-l-full
            shadow-lg max-w-7xl border form-container ">
                <!-- form -->
                <div class="w-1/2 px-16 flex flex-col">
                    <h2 class="text-center font-bold text-3xl p-5 text-blue-600 ">
                    <img class="mx-auto w-20 h-20 mb-5" src="Jamal-Image/logo.png" alt="">Sign up</h2>
                    <form class="flex flex-col bg-center gap-3" action="daftar2" method="POST">
                        <span class="font-bold label-text text-sm ">Username</span>
                        <div class="relative">
                        <input class="p-5 shadow-xl w-full md:text-justify rounded-lg bg-gray-100 border " type="text" name="username" placeholder=" Username">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                        </div>
                        <span class="font-bold label-text text-sm ">Email</span>
                        <div class="relative">
                        <input class="p-5 shadow-xl w-full md:text-justify rounded-lg bg-gray-100 border" type="text" name="email" placeholder=" Email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="gray" class="bi bi-envelope absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg>
                        </div>
                        <span class="font-bold label-text text-sm ">Phone Number</span>
                        <div class="relative">
                        <input class="p-5 shadow-xl w-full md:text-justify rounded-lg bg-gray-100 border" type="number" name="phonenumber" placeholder=" Your Number">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        </div>
                        <span class="font-bold label-text">Date of Birth</span>
                        <div class="relative">
                        <input class="p-5 shadow-lg w-full rounded-lg bg-gray-100 border" type="password" name="password" placeholder=" date of birth">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-date absolute top-1/2 left-1 -translate-y-1/2" viewBox="0 0 16 16">
                        <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                        </svg>
                        </div>
                        <a href="{{ url('daftar2') }}" class="bg-blue-600 min-h-16 text-white py-5 mt-5 rounded-lg block text-center">Continue</a>

                        <div class="text-sm flex justify-center">
                        <p class="text-center">Already have account?</p>
                        <a href="{{ url('daftar2') }}" class="text-blue-600 font-bold underline">Login</a>
                        </div>
                    </form>
                </div>
                <!-- image -->
                <div class="sm:block hidden w-1/2">
                    <img class="rounded-l-3xl border" src="Jamal-Image/login.png" alt="">
                </div>
            </div>
    </section>
</body>
</html>
