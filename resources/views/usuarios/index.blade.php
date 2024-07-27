<?php
/** @var \App\Models\User[]|\Illuminate\Database\Eloquent\Collection $usuarios */
?>

<x-layout>
    <x-slot:title>Lista de usuarios</x-slot:title>
    <section class="relative mx-auto w-full max-w-container px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:mx-32">
            <div class="isolate overflow-hidden bg-white px-6 py-20 lg:overflow-visible lg:px-0">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-1 lg:items-start lg:gap-y-10">

                    <div class="relative flex flex-col w-full h-full text-gray-700">
                        <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                            <div class="flex flex-col justify-between gap-8 mb-4 md:flex-row md:items-center">
                                <div>
                                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Panel de
                                        control de Usuarios</h1>
                                    <p class="block mt-3 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                                        Acá vas a poder ver los usuarios registrados en el sitio, con su email y suscripción.
                                    </p>
                                </div>
                                @if ($usuarios->isNotEmpty())
                            </div>
                        </div>
                    </div>

                    <div class="p-6 px-0">
                        <table class="w-full text-left table-auto min-w-max">
                            <thead>
                                <tr>
                                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Rol</p>
                                    </th>
                                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Suscripción</p>
                                    </th>
                                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">Email</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                ?>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td class="p-4 border-b border-blue-gray-50">
                                            <div class="w-max">
                                                <div class="">
                                                        <span class="relative items-center px-2 py-1 font-sans text-xs font-bold uppercase rounded-md select-none whitespace-nowrap">@forelse ($usuario->rols as $rol )
                                                            {{ $rol->nombre }}
                                                        @empty
                                                            {{ $rol->nombre }}
                                                        @endforelse</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-4 border-b border-blue-gray-50">
                                            <div class="w-max">
                                                <span class="relative items-center px-2 py-1 font-sans text-xs font-bold text-pink-900 uppercase rounded-md select-none whitespace-nowrap bg-violet-500/20">{{ $usuario->suscripcion->plan ?? "Sin suscripción" }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="p-4 border-b border-blue-gray-50">
                                            <div class="w-max">
                                                <div class="relative grid items-center px-2 py-1 font-sans text-xs font-bold uppercase rounded-md select-none whitespace-nowrap">
                                                    {{ $usuario->email }}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <?php
                                ?>
                            </tbody>
                        </table>
                        @else
                        <p>Actualmente no existen usuarios registrados :(.
                        </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
