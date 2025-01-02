<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Home</title>
</head>
<body class="h-full bg-yellow-100" >

<div class="min-h-full">
  <nav class="bg-yellow-500" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black" aria-current="page">Dashboard</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Product</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Outlet</a>
              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Location</a>
              {{-- <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Reports</a> --}}
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-yellow-500 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full" src="https://img.icons8.com/fluency-systems-regular/50/user-male-circle--v1.png" alt="">
                </button>
              </div> 
              <div x-show="isOpen"
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"

                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="#" class="block px-4 py-2 text-sm text-black" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-black" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-black" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
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
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black" aria-current="page">Dashboard</a>
        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Product</a>
        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Outlet</a>
        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-yellow-600 hover:text-black">Location</a>
        {{-- <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a> --}}
      </div>
      <div class="border-t border-white pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full " src="https://img.icons8.com/fluency-systems-regular/50/user-male-circle--v1.png" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-black">Ijujuju</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-yellow-600 hover:text-black">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-yellow-600 hover:text-black">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-yellow-600 hover:text-black">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 bg-amber-200 flex items-center justify-center">
        <div class="text-center font-light">
        <div class="text-9xl">TEMPE AYU</div>
        <div class="text-2xl font-medium">Tempe Sehat, Hiegenis, dan Original</div>
        <div class="">
            <img src="https://s3-alpha-sig.figma.com/img/46cc/afce/d6c907a688bc730a73ec3907cf186c61?Expires=1736726400&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Z2EfB422vxYq7Yxq6-9tpDVAYe5ZVyz-Du6y5QMxQQGWjvnO3I6I5CTSufuBzQMo4TXTAubq4aLR3qb0wyfLyChEcLBYa4eZRc2jQa-sRzkbsquhyHfDVilUubla7xdZzQ~8BpXjluUzu-mQdgedODY2XaQl6qLUK9qGWc6J54s-p0tawwBwcJ122MDs5iZ3bkUJaTao~YIHrM-xUxIFUZG21irCZhtgsfuiLE2EQHTP2CdxUJ4rmZiU9BPBUONguuiOSEOBsJWNjsSYbVfljMnd0jJapDih7ZRw9lyQ~ypmWzPBPo0OmZ9UIv7TSrLxhzq6WcShr5QFShDPt1o38Q__" alt="">
        </div>
        </div>
    </div>
    </main>

</div>

    
</body>
</html>