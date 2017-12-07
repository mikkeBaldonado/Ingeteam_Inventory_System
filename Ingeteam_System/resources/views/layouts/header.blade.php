<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/png" href="{{ asset('images/welcomeLogo.png') }}">
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

                height: 240px;
                width: 230px;
                margin-right: 20px;
                margin-left: 40px;
                margin-top: 150px;
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
                background-color: white;
                padding: 10px;
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 20px;
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
                background-color: white;
            }
            .profile h3{
                color: black;
            }
            .name{
                text-decoration: none;
                text-align: center;
                font-family: "Raleway-B", sans-serif;
                font-size: 24px;
                color: #000;
                font-weight: 400;
            }
            .below-name{
                text-decoration: none;
                text-align: center;
                font-family: "Raleway", sans-serif;
                font-size: 16px;
                
            }
            .bold-text{
                text-decoration: none;
                font-family: "Raleway-B", sans-serif;
                font-size: 18px;
                color: #fff;
                margin-left: 30px;
            }
            .below-text{
                text-decoration: none;
                font-family: "Raleway", sans-serif;
                font-size: 20px;
                margin-left: 30px;
                color: #e8eef7;
            }
            .profile-desc{
                background-color: dimgray;
                padding: 10px;
                margin-left: 120px;
                margin-right: 120px;
            }
            .addUser{
                float: right;
                margin-top: -60px;
                padding: 20px;
            }
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }
            #admin_nav{
                float: left;
            }
            aside{
                float: left;
                color: white;
                padding: 20px;
            }
            .adminside{
                color: gray;
                font-weight: 10px;
                font-size: 20px;
                display: block;
            }
            #admin_field{
                margin-left: 50px;
            }
            #admin_panel{

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
                    @if(Auth::user()->role == 'Admin')
                        <a class="navbar-brand" href="{{ url('/administration/admin') }}">
                            <img src="{{ asset('images/whiteLogo.png') }}" class="logo">
                        </a>
                    @else
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            <img src="{{ asset('images/whiteLogo.png') }}" class="logo">
                        </a>
                    @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    @if (Auth::user()->role==='Admin')
                        <ul class="nav navbar-nav navbar-right">
                            
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
        @if (Auth::user()->role==='Admin')
        <div id="admin_nav">
                <aside>
                    <a class="adminside" href="{{ url('/users_record') }}">
                            Users Record
                    </a>
                    <a class="adminside" href="{{ url('/users_log') }}">
                                Users Log
                    </a>
                    <a class="adminside" href="{{ url('/borrowed') }}">
                                Equipment Borrowed
                    </a>
                    <a class="adminside" href="{{ url('/Equipments') }}">
                                Equipment
                    </a>
                    <a class="adminside" href="{{ url('/Reports') }}">
                                Reports
                    </a>
                    <a class="adminside" href="{{ url('/archive_users') }}">
                                Archive
                    </a>
                    
                </aside>
            </div>
        @endif
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>