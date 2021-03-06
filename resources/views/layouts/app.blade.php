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
    <link rel="icon" type="image/ico" href="{{asset('tomateicon.png')}}">
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
                        <li><a href="{{ route('login') }}">Iniciar</a></li>
                        <li><a href="{{ route('register') }}">Registrar</a></li>
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
                            @if (Auth::user()->tipo == 2)
                                 <li><a href="{{ route('requisicion') }} ">Alta Requisición</a></li>
                            @endif                    
                            @if (Auth::user()->tipo == 3)
                                <li><a href="{{ route('surtido') }}" >Surtir Requisición</a></li>
                                <li><a href="{{ route('Bodega.index') }}" >Entrada de Lotes</a></li>
                            @endif
                            @if (Auth::user()->tipo == 1 or Auth::user()->tipo == 3)
                            <li><a href="">Catálogos<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('Producto.index') }}">Productos</a></li>
                                    <li><a href="{{ route('Empleado.index') }}">Empleados</a></li>
                                </ul>
                            </li>
                            @endif
                            @if (Auth::user()->tipo == 2)
                                <li><a href="{{ route('Domicilio.index') }}" >Dirección Envio</a></li>
                            @endif
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
    <script src ="{{asset('js/formularios.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/jquery-1.12.4.min.js')}} "></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}} "></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
</body>
</html>
