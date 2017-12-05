@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center>
              	    <h1> Equipments List </h1>
                	 @if (Auth::user()->role==='admin')
                        <a class="addUser" href="{{ route('Equipments.add') }}"> <button>Add </button></a>
                    	<table>
                    		<tr class="tableName">
                                <td>NAME</td>
                                <td>EMAIL</td>
    	                		<td>SAP</td>
    	                		<td>PARTS</td>
    	                		<td>UNITS</td>
    	                		<td>HS CODE</td>
                                <td>CONDITION</td>
    	                		<td> Action </td>
                                <td>Borrowed Time</td>
                                <td>Returned Time</td>
                                <td> Actions </td>
    	                	</tr>

                    	</table>
                    @else
                    	<table>
                    		<tr class="tableName">
    	                		<td>SAP</td>
    	                		<td>PARTS</td>
    	                		<td>UNITS</td>
    	                		<td>HS CODE</td>
                                <td>CONDITION</td>
    	                		<td> Action </td>
    	                	</tr>
                    	</table>
                    @endif
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
