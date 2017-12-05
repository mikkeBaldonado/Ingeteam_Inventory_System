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
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            header{
                width: 100%;
                height: 70px;
                background-color: gray;
                color: white;
            }
            #login_header{
                width: 710px;
                margin-top: -8px;
                float: right;
            }
            input{
                font-weight: 500;
            }
            #login_header input{
                color: black;
                height: 30px;
            }
            .form-group{
                margin-right: -12px;

            }
            .has-error{
                margin-top: 1px;

            }
            .form-group label{
                margin-right: -20px;
                margin-top: 6px;
            }
            .btn-primary{
                width: 80px;
                margin-right: -80px;
                margin-left: -11px;
                font-weight: bold;
                background-color: gray;
                border-color: gray;
            }
            .btn-primary:hover{
                background-color: white;
                color: gray;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                width: 100%;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .btn-link{
                margin-right: 168px;
                margin-top: -7px;
                float: right;
                color: white;
                display: table-footer-group;
            }
            .btn-link:hover{
                color: black;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .panel{
                float: right;
                width: 500px;
                height: 550px;
                margin-top: -60px;
            }
            .container{
                margin-right: 0px;
            }
            .row{
                margin-left: 600px;
            }
            .ingeteam{
                margin-left: -120px;
                margin-top: 80px;
            }
            .system{
                float: left;
                margin-left: -505px;
                margin-top: 133px;
            }
            .system span{
                margin-left: 20px;
            }
            .headerLogo{
                float: left;
                margin-top: -33px;
                margin-left: 32px;
            }
            .whiteLogo{
                width: 220px;
                height: 80px;
            }
            .pop-up{
                text-align: center;
                width: 250px;
                background-color: white;
                border: 1px solid red;
                font-weight: bold;
                color: red;
                position: absolute;
                z-index: 1;
            }
            
        </style>
    </head>

    <body>
        <header>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <div class="headerLogo">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('images/whiteLogo.png') }}" class="whiteLogo">
                        </a>
                    </div>
                        <div id="login_header">
                            <form class="form-inline" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Username</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="pop-up">
                                                Invalid Username and Password!
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            LOG IN
                                        </button>
                                    </div>
                                </div>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </form>
                        </div>
                    @endif
                </div>
            @endif
        </header>
        <div class="container">
            <div class="ingeteam">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="{{ asset('images/welcomeLogo.png') }}" class="logo">
                </a>
                <h1 class="system"> I N V E N T O R Y <span>  S Y S T E M </span></h1>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <center>
                            <div class="panel-heading">
                                <h1 class="sign">Sign-up</h1></div>
                        </center>


                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Username</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
