@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Equipments Update</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Borrowed.update',$id)  }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('parts') ? ' has-error' : '' }}">
                            <label for="parts" class="col-md-4 control-label">Parts: </label>

                            <div class="col-md-6">
                                <input id="parts" type="text" class="form-control" name="parts" value="{{ $task['parts'] }}" required autofocus>

                                @if ($errors->has('parts'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('condition') ? ' has-error' : '' }}">
                            <label for="condition" class="col-md-4 control-label">Condition</label>

                            <div class="col-md-6">
                                <select id="condition" type="condition" class="form-control" name="condition" required>
                                    <option value="Good">Good</option>
                                    <option value="Defective">Defective</option>
                                    <option value="To be Replaced">To be Replaced</option>
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
                                    Submit
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
