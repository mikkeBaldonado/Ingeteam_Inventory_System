@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" id="admin_field">
            <div class="panel panel-default" id="admin_panel">
                <center style="background-color: white">
                    <center><h1> Archive List </h1> </center>
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'Users')" id="defaultOpen">Users</button>
                        <button class="tablinks" onclick="openCity(event, 'Equipments')">Equipments</button>
                    </div>
                    <div id="Users" class="tabcontent">
                        <table>
                            <tr class="tableName">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Username</td>
                                <td>E-mail</td>
                                <td>Role</td>
                            </tr>
                            @foreach($users as $value)

                                <tr>
                                    <td>{{ $value -> id}}</td>
                                    <td>{{ $value -> name}}</td>
                                    <td>{{ $value -> username }}</td>
                                    <td>{{ $value -> email}}</td>
                                    <td>{{ $value -> role}}</td>
                                </tr>
                            @endforeach
                           
                        </table>
                    </div>

                    <div id="Equipments" class="tabcontent">
                        <table>
                            <tr class="tableName">
                                <td>SAP</td>
                                <td>PARTS</td>
                                <td>UNITS</td>
                                <td>HS CODE</td>
                                <td>CONDITION</td>
                            </tr>
                            @foreach($equipments as $value)

                                <tr>
                                    <td>{{ $value -> sap}}</td>
                                    <td>{{ $value -> parts}}</td>
                                    <td>{{ $value -> units }}</td>
                                    <td>{{ $value -> hs_code}}</td>
                                    <td>{{ $value -> conditions}}</td>
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
document.getElementById("defaultOpen").click();
</script>
@endsection
