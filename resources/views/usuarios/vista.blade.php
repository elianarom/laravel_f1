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
                    @if ($usuario->suscripcion->plan == 'Sin suscripcion')
                        <p>No estás suscripto a ningún plan actualmente.</p>
                    @else
                        <p>Estás suscripto al plan : {{ $usuario->suscripcion->plan }}</p>
                        <p>Miembro desde {{ \Carbon\Carbon::parse($usuario->updated_at)->format('d F Y H:i:s') }}</p>
                    @endif

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
            @endauth
        </div>
    </section>
</x-layout>
