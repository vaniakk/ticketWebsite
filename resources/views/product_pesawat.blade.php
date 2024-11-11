@extends('base.base')

@section('content')

@include('includes.product')

<div class="max-w-screen-xl mx-auto p-5 pt-0 md:p-16 md:pt-0 dark:bg-gray-800">

    <div class="text-left mb-8">
        <h1 class="text-2xl font-bold dark:text-white">Dapatkan Sekarang!</h1>
        <p class="text-lg text-gray-600 dark:text-gray-300">Beli Tiket Pesawat dari Jauh Hari, Pasti Lebih Murah! ✈️</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/pesawat1.webp" alt="Jakarta to HongKong">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>

                <a href="#!">
                    <div class="text-xs rounded absolute top-0 left-4 bg-white px-4 py-2 text-indigo-600 font-bold mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        SEKALI JALAN
                    </div>
                </a>
            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Jakarta → HongKong
                </a>
                <p class="text-gray-500 text-sm dark:text-white">08 Okt 2024</p>
                <p class="text-gray-500 text-sm dark:text-white">AirAsia Indonesia<br>Ekonomi</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-gray-500 text-sm">Mulai dari</p>
                <p class="text-red-500 text-md font-bold">IDR 1.493.982</p>
            </div>

        </div>


        <!-- CARD 2 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/pesawat2.webp" alt="Jakarta to Bangkok">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>

                <a href="#!">
                    <div class="text-xs rounded absolute top-0 left-4 bg-white px-4 py-2 text-indigo-600 font-bold mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        SEKALI JALAN
                    </div>
                </a>
            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Jakarta → Bangkok
                </a>
                <p class="text-gray-500 text-sm dark:text-white">19 Sep 2024</p>
                <p class="text-gray-500 text-sm dark:text-white">AirAsia Indonesia<br>Ekonomi</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-gray-500 text-sm">Mulai dari</p>
                <p class="text-red-500 text-md font-bold">IDR 1.013.982</p>
            </div>

        </div>

        <!-- CARD 3 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/pesawat3.webp" alt="Bangkok to Medan">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>

                <a href="#!">
                    <div class="text-xs rounded absolute top-0 left-4 bg-white px-4 py-2 text-indigo-600 font-bold mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        SEKALI JALAN
                    </div>
                </a>
            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Bangkok → Medan
                </a>
                <p class="text-gray-500 text-sm dark:text-white">14 Sep 2024</p>
                <p class="text-gray-500 text-sm dark:text-white">AirAsia Indonesia<br>Ekonomi</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-gray-500 text-sm">Mulai dari</p>
                <p class="text-red-500 text-md font-bold">IDR 836.537</p>
            </div>

        </div>

        <!-- CARD 4 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/pesawat4.webp" alt="Medan to Penang">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>

                <a href="#!">
                    <div class="text-xs rounded absolute top-0 left-4 bg-white px-4 py-2 text-indigo-600 font-bold mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        SEKALI JALAN
                    </div>
                </a>
            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Medan → Penang
                </a>
                <p class="text-gray-500 text-sm dark:text-white">08 Okt 2024</p>
                <p class="text-gray-500 text-sm dark:text-white">AirAsia Indonesia<br>Ekonomi</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-gray-500 text-sm">Mulai dari</p>
                <p class="text-red-500 text-md font-bold">IDR 453.000</p>
            </div>

        </div>
        

    </div>

</div>

@endsection