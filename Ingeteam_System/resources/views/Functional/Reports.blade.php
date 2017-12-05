@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><h1> Reports </h1> </center>
                <div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Good')">Good</button>
					<button class="tablinks" onclick="openCity(event, 'Defective')">Defective</button>
					<button class="tablinks" onclick="openCity(event, 'ToBeReplace')">To be Replace</button>
				</div>
				<div id="Good" class="tabcontent">
					<table>
                    	<tr class="tableName">
    	                	<td>SAP</td>
    	                	<td>PARTS</td>
    	                	<td>UNITS</td>
    	                	<td>HS CODE</td>
                            <td>CONDITION</td>
						</tr>
                            @foreach($data as $value)

                    		<tr>
                    			@if ($value -> condition === "Good")
	                    			<td>{{ $value -> sap}}</td>
	    	                		<td>{{ $value -> parts}}</td>
	    	                		<td>{{ $value -> units }}</td>
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
    	                	<td>SAP</td>
    	                	<td>PARTS</td>
    	                	<td>UNITS</td>
    	                	<td>HS CODE</td>
                            <td>CONDITION</td>
    	                </tr>
    	                @foreach($data as $value)

                    		<tr>
                    			@if ($value -> condition === "Defective")
	                    			<td>{{ $value -> sap}}</td>
	    	                		<td>{{ $value -> parts}}</td>
	    	                		<td>{{ $value -> units }}</td>
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
    	                	<td>SAP</td>
    	                	<td>PARTS</td>
    	                	<td>UNITS</td>
    	                	<td>HS CODE</td>
                            <td>CONDITION</td>
    	                </tr>
    	                @foreach($data as $value)

                    		<tr>
                    			@if ($value -> condition === "To be Replaced")
	                    			<td>{{ $value -> sap}}</td>
	    	                		<td>{{ $value -> parts}}</td>
	    	                		<td>{{ $value -> units }}</td>
	    	                		<td>{{ $value -> hs_code}}</td>
	    	                		<td>{{ $value -> condition}}</td>
	    	                	@endif
                    		</tr>
                    	@endforeach
    	                
                    </table>
				</div>
            </div>
        </div>
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
</script>
@endsection
