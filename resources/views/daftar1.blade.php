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
      input[type="date"]::-webkit-calendar-picker-indicator {
        display: none;
      }
    </style>
</head>
<body class="font-poppins bg-[#F8F8F8]">
  
    <div class="container mx-auto flex justify-center items-center h-svh">
      <div class="bg-white w-2/3 rounded-2xl shadow-xl shadow-neutral-500">
        <div class="grid grid-cols-2">
          <div class="bg-cover rounded-l-2xl" style="background-image: url(images/Login.png)"></div>
          <!-- form input -->
          <form id="signupForm" action="{{ route('daftar1') }}" method="POST">
          @csrf
          <div class="flex flex-col items-center w-full h-[528px] py-12 relative">
            <!-- Step 1: Personal Data -->
            <div id="step1" class="step">
              <div class="flex justify-center">
                <img class="w-10 h-10 mb-2" src="images/logo.png" alt="">
              </div>
                <h1 class="text-2xl text-center text-blue-600 font-bold mb-3">Sign Up</h1>

                <label class="form-control w-full max-w-xs">
                  <div class="label">
                    <span class="label-text text-xs"></span>
                  </div>
                  <label class="input input-bordered w-60 h-9 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                    <svg class="w-4 h-4 text-black" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
                      <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
                      </svg>
                    <input type="text" name="Fullname" class="grow" placeholder="Fullname" />
                  </label>
                </label>

                <label class="form-control w-full max-w-xs">
                  <div class="label">
                    <span class="label-text text-xs"></span>
                  </div>
                  <label class="input input-bordered w-60 h-9 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                    <svg class="w-4 h-4 text-black" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.22222 4.22222L10.6871 9.85944L10.6896 9.8615C11.5185 10.4693 11.9332 10.7735 12.3874 10.8909C12.7888 10.9948 13.2108 10.9948 13.6123 10.8909C14.0669 10.7733 14.4828 10.4684 15.3132 9.85944C15.3132 9.85944 20.1012 6.18504 22.7778 4.22222M2 16.2002V6.91135C2 5.54233 2 4.85731 2.26643 4.33442C2.50079 3.87447 2.87447 3.50079 3.33442 3.26643C3.85731 3 4.54233 3 5.91135 3H20.0891C21.4581 3 22.1417 3 22.6646 3.26643C23.1245 3.50079 23.4995 3.87447 23.7338 4.33442C24 4.8568 24 5.54099 24 6.90733V16.2044C24 17.5707 24 18.2539 23.7338 18.7763C23.4995 19.2363 23.1245 19.6106 22.6646 19.8449C22.1422 20.1111 21.459 20.1111 20.0927 20.1111H5.90733C4.54099 20.1111 3.8568 20.1111 3.33442 19.8449C2.87447 19.6106 2.50079 19.2363 2.26643 18.7763C2 18.2534 2 17.5693 2 16.2002Z" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    <input type="text" name="Email" class="grow" placeholder="Email" />
                  </label>
                </label>

                <label class="form-control w-full max-w-xs">
                  <div class="label">
                    <span class="label-text text-xs"></span>
                  </div>
                  <label class="input input-bordered w-60 h-9 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.54518 8.64285L10.509 8.37611L10.509 8.3761L9.54518 8.64285ZM15.3591 14.4382L15.6262 13.4745L15.6262 13.4745L15.3591 14.4382ZM17.836 18.7018L16.8873 18.3858L16.8872 18.3858L17.836 18.7018ZM5.28475 6.16411L5.60114 7.11273L5.60116 7.11273L5.28475 6.16411ZM10.7574 15.5971L11.3298 14.7771L10.7574 15.5971ZM11.4363 15.4941L10.7054 14.8116L11.4363 15.4941ZM8.5005 12.5588L9.18647 13.2865L8.5005 12.5588ZM8.39933 13.2365L7.57878 13.8081L7.57878 13.8081L8.39933 13.2365ZM9.18647 13.2865C10.4545 12.091 11.0099 10.186 10.509 8.37611L8.58141 8.90958C8.88743 10.0153 8.53516 11.1518 7.81453 11.8312L9.18647 13.2865ZM10.1826 13.8149C9.82246 13.4545 9.50171 13.0695 9.21988 12.6649L7.57878 13.8081C7.92751 14.3087 8.32391 14.7843 8.76787 15.2286L10.1826 13.8149ZM11.3298 14.7771C10.9263 14.4954 10.5423 14.1748 10.1826 13.8149L8.76787 15.2286C9.21114 15.6722 9.68554 
                      16.0684 10.1851 16.4171L11.3298 14.7771ZM15.6262 13.4745C13.8106 12.9713 11.8992 13.533 10.7054 14.8116L12.1672 16.1766C12.8451 15.4505 13.9841 15.0948 15.092 15.4018L15.6262 13.4745ZM18.7848 19.0178C19.5901 16.5997 18.0782 14.1542 15.6262 13.4745L15.092 15.4018C16.5807 15.8145 17.2866 17.1867 16.8873 18.3858L18.7848 19.0178ZM10.509 8.3761C9.83018 5.92366 7.38653 4.4089 4.96834 5.21548L5.60116 7.11273C6.7975 6.71369 8.16873 7.4185 8.58142 8.90959L10.509 8.3761ZM4.96836 5.21548C3.39284 5.74096 2.43378 6.7213 2.11585 8.02889C1.82033 9.24428 2.12835 10.5559 2.60671 11.715C3.57004 14.0491 5.47664 16.3617 6.55614 17.442L7.97088 16.0283C6.98981 15.0465 5.27992 12.9497 4.45545 10.952C4.03992 9.94514 3.91121 9.11016 4.05923 8.50141C4.18483 7.98485 4.54955 7.46347 5.60114 7.11273L4.96836 5.21548ZM6.55614 17.442C7.61075 18.4974 9.91993 20.4122 12.2585 21.3844C13.4196 
                      21.867 14.7361 22.1805 15.9571 21.8856C17.2711 21.5683 18.2564 20.6044 18.7848 19.0178L16.8872 18.3858C16.5331 19.4492 16.007 19.8161 15.4876 19.9415C14.8752 20.0894 14.0361 19.9574 13.0262 19.5376C11.0228 18.7048 8.92821 16.9863 7.97088 16.0283L6.55614 17.442ZM10.1851 16.4171C10.895 16.9126 11.7294 16.6454 12.1672 16.1766L10.7054 14.8116C10.7607 14.7523 10.8398 14.7043 10.9423 14.6869C11.052 14.6682 11.1985 14.6854 11.3298 14.7771L10.1851 16.4171ZM7.81453 11.8312C7.34911 12.27 7.08636 13.1012 7.57878 13.8081L9.21988 12.6649C9.31091 12.7956 9.32818 12.9411 9.30989 13.0501C9.29279 13.152 9.24536 13.231 9.18647 13.2865L7.81453 11.8312Z" fill="black"/>
                      </svg>                  
                    <input type="text" name="Phonenumber" class="grow" placeholder="Phone Number" />
                  </label>
                </label>
                
                <label class="form-control w-full max-w-xs mb-6">
                  <div class="label">
                    <span class="label-text text-xs"></span>
                  </div>
                  <label class="input input-bordered w-60 h-9 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 5.23858 4.23858 3 7 3H17C19.7614 3 22 5.23858 22 8V17C22 19.7614 19.7614 22 17 22H7C4.23858 22 2 19.7614 2 17V8ZM7 5C5.34315 5 4 6.34315 4 8V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V8C20 6.34315 18.6569 5 17 5H7Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.55228 2 9 2.44772 9 3V6C9 6.55228 8.55228 7 8 7C7.44772 7 7 6.55228 7 6V3C7 2.44772 7.44772 2 8 2Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6 10C6 9.44772 6.44772 9 7 9H17C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11H7C6.44772 11 6 10.5523 6 10Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M15 17C15 16.4477 15.4477 16 16 16L17 16C17.5523 16 18 16.4477 18 17C18 17.5523 17.5523 18 17 18H16C15.4477 18 15 17.5523 15 17Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M16 2C16.5523 2 17 2.44772 17 3V6C17 6.55228 16.5523 7 16 7C15.4477 7 15 6.55228 15 6V3C15 2.44772 15.4477 2 16 2Z" fill="black"/>
                      </svg>
                      
                    <input type="date" name="Date" class="grow" placeholder="Date of Birth" />
                  </label>
                </label>

                <div class="form-control w-full max-w-xs mb-12">
                  <button type="button" data-next="step2" class="nextStep btn btn-sm h-10 bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none shadow-md shadow-neutral-400 hover:shadow-md hover:shadow-neutral-400 rounded-md">
                    Continue
                  </button>
                </div>
            </div>
            <!-- Step 2: verification & password -->
            <div id="step2" class="step hidden">
              <button data-prev="step1" class="prevStep btn btn-sm btn-circle absolute top-0 left-0 ml-5 mt-5">
                <svg class="w-3 h-3 text-black" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3314 3.52453C12.9562 4.22391 12.9562 5.35783 12.3314 6.0572L5.46274 13.7452H30.4C31.2837 13.7452 32 14.547 32 15.5361C32 16.5252 31.2837 17.327 30.4 17.327H5.46274L12.3314 25.015C12.9562 25.7143 12.9562 26.8483 12.3314 27.5476C11.7065 28.247 10.6935 28.247 10.0686 27.5476L0.468629 16.8024C-0.15621 16.103 -0.15621 14.9691 0.468629 14.2697L10.0686 3.52453C10.6935 2.82516 11.7065 2.82516 12.3314 3.52453Z" fill="currentColor"/>
                  </svg>                  
              </button>
                <div class="flex justify-center">
                  <img class="w-10 h-10 mb-2" src="images/logo.png" alt="">
                </div>
                  <h1 class="text-2xl text-center text-blue-600 font-bold mb-3">Sign Up</h1>

                  <label class="form-control w-full max-w-xs">
                    <div class="label">
                      <span class="label-text text-xs"></span>
                    </div>
                    <label id="input_password" class="input input-bordered w-60 h-9 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                      <svg class="w-4 h-4 text-black" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
                      <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
                      </svg>               
                      <input type="text" name="Username" id="Username" class="grow" value="" placeholder="Username" />
                    </label>
                  </label>

                  <label class="form-control w-full max-w-xs">
                    <div class="label">
                      <span class="label-text text-xs"></span>
                    </div>
                    <label id="input_password" class="input input-bordered w-60 h-9 flex items-center gap-2 shadow-md focus:shadow-md rounded text-xs">
                      <svg class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="9" width="16" height="12" rx="4" stroke="currentColor" stroke-width="2"/>
                        <path d="M11.4662 15.2884L11.4662 13.3773" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 9V7C16 4.79086 14.2091 3 12 3V3C9.79086 3 8 4.79086 8 7L8 9" stroke="black" stroke-width="2"/>
                        </svg>                  
                      <input type="password" name="Password" id="password" class="grow" value="" placeholder="Password" />
                    </label>
                  </label>

                  <label class="form-control w-full max-w-xs mb-8">
                    <div class="label">
                      <span class="label-text text-xs"></span>
                    </div>
                    <label id="input_confirmPassword" class="input input-bordered w-60 h-9 flex items-center gap-2 shadow-lg focus:shadow-lg rounded text-xs">
                      <svg class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="9" width="16" height="12" rx="4" stroke="currentColor" stroke-width="2"/>
                        <path d="M11.4662 15.2884L11.4662 13.3773" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 9V7C16 4.79086 14.2091 3 12 3V3C9.79086 3 8 4.79086 8 7L8 9" stroke="black" stroke-width="2"/>
                        </svg>                  
                      <input type="password" id="confirmPassword" class="grow" value="" placeholder="Confirm Password" />
                    </label>
                    <p id="error-message" class="text-red-500 text-xs mt-2 hidden">Passwords do not match.</p>
                  </label>
                  
              <div class="form-control w-full max-w-xs mb-36">
                <button type="submit" id="submitBtn" class="btn btn-sm h-10 bg-blue-700 hover:bg-blue-700 text-white text-xs font-medium border-none shadow-md shadow-neutral-400 hover:shadow-md hover:shadow-neutral-400 rounded-md" disabled>
                  Sign Up
                </button>
              </div>

            </div>
            <p class="text-xs">
              <a class="text-slate-400">Already have an account?</a>
              <a href="{{ url('formlogin') }}" class="text-blue-800 hover:underline">Log In</a>
            </p>
          </div>
        </form>
          <!-- form input -->
        </div>
      </div>
    </div>

    <script>
      //   Multiple Form Sign Up
      document.addEventListener('DOMContentLoaded', function() {
            const steps = document.querySelectorAll('.step');
            const nextButtons = document.querySelectorAll('.nextStep');
            const prevButtons = document.querySelectorAll('.prevStep');
            const input_password = document.getElementById('input_password');
            const input_confirmPassword = document.getElementById('input_confirmPassword');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const errorMessage = document.getElementById('error-message');
            const submitBtn = document.getElementById('submitBtn');

            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    changeStep(button.dataset.next);
                });
            });

            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    changeStep(button.dataset.prev);
                });
            });

            [password, confirmPassword].forEach(field => {
                field.addEventListener('input', validatePasswords);
            });

            function changeStep(stepToShow) {
                steps.forEach(step => {
                    step.classList.add('hidden');
                });
                document.getElementById(stepToShow).classList.remove('hidden');
            }

            function validatePasswords() {
                if (password.value === confirmPassword.value) {
                    errorMessage.classList.add('hidden');
                    submitBtn.disabled = false;
                    input_password.classList.remove('input-error');
                    input_confirmPassword.classList.remove('input-error');
                } else {
                    errorMessage.classList.remove('hidden');
                    submitBtn.disabled = true;
                    input_password.classList.add('input-error');
                    input_confirmPassword.classList.add('input-error');
                }
            }

            document.getElementById('signupForm').addEventListener('submit', function(event) {
                if (password.value !== confirmPassword.value) {
                    event.preventDefault();
                    errorMessage.classList.remove('hidden');
                    submitBtn.disabled = true;
                }
            });
        });


    </script>
    
@if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
</body>
</html>