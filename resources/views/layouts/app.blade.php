<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('materialBoostrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('materialBoostrap/css/mdb.css') }}" rel="stylesheet">
    <link href="{{ asset('materialBoostrap/css/style.css') }}" rel="stylesheet">

    <!--- DATATABLE--->
    <link href="{{ asset('css/bootstrap-table-master/dist/bootstrap-table.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-table-master/src/extensions/filter-control/bootstrap-table-filter-control.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                SISTEMA SENA
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reporteInstructores') }}">Reporte de instructores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('juiciosEvaluativos') }}">Juicios Evaluativos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ReporteAprendicesFicha') }}">Reporte Aprencides por Fichas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

</div>
<!-- Scripts -->
{{--<script src="{{ asset('materialBoostrapjs/js/jquery-3.3.1.min.js') }}" defer></script>--}}
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{ asset('materialBoostrapjs/js/bootstrap.js') }}" defer></script>
<script src="{{ asset('materialBoostrapjs/js/mdb.js') }}" defer></script>
<script src="{{ asset('materialBoostrapjs/js/popper.min.js') }}" defer></script>
<script src="{{ asset('css/bootstrap-table-master/dist/bootstrap-table.min.js') }}" ></script>
<script src="{{ asset('css/bootstrap-table-master/src/locale/bootstrap-table-es-MX.js') }}" defer></script>
<script src="{{ asset('css/bootstrap-table-master/src/extensions/bootstrap-table-export.js') }}" defer></script>
<script src="{{ asset('css/bootstrap-table-master/src/extensions/filter-control/bootstrap-table-filter-control.js') }}" defer></script>

<script src="{{ asset('css/bootstrap-table-master/bootstrap-table-locale-all.js') }}" defer></script>



</body>
</html>
