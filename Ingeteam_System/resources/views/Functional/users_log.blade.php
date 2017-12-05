@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="admin_field">
            <div class="panel panel-default" id="admin_panel">
                <center>
                        <h1> User's Log</h1>
                        <table>
                    		<tr class="tableName">
    	                		<td>Name</td>
    	                		<td>E-mail</td>
    	                		<td> Actions </td>
    	                		<td> Activities </td>

    	                	</tr>
                            
                    	</table>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
