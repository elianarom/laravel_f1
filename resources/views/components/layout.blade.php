<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <title>{{ $title }} | F1 Argentina</title>
    @vite('resources/css/app.css')
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="top-0 border-solid border-gray-200 w-full border-b py-5 bg-white z-50 bg-inherit">
        <div class="container mx-auto ">
            <div class="w-full flex  flex-col lg:flex-row">
                <div class=" flex justify-between mt-3 lg:flex-row">
                    <a href="{{ route('home') }}">
                        <img src="{{ url('asset/logo.svg') }}" alt="Logo F1 Argentina" width="110" height="50" />
                    </a>
                </div>
                <div class="hidden w-full lg:flex lg:pl-11" id="navbar-default-example">
                    <ul class="flex items-center flex-col mt-4 lg:mt-0 lg:ml-auto lg:flex-row gap-4">
                        <li>
                            <a href="{{ route('home') }}"
                                class="flex items-center justify-between text-black text-sm lg:text-base font-bold hover:text-red-600 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('noticias.index') }}"
                                class="flex items-center justify-between text-black text-sm lg:text-base font-bold hover:text-red-600 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">Noticias</a>
                        </li>
                        @guest
                            <li>
                                <a class="flex text-black lg:text-base font-bold transition-all duration-500 mb-2 md:mb-0 md:mr-3 py-2.5 px-6 text-sm border border-black  hover:bg-black hover:text-white rounded-full shadow-xs"
                                    href="{{ route('auth.loginForm') }}">Iniciar Sesión</a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between py-2.5 px-6 rounded-full bg-red-600 text-white text-sm lg:text-base font-bold hover:bg-red-700 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3"
                                    href="{{ route('usuarios.crearUsuario') }}">Registrarse</a>
                            </li>
                        @else
                        @if(auth()->user()->email == 'admin@mail.com')
                            <li>
                                <a class="flex items-center justify-between text-red-600 text-sm lg:text-base font-bold hover:text-red-800 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3"
                                    href="{{ route('admin.dashboard') }}">Panel de control</a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between text-red-600 text-sm lg:text-base font-bold hover:text-red-800 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3"
                                    href="{{ route('usuarios.index') }}">Usuarios</a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between text-red-600 text-sm lg:text-base font-bold hover:text-red-800 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3"
                                    href="{{ route('admin.estadisticas') }}">Estadísticas</a>
                            </li>
                        @else
                            <li>
                                <a class="flex items-center justify-between text-black text-sm lg:text-base font-bold hover:text-red-600 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3"
                                    href="{{ route('suscripciones.index', auth()->user()->user_id) }}">Suscripciones</a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between text-black text-sm lg:text-base font-bold hover:text-red-600 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3"
                                    href="{{ route('usuarios.vista', auth()->user()->user_id) }}">Mi Perfil</a>
                            </li>
                        @endif
                            <li>
                                <form action="{{ route('auth.logoutProceso') }}" method="POST">
                                    @csrf
                                    <button
                                    class="flex items-center justify-between py-2.5 px-6 rounded-full bg-red-600 text-white text-xs lg:xs font-bold hover:bg-red-700 transition-all duration-500 mb-2 lg:mr-6 md:mb-0 md:mr-3">{{ auth()->user()->email }}(Cerrar Sesión)</button>
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @if (session()->has('mensaje'))
            <div class="ml-10 mr-10 flex items-center p-4 mb-4 rounded-xl text-sm border" {{ session()->get('feedback.type', 'success') }} role="alert">
             {!! session()->get('mensaje') !!}
            </div>
            <!--<div class="alert alert-{{ session()->get('feedback.type', 'success') }}">{!! session()->get('mensaje') !!}</div>-->
        @endif

        {{ $slot }}
    </main>

    <footer class="bg-black text-center text-white">
        <div class="p-6 text-center flex justify-center items-center">
            <a class="mx-3" href="{{ route('home') }}">
                <img src="{{ url('asset/logo.svg') }}" alt="Logo F1 Argentina" loading="lazy" />
            </a>
            <p>Copyright &copy; Formula 1 Argentina.</p>
        </div>
    </footer>
    </div>

    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
</body>

</html>


<!-- from node_modules -->
<script src="node_modules/@material-tailwind/html/scripts/tabs.js"></script>

<!-- from cdn -->
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
