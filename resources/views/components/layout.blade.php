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
                                <a  href="{{ route('usuarios.vista', auth()->user()->user_id) }}" class='relative w-10 h-10 bg-sky-100 border-2 border-solid border-sky-600 flex justify-center items-center rounded-full'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15.9998 7C15.9998 9.20914 14.2089 11 11.9998 11C9.79067 11 7.99981 9.20914 7.99981 7C7.99981 4.79086 9.79067 3 11.9998 3C14.2089 3 15.9998 4.79086 15.9998 7Z" stroke="#0284C7" stroke-width="1.6" />
                                    <path d="M11.9998 14C9.15153 14 6.65091 15.3024 5.23341 17.2638C4.48341 18.3016 4.10841 18.8204 4.6654 19.9102C5.2224 21 6.1482 21 7.99981 21H15.9998C17.8514 21 18.7772 21 19.3342 19.9102C19.8912 18.8204 19.5162 18.3016 18.7662 17.2638C17.3487 15.3024 14.8481 14 11.9998 14Z" stroke="#0284C7" stroke-width="1.6" />
                                    </svg>
                                    <span class='bottom-0 left-7 absolute  w-3.5 h-3.5 bg-emerald-500 border-2 border-white rounded-full'></span>
                                </a>
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
        <div class="mx-auto text-center max-w-lg px-4 sm:px-6 lg:px-8">
            <div class="p-4 mb-4 text-sm text-white rounded-xl bg-gray-900  font-normal" {{ session()->get('feedback.type', 'success') }} role="alert">
                {!! session()->get('mensaje') !!}
            </div>
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
