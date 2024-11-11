@extends('base.base')

@section('content')

@include('includes.product')

<div class="max-w-screen-xl mx-auto p-5 pt-0 md:p-16 md:pt-0 dark:bg-gray-800">

    <div class="text-left mb-8">
        <h1 class="text-2xl font-bold dark:text-white">Kabur sejenak ke villa.</h1>
        <p class="text-lg text-gray-600 dark:text-gray-300">Hilangin penat bareng keluarga 🏕</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/villa1.webp" alt="Jakarta to HongKong">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>

            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Noah Villa & Chapel
                </a>
                <p>🌸🌸🌸🌸</p>
                <p class="text-gray-500 text-sm dark:text-white">Jimbaran, Bandung</p>
                <p class="text-gray-500 text-sm dark:text-white">⭐ 4,1/5</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-red-500 font-bold text-sm">IDR 378.035</p>
            </div>

        </div>


        <!-- CARD 2 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/villa2.webp" alt="Jakarta to Bangkok">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>
            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Ulaman Eco Luxury Retreat
                </a>
                <p>🌸🌸🌸🌸🌸</p>
                <p class="text-gray-500 text-sm dark:text-white">Kediri, Tabanan</p>
                <p class="text-gray-500 text-sm dark:text-white">⭐ 4,6/5</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-red-500 font-bold text-sm">IDR 5.151.410</p>
            </div>

        </div>

        <!-- CARD 3 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/villa3.webp" alt="Bangkok to Medan">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>
            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Abian Klumpu Villa
                </a>
                <p>🌸🌸🌸</p>
                <p class="text-gray-500 text-sm dark:text-white">Denpasar Selatan,Denpasar</p>
                <p class="text-gray-500 text-sm dark:text-white">⭐ 4,5/5</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-red-500 font-bold text-sm">IDR 1.272.727</p>
            </div>

        </div>

        <!-- CARD 4 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col dark:bg-gray-700">
            <div class="relative">
                <a href="#">
                    <img class="w-full" src="images/villa4.webp" alt="Medan to Penang">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                </a>
            </div>

            <div class="px-6 py-4 mb-auto dark:text-white">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                    Black Lava Camp Kintamani
                </a>
                <p>🌸🌸</p>
                <p class="text-gray-500 text-sm dark:text-white">Kintamani, Bangli</p>
                <p class="text-gray-500 text-sm dark:text-white">⭐ 4,5/5</p>
            </div>

            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <p class="text-red-500 font-bold last:text-sm">IDR 779.223</p>
            </div>

        </div>
        

    </div>

</div>

@endsection