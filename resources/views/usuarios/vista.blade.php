<?php
/** @var \App\Models\Usuario $usuario */
?>

<x-layout>
    <x-slot:title>Perfil de: {{$usuario->nombre}} {{$usuario->apellido}}</x-slot:title>

    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            @auth

            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">
                    <h1 class="font-semibold text-3xl">Mi Perfil</h1>
                    <ul class="mb-12 space-y-6 text-left text-lg text-gray-800">
                        <li class="flex items-center space-x-4">
                          <!-- Icon -->
                          <svg class="flex-shrink-0 w-6 h-6 text-red-600" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 14.7875L13.0959 17.8834C13.3399 18.1274 13.7353 18.1275 13.9794 17.8838L20.625 11.25M15 27.5C8.09644 27.5 2.5 21.9036 2.5 15C2.5 8.09644 8.09644 2.5 15 2.5C21.9036 2.5 27.5 8.09644 27.5 15C27.5 21.9036 21.9036 27.5 15 27.5Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                    @if ($usuario->suscripcion->plan == 'Sin suscripcion')
                        <p>No estás suscripto a ningún plan actualmente.</p>
                    @else
                        <p>Estás suscripto al plan : <span class="font-bold">{{ $usuario->suscripcion->plan }}</span>.<br><span class="text-xs">Fecha de suscripción: {{ ($usuario->updated_at)->format('d F Y') }}.</span></p>
                    @endif
                        </li>
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">

                                <div class="mt-8 gap-x-6 gap-y-8">
                                    <li class="flex items-center space-x-4">
                                        <!-- Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-600">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                                        </svg>
                                        <p>Nombre: <span class="font-bold">{{ $usuario->nombre }}</span></p>
                                      </li>
                                </div>
                                <div class="mt-8 gap-x-6 gap-y-8">
                                    <li class="flex items-center space-x-4">
                                        <!-- Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-600">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                                        </svg>
                                        <p>Apellido: <span class="font-bold">{{ $usuario->apellido }}</span></p>
                                      </li>
                                </div>
                                <div class="mt-8 gap-x-6 gap-y-8">
                                    <li class="flex items-center space-x-4">
                                        <!-- Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                          </svg>
                                        <p>Email: <span class="font-bold">{{ $usuario->email }}</span></p>
                                      </li>
                                </div>

                                <div class="flex items-center mb-4 mt-10 rounded-xl text-sm bg-amber-50 text-amber-500" role="alert">
                                    <svg class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0043 13.3333V9.16663M9.99984 6.66663H10.0073M9.99984 18.3333C5.39746 18.3333 1.6665 14.6023 1.6665 9.99996C1.6665 5.39759 5.39746 1.66663 9.99984 1.66663C14.6022 1.66663 18.3332 5.39759 18.3332 9.99996C18.3332 14.6023 14.6022 18.3333 9.99984 18.3333Z" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="font-semibold mr-1">Importante:</span> Para cambiar tu suscripción, hacé click <a href="{{ route('suscripciones.index', auth()->user()->user_id) }}" class="font-bold ml-1"> acá</a>.
                                    </div>

                                    <div class="sm:col-span-4 mt-16">
                                        <a href="{{ route('usuarios.editarUsuario', ['id' => $usuario->user_id]) }}"
                                            class="py-3 px-8 bg-black shadow-sm rounded-full transition-all duration-500 text-lg text-white font-semibold text-center w-fit mx-auto hover:bg-red-700">
                                            Editar Perfil
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endauth
        </div>
    </section>
</x-layout>
