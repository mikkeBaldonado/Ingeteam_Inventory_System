@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('/Equipments') }}" >
                        <button type="submit" class="btn btn-primary" style="background-color: gray">
                            BACK
                        </button>
                    </a>
                    <center>Equipments</center>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('Equipments.create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('sap') ? ' has-error' : '' }}">
                            <label for="sap" class="col-md-4 control-label">SAP</label>

                            <div class="col-md-6">
                                <input id="sap" type="text" class="form-control" name="sap" value="{{ old('sap') }}" required autofocus autocomplete="on">

                                @if ($errors->has('sap'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sap') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('parts') ? ' has-error' : '' }}">
                            <label for="parts" class="col-md-4 control-label">Parts: </label>

                            <div class="col-md-6">
                                <input id="parts" type="text" class="form-control" name="parts" value="{{ old('parts') }}" required autofocus>

                                @if ($errors->has('parts'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('units') ? ' has-error' : '' }}">
                            <label for="units" class="col-md-4 control-label">Units:</label>

                            <div class="col-md-6">
                                <input id="units" type="units" class="form-control" name="units" value="{{ old('units') }}" required>

                                @if ($errors->has('units'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('units') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hs_code') ? ' has-error' : '' }}">
                            <label for="hs_code" class="col-md-4 control-label">HS Code</label>

                            <div class="col-md-6">
                                <input id="hs_code" type="hs_code" class="form-control" name="hs_code" required>

                                @if ($errors->has('hs_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hs_code') }}</strong>
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
                                <button  onclick="return myFunction();" type="submit" class="btn btn-primary">
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
<script>
  function myFunction() {
      if(!confirm("Are You Sure to add this Equipment/s?"))
      event.preventDefault();
  }
 </script>
@endsection
