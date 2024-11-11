@extends('base.base')

@section('content')
<div class="bg-white">
  <div class="relative isolate px-0 pt-0 lg:px-0 lg:pt-0">
    <div class="relative bg-cover bg-center min-h-[50vh] sm:min-h-[75vh] md:min-h-[100vh] lg:h-screen" style="background-image: url('{{ asset('images/home1.png') }}'); background-size: cover; background-position: center;">
      <div class="absolute inset-0 flex items-center justify-center">
        <div class="mx-auto max-w-2xl py-24 sm:py-36 lg:py-48 text-center text-white">
          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold tracking-tight whitespace-normal text-white">Hai kamu, mau ke mana?</h1>
          <p class="mt-4 sm:mt-6 text-xs sm:text-sm md:text-base lg:text-lg leading-5 sm:leading-6 md:leading-7 lg:leading-8 dark:text-white">Temukan destinasi impianmu dan pesan tiket perjalanan dengan mudah. Dari tiket pesawat hingga hotel, semuanya ada di sini untuk memudahkan petualanganmu. Yuk, rencanakan perjalanan serumu sekarang!</p>
        </div>
      </div>
    </div>
    @include('includes.card_slider')

    @include('includes.card')
  </div>
</div>
@endsection
