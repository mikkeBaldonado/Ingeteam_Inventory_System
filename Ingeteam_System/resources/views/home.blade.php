@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{ url('/users_record') }}" ><img src="{{ asset('images/userIcon.png') }}" class="functions"></a>
                <a href="{{ url('/users_log') }}" ><img src="{{ asset('images/usersLogIcon.png') }}" class="functions"></a>
                <a href="{{ url('/Equipments') }}" ><img src="{{ asset('images/equipmentsIcon.png') }}" class="functions"></a>
                <a href="{{ url('/Reports') }}" ><img src="{{ asset('images/reportsIcon.png') }}" class="functions"></a>
            </div>
        </div>
    </div>
</div>
@endsection
