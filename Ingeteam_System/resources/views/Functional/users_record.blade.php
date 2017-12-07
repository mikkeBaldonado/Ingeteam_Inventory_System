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

                                <tr>
                                    <td>{{ $value -> id}}</td>
                                    <td>{{ $value -> name}}</td>
                                    <td>{{ $value -> username }}</td>
                                    <td>{{ $value -> email}}</td>
                                    <td>{{ $value -> role}}</td>
                                    <td><a href="{{ route('users_record.edit',[$value->id])}}"> <button>Update</button></a>&nbsp;
                                        <a onclick="return myFunction();" href="{{ route('users_record.delete',[$value->id])}}"><button>Delete</button></a>&nbsp;
                                        <a href="{{ route('users_record.password',[$value->id])}}"> <button>Reset</button></a>
                                        <!--<button data-toggle="modal" data-target="#delete">Delete</button> -->
                                        <!--
                                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"style="color: gray;">
                                                         <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body" id="delete">
                                                      <p>Are you sure you want to delete the existing file?</p>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal">Close</button>
                                                          
                                                        <a href="{{ route('users_record.delete',[$value->id])}}">
                                                            <button>Confirm</button> 
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        -->
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
                                <p class="name">{{ Auth::user()->name }}</p>
                                <p class="below-name uk-padding-remove">
                                    {{ Auth::user()->role }}
                                    <br>{{ Auth::user()->email }}
                                </p>
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
