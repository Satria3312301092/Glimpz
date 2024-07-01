<!-- navbar start -->
<div class="navbar bg-base-100 shadow-xl rounded-b-2xl">
            <div class="flex-1">
              <label for="my-drawer-2" class="btn bg-base-100 border-none shadow-none drawer-button lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
              </label>
              <a class="btn btn-ghost text-xl lg:hidden">Glimpz</a>
            </div>
            <div class="flex-none gap-2">
              <!-- <div class="form-control">
                <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
              </div> -->
              {{-- <button class="btn btn-ghost btn-circle">
                <svg class="w-8 p-1" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.5063 47.9541C37.9361 47.9541 48.0125 37.8908 48.0125 25.4771C48.0125 13.0633 37.9361 3 25.5063 3C13.0764 3 3 13.0633 3 25.4771C3 37.8908 13.0764 47.9541 25.5063 47.9541Z" stroke="currentColor" stroke-width="5.62656" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M53.6391 53.5735L41.4014 41.3516" stroke="currentColor" stroke-width="5.62656" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>                  
              </button> --}}
              <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                  <div class="w-8 border-[1px] border-[#BEBEBE] rounded-full shadow-md shadow-neutral-300">
                    <img src="{{ asset('/icon/Profileuser.svg') }}" alt="Avatar Tailwind CSS Component" />
                  </div>
                </div>
                <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                  <li>
                    <a><img src="{{ asset('/icon/Profile.svg') }}" />Profile</a>
                  </li>
                  <form action="{{ route ('logout') }}" method="POST">
                    @csrf
                    <li><button type="submit"><img src="{{ asset('/icon/logout.svg') }}" />Logout</button></li>
                  </form>
                </ul>
              </div>
            </div>
          </div>
          <!-- navbar end -->
      