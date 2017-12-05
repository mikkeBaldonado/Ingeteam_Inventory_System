@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="admin_field">
            <div class="panel panel-default" id="admin_panel">
                <center>
              	    <h1> Borrowed List </h1>
                	 @if (Auth::user()->role==='admin')
                        <a class="addUser" href="{{ route('Equipments.add') }}"> <button>Update </button></a>
                    	<table>
                    		<tr class="tableName">
                                <td>NAME</td>
                                <td>EMAIL</td>
    	                		<td>PARTS</td>
    	                		<td>CONDITION</td>
                                <td>Borrowed Time</td>
                                <td>Returned Time</td>
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
