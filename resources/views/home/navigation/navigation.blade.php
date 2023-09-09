<header class="absolute inset-x-0 top-0 z-50 bg-white" x-data="{ open: false }">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-0">
                <span class="sr-only">BETADINE</span>
                <img class="h-12 w-auto" src="/images/betadine.png" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                @click="open = true">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">BERANDA</a>
            <a href="/#hadiah" class="text-sm font-semibold leading-6 text-gray-900">HADIAH</a>
            <a href="/#mekanisme" class="text-sm font-semibold leading-6 text-gray-900">MEKANISME</a>
            <a href="/#registrasi" class="text-sm font-semibold leading-6 text-gray-900">REGISTRASI</a>
            <a href="/#playlist" class="text-sm font-semibold leading-6 text-gray-900">PLAYLIST</a>
            <a href="/#parenting" class="text-sm font-semibold leading-6 text-gray-900">PARENTING</a>
            <a href="/#galeri" class="text-sm font-semibold leading-6 text-gray-900">GALERI</a>
            <a href="/#belanja" class="text-sm font-semibold leading-6 text-gray-900">BELANJA</a>
        </div>
        {{-- <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    </div> --}}
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div x-show="open" class="fixed inset-0 z-50"></div>
        <div x-show="open"
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">BETADINE</span>
                    <img class="h-8 w-auto" src="/images/betadine.png" alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = !open">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10" x-show="open">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">BERANDA</a>
                        <a href="#hadiah"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">HADIAH</a>
                        <a href="#mekanisme"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">MEKANISME</a>
                        <a href="#registrasi"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">REGISTRASI</a>
                        <a href="#playlist"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">PLAYLIST</a>
                        <a href="#parenting"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">PARENTING</a>
                        <a href="#galeri"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">GALERI</a>
                        <a href="#belanja"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">BELANJA</a>
                    </div>
                    {{-- <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
          </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>