<nav class="bg-orange-600"  x-data="{ isOpen: false, menuIsOpen: false }"  @keydown.escape="isOpen = false">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-10 w-full" src="/images/betadine.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-orange-700 text-white", Default: "text-white hover:bg-orange-500 hover:bg-opacity-75" -->
              <a href="{{ route('superadmin.dashboard') }}"  class="{{ Route::currentRouteName() == 'superadmin.dashboard' ? 'bg-orange-700' : 'hover:bg-orange-500 hover:bg-opacity-75' }} text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
              <a href="{{ route('superadmin.peserta') }}" class="text-white {{ Route::currentRouteName() == 'superadmin.peserta' ? 'bg-orange-700' : 'hover:bg-orange-500 hover:bg-opacity-75' }}  rounded-md px-3 py-2 text-sm font-medium" >Peserta</a>
              <a href="{{ route('superadmin.parenting') }}" class="text-white {{ Route::currentRouteName() == 'superadmin.parenting' ? 'bg-orange-700' : 'hover:bg-orange-500 hover:bg-opacity-75' }} hover:bg-opacity-75 rounded-md px-3 py-2 text-sm font-medium">Parenting</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full bg-orange-600 p-1 text-orange-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-600">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3" x-data="{dropdownMenu: false}">
              <div>
                <button type="button" @click="dropdownMenu = ! dropdownMenu" class="relative flex max-w-xs items-center rounded-full bg-orange-600 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-600" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div x-show="dropdownMenu" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="{{ route('superadmin.profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden" 
        >
          <!-- Mobile menu button -->
          <button type="button"
          @click="menuIsOpen = !menuIsOpen"
           class="relative inline-flex items-center justify-center rounded-md bg-orange-600 p-2 text-orange-200 hover:bg-orange-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" :class="{ 'block' : !menuIsOpen, 'hidden' : menuIsOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" :class="{ 'block' : menuIsOpen, 'hidden' : !menuIsOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
          {{-- <button @click="open = false" type="button" :class="{ 'block' : open, 'hidden' : !open }" class="md:hidden absolute top-0 right-0 leading-none p-8 text-xl z-50 hidden">╳</button> --}}
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu" 
    >
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3" :class="{ 'flex' : !menuIsOpen, 'hidden' : menuIsOpen === false }">
        <!-- Current: "bg-orange-700 text-white", Default: "text-white hover:bg-orange-500 hover:bg-opacity-75" -->
        <a href="{{ route('superadmin.dashboard') }}" class= text-white {{ Route::currentRouteName() == 'superadmin.dashboard' ? 'bg-orange-700' : 'hover:bg-orange-500 hover:bg-opacity-75' }}  block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
        <a href="{{ route('superadmin.peserta') }}" class="text-white {{ Route::currentRouteName() == 'superadmin.peserta' ? 'bg-orange-700' : 'hover:bg-orange-500 hover:bg-opacity-75' }}  block rounded-md px-3 py-2 text-base font-medium">Peserta</a>
        <a href="{{ route('superadmin.parenting') }}" class="text-white {{ Route::currentRouteName() == 'superadmin.parenting' ? 'bg-orange-700' : 'hover:bg-orange-500 hover:bg-opacity-75' }} block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        
      </div>
      <div class="border-t border-orange-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
            <div class="text-sm font-medium text-orange-300">{{ Auth::user()->email }}</div>
          </div>
          <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-orange-600 p-1 text-orange-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-600">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="{{ route('superadmin.profile.edit') }}" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-orange-500 hover:bg-opacity-75">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-orange-500 hover:bg-opacity-75">Settings</a>
          
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
          class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-orange-500 hover:bg-opacity-75">Sign out</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </div>
    </div>
  </nav>