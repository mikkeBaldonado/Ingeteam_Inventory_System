@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        @if (Auth::user()->role==='admin')
            <div class="col-md-8 col-md-offset-2" id="admin_field">
                <div class="panel panel-default" id="admin_panel">
                <center>
              	    <h1> Equipments List </h1>
                	<a class="addUser" href="{{ route('Equipments.add') }}"> <button>Add </button></a>
                    	<table>
                    		<tr class="tableName">
    	                		<td>SAP</td>
    	                		<td>PARTS</td>
    	                		<td>UNITS</td>
    	                		<td>HS CODE</td>
                                <td>CONDITION</td>
    	                		<td> Action </td>
    	                	</tr>

                    		@foreach($data as $value)

                    		<tr>
                    			<td>{{ $value -> sap}}</td>
    	                		<td>{{ $value -> parts}}</td>
    	                		<td>{{ $value -> units }}</td>
    	                		<td>{{ $value -> hs_code}}</td>
    	                		<td>{{ $value -> condition}}</td>
                                <td><a href="{{ route('Equipments.destroy',[$value->id])}}"> <button>Delete</button></a>&nbsp;
    	                			<a href="{{ route('Equipments.edit',[$value->id])}}"> <button>Update</button></a>
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
                    <center>
                        <h1> Equipments List </h1>
                        <table>
                            <tr class="tableName">
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>UNITS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
                                <td> Action </td>
                            </tr>

                            @foreach($data as $value)

                            <tr>
                                <td>{{ $value -> sap}}</td>
                                <td>{{ $value -> parts}}</td>
                                <td>{{ $value -> units }}</td>
                                <td>{{ $value -> hs_code}}</td>
                                <td>{{ $value -> condition}}</td>
                                 <td><a href="{{ route('Equipments.edit',[$value->id])}}"> <button>Update</button></a>&nbsp;
                                    <a href="{{ route('Borrows.store',[$value->id]) }}"> <button>Borrow</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </center>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
