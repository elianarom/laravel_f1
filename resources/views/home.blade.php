<?php
/**@var \App\Models\Categoria[]|\Illuminate\Database\Eloquent\Collection $categorias */
?>

<x-layout>
    <x-slot:title>Home</x-slot:title>

    <header class="relative overflow-hidden bg-white">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
          <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
                <h1 class="text-red-600 text-4xl font-extrabold sm:text-6xl animate-fadeIn mb-5">Velocidad y Emoción</h1>
                <p class="text-black text-2xl font-bold leading-8">¡Todo sobre el mundo de la Fórmula 1 en un solo lugar! Enterate de las últimas novedades.</p>
                <div class="mt-16 flex gap-x-6">
                <a href="{{ route('noticias.index') }}" class="py-2.5 px-6 text-lg rounded-full cursor-pointer font-medium bg-black text-white hover:bg-red-600 shadow-xs transition-all duration-500">Últimas novedades</a>
                </div>
            </div>
            <div>
              <div class="mt-10">
                <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                  <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                    <div class="flex items-center space-x-6 lg:space-x-8">
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                          <img src="{{ url('asset/foto_banner_1.jpg') }}" alt="Imagen banner auto RB en Las Vegas" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ url('asset/foto_banner_6.jpg') }}" alt="Imagen banner Daniel Ricciardo" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ url('asset/foto_banner_3.jpg') }}" alt="Imagen banner abrazo entre Carlos Sainz y Charles Leclert" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ url('asset/foto_banner_4.jpg') }}" alt="Imagen banner de Max Verstappen" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ url('asset/foto_banner_5.jpg') }}" alt="Imagen banner Lewis Hamilton" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                      <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ url('asset/foto_banner_2.jpg') }}" alt="Imagen banner auto RB" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                          <img src="{{ url('asset/foto_banner_7.jpg') }}" alt="Imagen banner Lando Norris" class="h-full w-full object-cover object-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="relative mx-auto mt-32 w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="md:text-center">
                <h2 class="font-display text-3xl tracking-tight text-black sm:text-4xl">Planes de Suscripción</h2>
                <p class="mt-4 text-lg text-slate-600">Elegí el plan de suscripción que querés contratar.</p>
            </div>

            <div class="-mx-4 mt-16 mb-20 grid max-w-2xl grid-cols-1 gap-y-10 sm:mx-auto lg:-mx-8 lg:max-w-none lg:grid-cols-3 xl:mx-0 xl:gap-x-8">

                <div class="flex flex-col ml-5 mr-5 rounded-3xl px-6 sm:px-10 lg:py-16 bg-red-600 hover:bg-black">
                    <h2 class="mt-5 mb-10 font-bold text-3xl text-white">BASIC</h2>
                    <p class="order-first font-display text-5xl font-bold tracking-tight text-white"><span class="text-light text-2xl">$</span> 0</p>
                    <a href="{{ route('auth.loginForm') }}" class="flex items-center justify-between py-2.5 px-6 rounded-full bg-white text-nlack text-sm lg:text-base font-bold  transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Suscribirme</a>
                </div>
                <div class="flex flex-col ml-5 mr-5 rounded-3xl px-6 sm:px-10 lg:py-16 bg-red-600 hover:bg-black">
                    <h2 class="mt-5 mb-10 font-bold text-3xl text-white">MEDIUM</h2>
                    <p class="order-first font-display text-5xl font-bold tracking-tight text-white"><span class="text-light text-2xl">$</span> 5</p>
                    <a href="{{ route('auth.loginForm') }}" class="flex items-center justify-between py-2.5 px-6 rounded-full bg-white text-nlack text-sm lg:text-base font-bold  transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Suscribirme</a>
                </div>
                <div class="flex flex-col ml-5 mr-5 rounded-3xl px-6 sm:px-10 lg:py-16 bg-red-600 hover:bg-black">
                    <h2 class="mt-5 mb-10 font-bold text-3xl text-white">GOLD</h2>
                    <p class="order-first font-display text-5xl font-bold tracking-tight text-white"><span class="text-light text-2xl">$</span> 10</p>
                    <a href="{{ route('auth.loginForm') }}" class="flex items-center justify-between py-2.5 px-6 rounded-full bg-white text-nlack text-sm lg:text-base font-bold  transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Suscribirme</a>
                </div>

            </div>
        </div>

    </section>

</x-layout>
