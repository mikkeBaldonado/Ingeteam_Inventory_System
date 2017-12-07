@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if (Auth::user()->role==='Admin')
                    <div class="panel-heading">
                        <a href="{{ url('/users_record') }}" >
                            <button type="submit" class="btn btn-primary" style="background-color: gray">
                                BACK
                            </button>
                        </a>
                        <center> Reset Password </center>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ action('Auth\RegisterController@changePassword',$id) }}">
                            {{ csrf_field() }}


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
                                    <a onclick="return myFunction();" href="{{ url('/users_record') }}"><button type="submit" class="btn btn-primary">
                                        Submit
                                    </button></a>
                                </a>
                                </div>
                            </div>
                        </form>
                    </div>
                @else
                    
                    <div class="panel-heading">
                        <a href="{{ url('/users_record') }}" >
                            <button type="submit" class="btn btn-primary" style="background-color: gray">
                                BACK
                            </button>
                        </a>
                        <center> Change Password </center>
                    </div>

                    @if(session()->has('message.level'))
                        <div class="alert alert-{{ session('message.level') }}"> 
                            {!! session('message.content') !!}
                        </div>
                    @endif
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('users_record.change', [Auth::user()->id]) }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Old Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>
    
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="new_password" class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input id="new_password" type="password" class="form-control" name="new_password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="new_password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="new_password-confirm" type="password" class="form-control" name="new_password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a onclick="return myFunction();" href="{{ url('/users_record') }}"><button type="submit" class="btn btn-primary">
                                        Submit
                                    </button></a>
                                    
                                </a>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        if(!confirm("Are You Sure to save this changes?"))
            event.preventDefault();
    }
</script>
@endsection
