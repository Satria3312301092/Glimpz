@extends('layout.admin_dashboard_page')

@section('title', 'Glimpz | Admin Dashboard')
@section('content')

<!-- carousel -->
<div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center bg-slate-50">
          <!-- Page content here -->
          <!-- navbar start -->
          @include('components.nav_admin')
          <!-- navbar end -->

          <!-- content -->
          <div class="container mx-auto pl-12 pt-12">
            <h1 class="font-bold text-2xl">Dashboard</h1>
              <div class="grid grid-cols-5 gap-4 mt-10">
                <!-- card 1 -->
                <div class="stats shadow-lg shadow-neutral-300 w-full hover:bg-gray-300">
                  <a href="adminservice">
                  <div class="stat">
                    <div class="stat-title font-bold text-gray-600 hover:bg-gray-300">Services</div>
                    <div class="stat-value font-black">{{ $countService }}</div>
                  </div>
                </a>
                </div>
                <!-- card 2 -->
                <div class="stats shadow-lg shadow-neutral-300 w-full hover:bg-gray-300">
                  <a href="adminuser">
                  <div class="stat">
                    <div class="stat-title font-bold text-gray-600">Users</div>
                    <div class="stat-value font-black">{{ $countUser }}</div>
                  </div>
                </a>
                </div>
                <!-- card 3 -->
                <div class="stats shadow-lg shadow-neutral-300 w-full hover:bg-gray-300">
                  <a href="admininvoice">
                  <div class="stat">
                    <div class="stat-title font-bold text-gray-600">Invoice</div>
                    <div class="stat-value font-black">{{ $countInvoice }}</div>
                  </div>
                </a>
                </div>
                <!-- card 4 -->
                <div class="stats shadow-lg shadow-neutral-300 w-full hover:bg-gray-300">
                  <a href="adminorder">
                  <div class="stat">
                    <div class="stat-title font-bold text-gray-600">Orders</div>
                    <div class="stat-value font-black">{{ $countOrder }}</div>
                  </div>
                </a>
                </div>

                <div class="stats shadow-lg shadow-neutral-300 w-full hover:bg-gray-300">
                  <a href="adminuser">
                  <div class="stat">
                    <div class="stat-title font-bold text-gray-600">Ban</div>
                    <div class="stat-value font-black">{{ $countBan }}</div>
                  </div>
                </a>
                </div>

                <div class="stats shadow-lg shadow-neutral-300 w-full hover:bg-gray-300">
                  <a href="adminpayment">
                  <div class="stat">
                    <div class="stat-title font-bold text-gray-600">Payment Confirmation</div>
                    <div class="stat-value font-black">{{ $countPayment }}</div>
                  </div>
                </a>
                </div>

              </div>
          </div>
          
        <!-- content end -->
        </div>
        <!-- sidebar -->
        <div class="drawer-side">
          <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
          <ul class="bg-[#0C3FF3] menu p-4 w-64 min-h-full text-white">
            <!-- Sidebar content here -->
            <li class="mx-auto font-bold text-xl drop-shadow-xl"><a>Glimpz</a></li>
            <li class="bg-white rounded-full text-black"><a href="admindasbor"><svg class="h-6 w-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M3.91667 0C1.75355 0 0 1.75355 0 3.91667V6.83333C0 8.99645 1.75355 10.75 3.91667 10.75H9.75C11.9131
               10.75 13.6667 8.99645 13.6667 6.83333V3.91667C13.6667 1.75355 11.9131 0 9.75 0H3.91667ZM2 3.91667C2 2.85812 2.85812 2 3.91667 2H9.75C10.8085 2 11.6667
                2.85812 11.6667 3.91667V6.83333C11.6667 7.89188 10.8085 8.75 9.75 8.75H3.91667C2.85812 8.75 2 7.89188 2 6.83333V3.91667ZM3.91667 17.5833H9.75C10.2563 
                17.5833 10.6667 17.9937 10.6667 18.5V27.25C10.6667 27.7563 10.2563 28.1667 9.75 28.1667H3.91667C3.41041 28.1667 3 27.7563 3 27.25V18.5C3 17.9937 3.41041 
                17.5833 3.91667 17.5833ZM1 18.5C1 16.8892 2.30584 15.5833 3.91667 15.5833H9.75C11.3608 15.5833 12.6667 16.8892 12.6667 18.5V27.25C12.6667 28.8608 11.3608
                 30.1667 9.75 30.1667H3.91667C2.30584 30.1667 1 28.8608 1 27.25V18.5ZM17.5 3.91667C17.5 1.75355 19.2536 0 21.4167 0H27.25C29.4131 0 31.1667 1.75355 31.1667
                  3.91667V12.6667C31.1667 14.8298 29.4131 16.5833 27.25 16.5833H21.4167C19.2536 16.5833 17.5 14.8298 17.5 12.6667V3.91667ZM21.4167 2C20.3581 2 19.5 2.85812
                   19.5 3.91667V12.6667C19.5 13.7252 20.3581 14.5833 21.4167 14.5833H27.25C28.3086 14.5833 29.1667 13.7252 29.1667 12.6667V3.91667C29.1667 2.85812 28.3086
                    2 27.25 2H21.4167ZM21.4167 20.4167C19.2536 20.4167 17.5 22.1702 17.5 24.3333V27.25C17.5 29.4131 19.2536 31.1667 21.4167 31.1667H27.25C29.4131 31.1667
                     31.1667 29.4131 31.1667 27.25V24.3333C31.1667 22.1702 29.4131 20.4167 27.25 20.4167H21.4167ZM19.5 24.3333C19.5 23.2748 20.3581 22.4167 21.4167
                      22.4167H27.25C28.3086 22.4167 29.1667 23.2748 29.1667 24.3333V27.25C29.1667 28.3085 28.3086 29.1667 27.25 29.1667H21.4167C20.3581 29.1667 19.5 28.3085 
                      19.5 27.25V24.3333Z" fill="currentColor"/>
              </svg>
              Dashboard</a></li>
            <li class="#"><a class="" href="adminuser"><svg class="h-6 w-6" fill="none" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
              <circle cx="17.5001" cy="10.2083" r="5.83333" stroke="currentColor" stroke-width="3"/>
              <path d="M23.3334 30.6248H11.6667C8.44505 30.6248 5.60024 27.798 7.27969 25.0487C8.92184 22.3605 12.1001 20.4165 17.5 20.4165C22.9 20.4165 26.0782 22.3605 27.7204 25.0487C29.3998 27.7979 26.555 30.6248 23.3334 30.6248Z" stroke="currentColor" stroke-width="3"/>
            </svg>
              Users</a></li>
            <li><a href="adminservice"><svg class="h-6 w-6 text-white" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.5C5.29822 2.5 2.5 5.29822 2.5 8.75V21.25C2.5 24.7018 5.29822 27.5 8.75 27.5H21.25C24.7018 27.5 27.5 24.7018 27.5 21.25V8.75C27.5 5.29822 24.7018 2.5 21.25 2.5H8.75ZM19.6875 16.6238C20.9375 15.9021 20.9375
               14.0979 19.6875 13.3762L14.0625 10.1286C12.8125 9.40689 11.25 10.309 11.25 11.7524V18.2476C11.25 19.6909 12.8125 20.593 14.0625 19.8714L19.6875 16.6238Z" stroke="currentColor" stroke-width="3"/>
              </svg>
              Service</a></li>
            <li><a href="adminorder"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.4657 4.11283C15.4825 4.12383 14.531 4.32184 13.8009 4.67109C12.5365 5.27746 5.5083 8.79609 5.5083 8.79609C7.88347 9.98409 14.0883 13.0861 14.8748 13.4794C15.7314 13.907 17.2852 13.9084 18.1418 13.4794L27.5935
               8.84007C27.5935 8.84007 21.2768 5.63634 19.3009 4.67109C18.4649 4.26271 17.4474 4.10183 16.4657 4.11283ZM4.1333 10.9878V20.5276C4.13344 22.1899 5.26011 23.9953 6.75432 24.7378L15.1333 28.8628V16.3586C14.7524 16.3063 14.0539
                16.0974 13.6293 15.8856L4.90674 11.5461C4.39771 11.2931 4.1333 10.9878 4.1333 10.9878ZM28.8833 10.9878C28.8833 10.9878 28.6193 11.2931 28.1105 11.5461L19.3875 15.8856C18.9627 16.0974 18.2642 16.3063 17.8833 16.3586V28.8628L26.2625
                 24.7378C27.7558 23.9953 28.8833 22.1899 28.8833 20.5276V10.9878Z" fill="currentColor"/>
              </svg>
              Order</a></li>
            <li><a href="admininvoice"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 23.375C11 22.6156 11.6156 22 12.375 22H20.625C21.3844 22 22 22.6156 22 23.375C22 24.1344 21.3844 24.75 20.625 24.75H12.375C11.6156 24.75 11 24.1344 11 23.375Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 17.875C11 17.1156 11.6156 16.5 12.375 16.5H20.625C21.3844 16.5 22 17.1156 22 17.875C22 18.6344 21.3844 19.25 20.625 19.25H12.375C11.6156 19.25 11 18.6344 11 17.875Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 12.375C11 11.6156 11.6156 11 12.375 11H13.75C14.5094 11 15.125 11.6156 15.125 12.375C15.125 13.1344 14.5094 13.75 13.75 13.75H12.375C11.6156 13.75 11 13.1344 11 12.375Z" fill="currentColor"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 5.5C9.48122 5.5 8.25 6.73122 8.25 8.25V24.75C8.25 26.2688 9.48122 27.5 11 27.5H22C23.5188 27.5 24.75 26.2688 24.75 24.75V12.1391C24.75 11.7744 24.6051 11.4247 24.3473 11.1668L19.0832 
              5.90273C18.8253 5.64487 18.4756 5.5 18.1109 5.5H11ZM5.5 8.25C5.5 5.21244 7.96243 2.75 11 2.75H18.1109C19.2049 2.75 20.2541 3.1846 21.0277 3.95818L26.2918 9.22227C27.0654 9.99586 27.5 11.0451 27.5 12.1391V24.75C27.5 27.7876 25.0376 30.25 
              22 30.25H11C7.96243 30.25 5.5 27.7876 5.5 24.75V8.25Z" fill="currentColor"/>-
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.25 4.125V6.875C19.25 9.15317 21.0968 11 23.375 11H26.125V13.75H23.375C19.578 13.75 16.5 10.672 16.5 6.875V4.125H19.25Z" fill="currentColor"/>
              </svg>
              Invoice</a></li>
            <li><a href="adminpayment"><svg class="h-6 w-6 text-white" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.125 16.5C4.125 9.66548 9.66548 4.125 16.5 4.125C23.3345 4.125 28.875 9.66548 28.875 16.5C28.875 23.3345 23.3345 28.875 16.5 28.875C9.66548 28.875 4.125 23.3345 4.125 16.5Z" stroke="currentColor" stroke-width="3"/>
              <path d="M22 12.375L15.125 20.625L11 16.875" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Payment</a></li>
          </ul>
        
        </div>
        <!-- sidebar -->
      </div>


@endsection
