@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        @if (Auth::user()->role==='Admin')
            <div class="col-md-8 col-md-offset-2" id="admin_field">
                <div class="panel panel-default" id="admin_panel" style="background-color: white">
                    <center><h1> Reports </h1> </center>
                    <div class="tab">
    					<button class="tablinks" onclick="openCity(event, 'Good')" id="defaultOpen">Good</button>
    					<button class="tablinks" onclick="openCity(event, 'Defective')">Defective</button>
    					<button class="tablinks" onclick="openCity(event, 'ToBeReplace')">To be Replace</button>
    				</div>
    				<div id="Good" class="tabcontent">
    					<table>
                        	<tr class="tableName">
        	                	<td>ID</td>
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
    						</tr>
                                @foreach($data as $value)

                        		<tr class="tableValue">
                        			@if ($value -> condition === "Good")
    	                    			<td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
    	    	                	@endif
                        		</tr>
                        		@endforeach
                        </table>
    				</div>

    				<div id="Defective" class="tabcontent">
    					<table>
                        	<tr class="tableName">
        	                	<td>ID</td>
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
        	                </tr>
        	                @foreach($data as $value)

                        		<tr class="tableValue">
                        			@if ($value -> condition === "Defective")
    	                    			<td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
    	    	                	@endif
                        		</tr>
                        	@endforeach
                        </table>
    				</div>

    				<div id="ToBeReplace" class="tabcontent">
    					<table>
                        	<tr class="tableName">
        	                	<td>ID</td>
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
        	                </tr>
        	                @foreach($data as $value)

                        		<tr class="tableValue">
                        			@if ($value -> condition === "To be Replaced")
    	                    			<td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
    	    	                	@endif
                        		</tr>
                        	@endforeach
        	                
                        </table>
    				</div>
                </div>
            </div>
        @else
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <center><h1> Reports </h1> </center>
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Good')" id="defaultOpen">Good</button>
                        <button class="tablinks" onclick="openCity(event, 'Defective')">Defective</button>
                        <button class="tablinks" onclick="openCity(event, 'ToBeReplace')">To be Replace</button>
                    </div>
                    <div id="Good" class="tabcontent">
                        <table>
                            <tr class="tableName">
                                <td>ID</td>
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
                            </tr>
                                @foreach($data as $value)

                                <tr class="tableValue">
                                    @if ($value -> condition === "Good")
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                    @endif
                                </tr>
                                @endforeach
                        </table>
                    </div>

                    <div id="Defective" class="tabcontent">
                        <table>
                            <tr class="tableName">
                                <td>ID</td>
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
                            </tr>
                            @foreach($data as $value)

                                <tr class="tableValue">
                                    @if ($value -> condition === "Defective")
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <div id="ToBeReplace" class="tabcontent">
                        <table>
                            <tr class="tableName">
                                <td>ID</td>
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
                            </tr>
                            @foreach($data as $value)

                                <tr class="tableValue">
                                    @if ($value -> condition === "To be Replaced")
                                        <td>{{ $value -> id}}</td>
                                        <td>{{ $value -> sap}}</td>
                                        <td>{{ $value -> parts}}</td>
                                        <td>{{ $value -> hs_code}}</td>
                                        <td>{{ $value -> condition}}</td>
                                    @endif
                                </tr>
                            @endforeach
                            
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
@endsection
