    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Tomate') }}</title>
    <!-- Styles -->
    <link href="{{asset('css/Estilos.css')}}" rel="stylesheet">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}" rel="stylesheet">
    <link href="{{asset('fonts.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/menu.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/mensajes.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}">
</head>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
                <div class="nav-xbootstrap">
                    <ul>
                        <li><a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></li>        
            <!-- Right Side Of Navbar -->
                    <ul class=" navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                       @else
                      
                        <li>
                             <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->nombre }} <span class="glyphicon glyphicon-chevron-down iconsize"></span>
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                    </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                        @if (Auth::check())
                        <li><a href="{{ url('/home') }}">Inicio</a></li>
                        <li><a href="{{ route('requisicion') }} ">Alta Requisición</a></li>
                        <li><a href="{{ route('surtido') }}" >Surtir Requisición</a></li>
                        <li><a href="" >Entrada de Lotes</a></li>
                        <li><a href="">Catálogos<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
                            <ul class="dropdown">
                                <li><a href=" ">Productos</a></li>
                                <li><a href="">Empleados</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="nav-bg-xbootstrap">
                   <div class="navbar-xbootstrap"> <span></span> <span></span> <span></span> </div>
                   <a href="{{ route('home') }}" class="title-mobile">TOMATE</a>
                </div>    
            </nav>
    @yield('content')
        </div>      
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src ="{{asset('js/java1.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/jquery-1.12.4.min.js')}} "></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}} "></script>
</body>
</html>
