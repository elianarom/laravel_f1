<?php
/** @var \App\Models\Usuario $usuario */
?>

<x-layout>
    <x-slot:title>Eliminar usuario {{ $usuario->email }}</x-slot:title>

    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">
                    <h1 class="font-semibold text-3xl">¿Querés eliminar el perfil {{ $usuario->email }}?</h1>
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
                                    <div class="flex">
                                        <a href="{{ route('usuarios.index') }}" class="flex items-center mt-5 justify-between py-2.5 px-6 rounded-full bg-gray-400 text-white text-xs lg:xs font-bold hover:bg-gray-600 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Cancelar</a>
                                        <form action="{{ route('usuarios.eliminarUsuarioForm', ['id' => $usuario->user_id]) }}" method="POST" class="">
                                            @csrf
                                            <button type="submit" class="flex items-center mt-5 justify-between py-2.5 px-6 rounded-full bg-red-600 text-white text-xs lg:xs font-bold hover:bg-red-700 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Confirmar</button>
                                        </form>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
