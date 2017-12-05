<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ingeteam Philippines Inc.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            .container{
                margin-top: 8px;
            }
            .navbar{
                width: 100%;
                height: 70px;
                color: white;
                background-color: gray;
                color: white;
            }
            .navbar-default .navbar-brand{
                color: white;
                font-size: large;
            }
            .dropdown{
                margin-right: -70px;
            }
            .navbar-default .navbar-nav>li>a{
                color: white;
                font-size: large;
                margin-right: 20px;
            }
            .functions{
                height: 280px;
                width: 260px;
                margin-right: 25px;
                margin-left: 60px;
                margin-top: 20px;
            }
            .panel{
                margin-left: -70px;
                margin-top: -24px;
                margin-bottom: 0px;
                height: 630px;
                width: 900px;
            }
            .logo{
                width: 220px;
                height: 80px;
                margin-top: -22px;
                margin-left: -65px;
            }
            table{
                padding: 10px;
                border-collapse: collapse;
                width: 100%;
            }
            .tableName{
                text-align: center;
                font-weight: bold;
                background-color: gray;
                color: white;
            }
            .tableName td{
                color: white;
            }
            table tbody tr{
                padding: 5px;
                border: 2px solid gray;
            }
            
            table td{
                border: 2px solid gray;
                width: 50%;
                padding: 3px;
                color: gray;
            }
            tr button{
                width: 50px;
                height: 20px;
                font-size: 10px;
            }
            .profile{
                text-align: left;
                padding: 5px;
            }
            .profile span{
                color: black;
            }
            .profile h3{
                color: red;
            }
            .addUser{
                float: right;
                margin-top: -60px;
                padding: 20px;
            }
        </style>
    </head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="{{ asset('images/whiteLogo.png') }}" class="logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    @if (Auth::user()->role==='admin')
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <li class="headerNavigation">
                                <a class="navbar-brand" href="{{ url('/users_record') }}">
                                    Users Record
                                </a>
                            </li>
                            <li class="headerNavigation">
                                <a class="navbar-brand" href="{{ url('/users_log') }}">
                                    Users Log
                                </a>
                            </li>
                            <li class="headerNavigation">
                                <a class="navbar-brand" href="{{ url('/Equipments') }}">
                                    Equipment
                                </a>
                            </li>
                            <li class="headerNavigation">
                                <a class="navbar-brand" href="{{ url('/Reports') }}">
                                    Reports
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <li class="headerNavigation">
                                <a class="navbar-brand" href="{{ url('/users_record') }}">
                                    Profile
                                </a>
                            </li>
                            <li class="headerNavigation">
                                <a class="navbar-brand" href="{{ url('/Equipments') }}">
                                    Equipment
                                </a>
                            </li>
                            <li class="headerNavigation">
                                <a class="navbar-brand" href="{{ url('/Reports') }}">
                                    Reports
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>