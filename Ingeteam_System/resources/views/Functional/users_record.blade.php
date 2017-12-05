@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        @if (Auth::user()->role==='admin')
            <div class="col-md-8 col-md-offset-2" id="admin_field">
                <div class="panel panel-default" id="admin_panel">
                    <center>
                    	<h1> User's Record </h1>
                            <a class="addUser" href="{{ route('users_record.add') }}"> <button>Add User</button></a>
                            <table>
                                <tr class="tableName">
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Username</td>
                                    <td>E-mail</td>
                                    <td>Role</td>
                                    <td> Action </td>
                                </tr>

                                @foreach($data as $value)

                                <tr>
                                    <td>{{ $value -> id}}</td>
                                    <td>{{ $value -> name}}</td>
                                    <td>{{ $value -> username }}</td>
                                    <td>{{ $value -> email}}</td>
                                    <td>{{ $value -> role}}</td>
                                    <td><a href="{{ route('users_record.edit',[$value->id])}}"> <button>Update</button></a>&nbsp;
                                        <a href="{{ route('users_record.delete',[$value->id])}}"> <button>Delete</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                    </center>
                </div>
            </div>
        @else
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="profile">
                            <center><h1> Profile </h1></center>
                            <a class="addUser" href="{{ route('users_record.edit',[Auth::user()->id])}}"> <button>Edit</button></a>
                            <h3> Name: <span>{{ Auth::user()->name }}</span></h3>
                            <h3> Username: <span>{{ Auth::user()->username }}</span></h3>
                            <h3> Email: <span>{{ Auth::user()->email }}</span></h3>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
