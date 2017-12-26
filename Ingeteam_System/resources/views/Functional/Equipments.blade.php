@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        
        @if(Auth::user()->role==='Admin')
            <div class="col-md-8 col-md-offset-2" id="admin_field">
                <div class="panel panel-default" id="admin_panel">
                @if(session()->has('message.level'))
                    <div class="alert alert-{{ session('message.level') }}"> 
                        {!! session('message.content') !!}
                    </div>
                @endif
                <center>
              	    <h1> Equipments List </h1>
                	<a class="addUser" href="{{ route('Equipments.add') }}"> <button class="btn btn-primary">Add </button></a>
                    	<table>
                    		<tr class="tableName">
    	                		<td>ID</td>
                                <td>SAP</td>
    	                		<td>PARTS</td>
    	                		<td>HS CODE</td>
                                <td>CONDITION</td>
    	                		<td> Action </td>
    	                	</tr>

                    		@foreach($data as $value)
                            <?php 
                                $borows = false;
                                $returned = false; 
                            ?>
                                @foreach($borrow as $borrowed)
                                    @if($value->id == $borrowed->equipments_id AND $borrowed->updated_at == NULL)
                                        <?php
                                            $borows = true;
                                            break;
                                        ?>
                                    @elseif($borrowed->updated_at != NULL)
                                        <?php
                                            $returned = true;
                                        ?>
                                    @else
                                        <?php 
                                            $borows = false; 
                                        ?>
                                    @endif    
                                @endforeach

                                <?php if($borows === true){ ?>
                                <tr class="tableValue">
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td> Borrowed </td>
                                    </tr>
                                <?php } elseif ($returned === true) { ?>
                                    <tr class="tableValue">
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td><a onclick="return myFunction();" href="{{ route('Equipments.destroy',[$value->id])}}"><button class="btn btn-danger btn-sm">Delete</button></a>&nbsp;
                                            <a href="{{ route('Equipments.edit',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Update</button></a>
                                            
                                        </td>
                                    </tr>
                                <?php }else{ ?>
                                    <tr class="tableValue">
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td><a onclick="return myFunction();" href="{{ route('Equipments.destroy',[$value->id])}}"><button class="btn btn-danger btn-sm">Delete</button></a>&nbsp;
                                            <a href="{{ route('Equipments.edit',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Update</button></a>
                                            
                                        </td>

                                    </tr>
                                <?php }?>
                    		@endforeach
                    	</table>
                    </center>

                </div>
            </div>
        @else
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(session()->has('message.level'))
                        <div class="alert alert-{{ session('message.level') }}"> 
                            {!! session('message.content') !!}
                        </div>
                    @endif
                    <center>
                        <h1> Equipments List </h1>
                        <table>
                            <tr class="tableName">
                                <td>ID</td>
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
                                <td> Action </td>
                            </tr>
                            @foreach($data as $value)
                            <?php 
                                $borows = false;
                                $returned = false; 
                            ?>
                                @foreach($borrow as $borrowed)
                                    @if($value->id == $borrowed->equipments_id AND $borrowed->updated_at == NULL)
                                        <?php
                                            $borows = true;
                                            break;
                                        ?>
                                    @elseif($borrowed->updated_at != NULL)
                                        <?php
                                            $returned = true;
                                        ?>
                                    @else
                                        <?php 
                                            $borows = false; 
                                        ?>
                                    @endif    
                                @endforeach
                                
                                <?php if($borows === true){ ?>
                                    <tr class="tableValue">
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td> Borrowed </td>
                                    </tr>
                                <?php } elseif ($value->condition == 'Defective' OR $value->condition == 'To be Replaced') { ?>
                                    <tr class="tableValue">
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td> <a href="{{ route('Equipments.edit',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Update</button></a> </td>
                                    </tr>
                                <?php } elseif ($returned === true) { ?>
                                    <tr class="tableValue">
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                         <td><a href="{{ route('Equipments.edit',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Update</button></a>&nbsp;
                                            <a href="{{ route('Borrows.store',[$value->id]) }}"> <button class="btn btn-info btn-sm">Borrow</button></a>
                                        </td>
                                    </tr>
                                <?php }else{ ?>
                                    <tr class="tableValue">
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                         <td><a href="{{ route('Equipments.edit',[$value->id])}}"> <button class="btn btn-secondary btn-sm">Update</button></a>&nbsp;
                                            <a href="{{ route('Borrows.store',[$value->id]) }}"> <button class="btn btn-info btn-sm">Borrow</button></a>
                                        </td>
                                    </tr>
                                <?php }?> 
                            @endforeach
                        </table>
                    </center>
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
