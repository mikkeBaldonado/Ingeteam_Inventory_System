@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        @if(Auth::user()->role==='Admin')
            <div class="col-md-8 col-md-offset-2" id="admin_field">
                <div class="panel panel-default" id="admin_panel">
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
                                 @foreach($borrow as $borrowed)
                                    @if($value->id == $borrowed->equipments_id AND $borrowed->updated_at == NULL)
                                        <?php
                                            $borow = true;
                                            break;
                                        ?>
                                    @elseif($borrowed->updated_at != NULL)
                                        <?php
                                            $returned = true;
                                        ?>
                                    @else
                                        <?php 
                                            $borow = false; 
                                        ?>
                                    @endif    
                                @endforeach

                                <?php if($borow === true){ ?>
                                <tr>
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td> Borrowed </td>
                                    </tr>
                                <?php } elseif ($returned === true) { ?>
                                    <tr>
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td><a onclick="return myFunction();" href="{{ route('Equipments.destroy',[$value->id])}}"><button>Delete</button></a>&nbsp;
                                            <a href="{{ route('Equipments.edit',[$value->id])}}"> <button>Update</button></a>
                                            <!--
                                            <div class="modal fade" id="delete" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: gray;">
                                                         <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>

                                                    <div class="modal-body" id="delete">
                                                      <p>Are you sure you want to delete the existing file?</p>
                                                      <p>{{$value->id}}</p>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal">Close</button>
                                                          
                                                        <a href="{{ route('Equipments.destroy',[$value->id])}}">
                                                            <button>Confirm</button> 
                                                        </a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            -->
                                        </td>
                                    </tr>
                                <?php }else{ ?>
                                    <tr>
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td><button data-toggle="modal" data-target="#delete">Delete</button>&nbsp;
                                            <a href="{{ route('Equipments.edit',[$value->id])}}"> <button>Update</button></a>
                                            
                                            <div class="modal fade" id="delete" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: gray;">
                                                             <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>

                                                        <div class="modal-body" id="delete">
                                                          <p>Are you sure you want to delete the existing file?</p>
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <button data-dismiss="modal">Close</button>
                                                              
                                                            <a href="{{ route('Equipments.destroy',[$value->id])}}">
                                                                <button>Confirm</button> 
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                
                                @foreach($borrow as $borrowed)
                                    @if($value->id == $borrowed->equipments_id AND $borrowed->updated_at == NULL)
                                        <?php
                                            $borow = true;
                                            break;
                                        ?>
                                    @elseif($borrowed->updated_at != NULL)
                                        <?php
                                            $returned = true;
                                        ?>
                                    @else
                                        <?php 
                                            $borow = false; 
                                        ?>
                                    @endif    
                                @endforeach
                                
                                <?php if($borow === true){ ?>
                                    <tr>
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td> Borrowed </td>
                                    </tr>
                                <?php } elseif ($value->condition == 'Defective' OR $value->condition == 'To be Replaced') { ?>
                                    <tr>
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                        <td> <a href="{{ route('Equipments.edit',[$value->id])}}"> <button>Update</button></a> </td>
                                    </tr>
                                <?php } elseif ($returned === true) { ?>
                                    <tr>
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                         <td><a href="{{ route('Equipments.edit',[$value->id])}}"> <button>Update</button></a>&nbsp;
                                            <a href="{{ route('Borrows.store',[$value->id]) }}"> <button>Borrow</button></a>
                                        </td>
                                    </tr>
                                <?php }else{ ?>
                                    <tr>
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                         <td><a href="{{ route('Equipments.edit',[$value->id])}}"> <button>Update</button></a>&nbsp;
                                            <a href="{{ route('Borrows.store',[$value->id]) }}"> <button>Borrow</button></a>
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
