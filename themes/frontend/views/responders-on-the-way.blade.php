<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awsome library -->
    <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"/> 
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es3afy</title>
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/logo png.png"
    />
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/media.css">   
</head>
<body>
<div class="responders-container">
        <a href="home">
                <i style="font-size: 35px; margin-top: 15px;margin-left: 15px;" class="fas fa-arrow-alt-left"></i>
        </a>
    <div class="responders-main">
        <img src="./images/3855168.jpg" alt="">

        <h4>Ambulance And Responders will be On The Way</h4>
        
        <p>Please give us permission to track your current location</p>
        <p>Speak Carfully To The Person Until The Paramedicals Arrive, Responders Are On The Way </p>

        <form method="post" action="{{url('request')}}">
            @csrf   
            <input type="text" name="userId" hidden>
            <input type="text" name="timedate" value="{{date('Y-m-d', time())}}" hidden>
            <input id="long" type="text" name="longitude" hidden>
            <input id="lat" type="text" name="latitude" hidden>
                <button type="submit" class="button1 button-custom">Proceed request</button>
        </form>
            <a href="home">
                <button class="button2">cancel request</button>
            </a>
        </div>
    </div>
<script>
const lat = document.getElementById("lat");
const long = document.getElementById("long");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        console.log('error')
    }
}

function showPosition(position) {
console.log( "Latitude: " + position.coords.latitude + 
"<br>Longitude: " + position.coords.longitude);
lat.value = position.coords.latitude;
long.value = position.coords.longitude;
}
getLocation();
// console.log('hi')
    </script>
</body>
</html>