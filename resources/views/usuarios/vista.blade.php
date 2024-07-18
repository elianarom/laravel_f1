<?php
/** @var \App\Models\Usuario $usuario */
?>

<x-layout>
    <x-slot:title>Perfil de: {{$usuario->nombre}} {{$usuario->apellido}}</x-slot:title>

    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            @auth
            <nav class="flex mt-20" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    @if (auth()->user()->email == 'admin@mail.com')
                    <li class="inline-flex items-center text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        <a href="{{ route('usuarios.index') }}" href="javascript:;" class="inline-flex items-center text-base font-medium text-red-600 whitespace-nowrap pl-2 pr-5">Volver al Panel de usuarios</a>
                    </li>
                    @endif
                </ol>
            </nav>
            @endauth
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">
                    <h1 class="font-semibold text-3xl">Mi Perfil</h1>
                    <p class="w-max py-2.5 px-6 text-sm rounded-full bg-gray-700 text-white font-semibold text-center shadow-xs transition-all duration-500 hover:bg-gray-900">{{ $usuario->suscripcion->plan }}</p>

                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">

                                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                    <div class="sm:col-span-4">
                                        <p class="block text-lg font-medium leading-6 text-gray-900">Nombre: <span class="font-black">{{ $usuario->nombre }}</span></p>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <p class="block text-lg font-medium leading-6 text-gray-900">Apellido: <span class="font-black">{{ $usuario->apellido }}</span></p>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <p class="block text-lg font-medium leading-6 text-gray-900">Email: <span class="font-black">{{ $usuario->email }}</span></p>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <p class="block text-lg font-medium leading-6 text-gray-900">Rol: <span class="font-black">
                                            @foreach ($usuario->rols as $rol )
                                            {{ $rol->nombre }}
                                            @endforeach</span>
                                        </p>
                                    </div>
                                    <div class="sm:col-span-4 mt-5">
                                        <a href="{{ route('usuarios.editarUsuario', ['id' => $usuario->user_id]) }}"
                                            class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline  focus-visible:outline-offset-2">
                                            Editar Perfil
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
