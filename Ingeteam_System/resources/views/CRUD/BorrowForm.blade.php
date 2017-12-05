@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Borrowing Form</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Borrows.stored',$id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::User()->name }}" readonly autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::User()->email }}" readonly>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('equipments_id') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Equipments ID</label>

                            <div class="col-md-6">
                                <input id="equipments_id" type="" class="form-control" name="equipments_id" value="{{ $task['id'] }}" readonly>

                                @if ($errors->has('equipments_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('equipments_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('parts') ? ' has-error' : '' }}">
                            <label for="parts" class="col-md-4 control-label">Parts: </label>

                            <div class="col-md-6">
                                <input id="parts" type="text" class="form-control" name="parts" value="{{ $task['parts'] }}" readonly autofocus>

                                @if ($errors->has('parts'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('units') ? ' has-error' : '' }}">
                            <label for="units" class="col-md-4 control-label">Units: </label>

                            <div class="col-md-6">
                                <input id="units" type="text" class="form-control" name="units" value="{{ $task['units'] }}" required autofocus>

                                @if ($errors->has('units'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('units') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('condition') ? ' has-error' : '' }}">
                            <label for="condition" class="col-md-4 control-label">Condition</label>

                            <div class="col-md-6">
                                <select id="condition" type="condition" class="form-control" name="condition" required>
                                    <option value="{{ $task['condition'] }}">{{ $task['condition'] }}</option>
                                </select>
                                @if ($errors->has('condition'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('condition') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Confirm Borrow
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
