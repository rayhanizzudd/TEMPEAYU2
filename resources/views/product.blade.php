<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="min-h-screen bg-amber-200 flex justify-center">

        <main class="lg:px-32 flex flex-col fade-in py-16 p-8">
            <div class="w-full text-center text-4xl font-medium">TEMPE AYU</div>
            <div class="container mx-auto  grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-14">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-yellow-600 hover:dark:bg-yellow-700">
                    <img class="p-8 rounded-t-lg h-[30rem]  w-full object-cover"
                        src="/assets/tempe1.jpg"
                        alt="product image" />
                    <div class="px-5 pb-5">
                        <p class="text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Tempe
                            Premium</p>
                        </p>
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp 10.000</span>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-yellow-600 hover:dark:bg-yellow-700">
                    <img class="p-8 rounded-t-lg h-[30rem]  w-full object-cover"
                        src="/assets/tempe2.jpg"
                        alt="product image" />
                    <div class="px-5 pb-5">
                        <p class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Tempe
                            Lonjong</p>
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp 5.000</span>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-yellow-600 hover:dark:bg-yellow-700">
                    <img class="p-8 rounded-t-lg h-[30rem]  w-full object-cover"
                        src="/assets/tempe3.jpg"
                        alt="product image" />
                    <div class="px-5 pb-5">
                        <p class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Tempe
                            Kotak</p>
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp 3.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="min-h-screen bg-amber-100 flex justify-center">
        <main class="lg:px-32 flex flex-col fade-in py-16 p-8">
            <div class="w-full text-center text-4xl font-medium">KERING TEMPE AYU</div>
            <div class="container mx-auto  grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-10 mt-14">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-yellow-600 hover:dark:bg-yellow-700">
                    <img class="p-8 rounded-t-lg h-[30rem]  w-full object-cover"
                        src="assets/keringori.jpg"
                        alt="product image" />
                    <div class="px-5 pb-5">
                        <p class="text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Tempe
                            Kering Original</p>
                        </p>
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp 15.000</span>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-yellow-600 hover:dark:bg-yellow-700">
                    <img class="p-8 rounded-t-lg h-[30rem]  w-full object-cover"
                        src="assets/keringpedas.jpg"
                        alt="product image" />
                    <div class="px-5 pb-5">
                        <p class="text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Tempe
                            Kering Pedas</p>
                        </p>
                        <div class="flex items-center justify-center">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp 15.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</x-layout>
