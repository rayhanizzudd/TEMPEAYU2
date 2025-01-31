<nav class="fixed top-0 w-full z-50 bg-yellow-500" x-data="{ isOpen: false } ">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center justify-between w-full">
          <div class="shrink-0">
            <a href="#home"><img class=" w-40" src="https://s3-alpha-sig.figma.com/img/80e1/e408/97d1bc89710a1aab0851cea0e9002f9b?Expires=1739145600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=n3DFN3zyYPDmWorAP15cEqQq2fS3qeIpvwc8dHMLmAk3mDgKCSQ0QbWoo9QHDnWJgSJbxOMIIlVnWHhYwdDsl48nI4Q-qWKsuz2HOr8KxqermOEkkyNe7xC0cQHn0ef4f3c9Nf3xodog2oRPSgLNYqdck-5KLdLNfCSO~EddU7sMJxEUhxeso4vDLfaawDIl9JrB0JgFsELuIwrPbQ2DDLu13wk4SbTYhSJBSN9v~l7AvqR2oT7BHlLRTmZHhffd~Unw92uJVVHRwGaML2kucrDqT6zpoTRTJSRx4gOxeATEEcYzbb3kSp3QJiDeOmtmpn0ZBFupzvgRJJ9~9AACLg__" alt="Your Company"></a>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black" aria-current="page">Home</a>
              <a href="/product" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Produk</a>
              <a href="/outlet" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Outlet</a>
              <a href="/location" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Lokasi</a>
              {{-- <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Reports</a> --}}
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-yellow-800 p-2 text-gray-400 hover:bg-yellow-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-yellow-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div x-show='isOpen' class="md:hidden" id="mobile-menu">
      <div class="flex flex-col space-y-1 px-2 pb-3 pt-2 sm:px-3 border border-white">
        <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black" aria-current="page">Home</a>
        <a href="/product" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Produk</a>
        <a href="/outlet" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Outlet</a>
        <a href="/location" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Lokasi</a>
        {{-- <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a> --}}
      </div>
    </div>
  </nav>