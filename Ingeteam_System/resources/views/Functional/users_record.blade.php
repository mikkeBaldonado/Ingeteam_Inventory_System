@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center>
                	<h1> User's Record </h1>
                	<table>
                		<tr class="tableName">
	                		<td>ID</td>
	                		<td>Name</td>
	                		<td>Username</td>
	                		<td>Password</td>
	                		<td>E-mail</td>
	                		<td> Action </td>
	                	</tr>

                		@foreach($data as $value)

                		<tr>
                			<td>{{ $value -> id}}</td>
	                		<td>{{ $value -> name}}</td>
	                		<td>{{ $value -> username }}</td>
	                		<td>{{ $value -> password }}</td>
	                		<td>{{ $value -> email}}</td>
	                		<td> <a href=""> <button>Add</button></a>&nbsp;
	                			<a href=""> <button>Delete</button></a>&nbsp;
	                			<a href=""> <button>Update</button></a>
	                		</td>
                		</tr>
                		@endforeach
                	</table> 
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
