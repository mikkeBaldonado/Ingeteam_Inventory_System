@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        @if (Auth::user()->role==='Admin')
            <div class="col-md-8 col-md-offset-2" id="admin_field">
                <div class="panel panel-default" id="admin_panel">
                    @if(session()->has('message.level'))
                        <div class="alert alert-{{ session('message.level') }}"> 
                            {!! session('message.content') !!}
                        </div>
                    @endif
                    <center>
                    	<h1> User's Record </h1>
                            <a class="addUser" href="{{ route('users_record.add') }}"> <button class="btn btn-primary">Add User</button></a>
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
                                    @if ($value->role ==='Admin')
                                        <tr class="tableValue">
                                            <td>{{ $value -> id}}</td>
                                            <td>{{ $value -> name}}</td>
                                            <td>{{ $value -> username }}</td>
                                            <td>{{ $value -> email}}</td>
                                            <td>{{ $value -> role}}</td>
                                            <td><a href="{{ route('users_record.edit',[$value->id])}}"> <button  class="btn btn-secondary btn-sm">Update</button></a>&nbsp;
                                                <a href="{{ route('users_record.password',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Reset</button></a>
                                                
                                            </td>
                                        </tr>
                                    @else
                                        <tr class="tableValue">
                                            <td>{{ $value -> id}}</td>
                                            <td>{{ $value -> name}}</td>
                                            <td>{{ $value -> username }}</td>
                                            <td>{{ $value -> email}}</td>
                                            <td>{{ $value -> role}}</td>
                                            <td><a href="{{ route('users_record.edit',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Update</button></a>&nbsp;
                                                <a onclick="return myFunction();" href="{{ route('users_record.delete',[$value->id])}}"><button class="btn btn-danger btn-sm">Delete</button></a>&nbsp;
                                                <a href="{{ route('users_record.password',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Reset</button></a>
                                                
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                    </center>
                </div>
            </div>
        @else
            <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="profile  panel-default">
                            @if(session()->has('message.level'))
                                <div class="alert alert-{{ session('message.level') }}"> 
                                {!! session('message.content') !!}
                                </div>
                            @endif

                            <h1> Profile </h1>
                            <a class="addUser" href="{{ route('users_record.edit',[Auth::user()->id])}}"><button class="btn btn-primary">Edit Profile</button></a>

                            <a class="addUser" href="{{ route('users_record.password',[Auth::user()->id])}}"><button class="btn btn-primary">Change Password</button></a>
                            <center style="margin-left: 36%;">
                                <img src="{{ asset('images/user.png') }}"  style="width: 200px; height: 190px;">
                                
                            </center>
                            <center>
                                <div class="info">
                                    <p class="name">{{ Auth::user()->name }}</p>
                                    <p class="below-name uk-padding-remove">
                                        {{ Auth::user()->role }}
                                        <br>{{ Auth::user()->email }}
                                    </p>
                                </div>
                            </center>
                            <div class="profile-desc">
                                <p class="bold-text">USER ID: 
                                <span class="below-text">{{ Auth::user()->id }}</span></p>
                                <p class="bold-text">USERNAME: 
                                <span class="below-text">{{ Auth::user()->username }}</span></p>
                                <br>
                                <p class="bold-text">ACCOUNT CREATED:
                                <span class="below-text">{{ Auth::user()->created_at }}</span></p>
                                <p class="bold-text">ACCOUNT UPDATED: 
                                <span class="below-text">{{ Auth::user()->updated_at }}</span></p>
                            </div>
                            
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this data?"))
      event.preventDefault();
  }
 </script>
@endsection
