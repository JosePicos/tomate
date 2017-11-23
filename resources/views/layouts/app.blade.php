<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{asset('css/Estilos.css')}}" rel="stylesheet">  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}" rel="stylesheet">
    <link href="{{asset('fonts.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet"> 

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
                                    {{ Auth::user()->name }} <span class="glyphicon glyphicon-chevron-down iconsize"></span>
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
                        <li><a href="javascript:void(0)">REQUISICIÓN<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
                            <ul class="dropdown">
                                <li><a href=" ">Alta Requisición</a></li>
                                <li><a href=" ">Monitoreo de Requisición</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" >Surtir Requisición<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
                        </li>
                        @else
                        <li><a href=" " >PROMOCIONES<span class=" "></span></a>        
                        </li>
                        <li><a href="javascript:void(0)" >QUIENES SOMOS?<span class=" "></span></a>        
                        </li>
                        <li><a href="javascript:void(0)" >CONTACTANOS<span class="glyphicon glyphicon-chevron-down iconsize"></span></a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="nav-bg-xbootstrap">
                   <div class="navbar-xbootstrap"> <span></span> <span></span> <span></span> </div>
                   <a href="{{ route('home') }}" class="title-mobile">PYMES FACTUR-E</a>
                </div>    
            </nav>
    @yield('content')
        </div>      
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src ="{{asset('js/java1.js')}}"></script>
</body>
</html>
