@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="admin_field">
            <div class="panel panel-default" id="admin_panel">
                <center>
              	    <h1> Borrowed List </h1>
                	 @if (Auth::user()->role==='Admin')
                        <table>
                    		<tr class="tableName">
                                <td>NAME</td>
                                <td>EMAIL</td>
                                <td>Equipments ID</td>
    	                		<td>PARTS</td>
    	                		<td>CONDITION</td>
                                <td>Borrowed Time</td>
                                <td>Returned Time</td>
                                <td>Action</td>
    	                	</tr>
                            @foreach($data as $value)
                                @if($value->updated_at == NULL)
                                    <tr class="tableValue">
                                        <td>{{ $value -> name}}</td>
                                        <td>{{ $value -> email}}</td>
                                        <td>{{ $value -> equipments_id }}</td>
                                        <td>{{ $value -> parts }}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td>{{ $value -> created_at}}</td>
                                        <td>{{ $value -> updated_at}}</td>
                                        <td><a href="{{ route('Borrowed.edit',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Update</button></a>
                                        </td>
                                    </tr>
                                @else
                                    <tr class="tableValue">
                                        <td>{{ $value -> name}}</td>
                                        <td>{{ $value -> email}}</td>
                                        <td>{{ $value -> equipments_id }}</td>
                                        <td>{{ $value -> parts }}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td>{{ $value -> created_at}}</td>
                                        <td>{{ $value -> updated_at}}</td>
                                        <td> Returned </td>
                                    </tr>
                                @endif
                            @endforeach

                    	</table>
                    @else
                    	
                    @endif
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
