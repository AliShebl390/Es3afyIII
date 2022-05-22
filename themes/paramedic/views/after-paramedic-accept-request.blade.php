<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awsome library -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/869711923d.js"
      crossorigin="anonymous"
    ></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Es3afy</title>
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../images/logo png.png"
    />
    <link rel="stylesheet" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="/css/media.css" />

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="background"></div>

    <div id="map"></div>

    <div class="request-section">
      <!--view user medical history when accept -->
      <div class="request-section1">
        <img class="user-img" src="/images/{{$user->image}}" alt="" />
        <div class="">
          <h2>{{$user->name}}</h2>
          <a style="margin-top: 10px; display: block; color: var(--light)" href="http://es3afy.test/paramedic/current-user-medical-history">View medical history</a>
        </div>
      </div>

      <div class="request-section2">
        <div class="paragraph-wrapper">
          <h4 style="margin-bottom: 10px">Patient Details:</h4>
          <p>
            Age: {{$user->age}}
          </p>
          <p style="margin-bottom: 7px;">
            Phone Number: {{$user->phonenumber}}
            <a style="color: rgb(40, 120, 181)" href="tel:{{$user->phonenumber}}"><i style="margin-left: 5px; font-size: 25px" class="fas fa-phone"></i></a>
          </p>
          <p style="text-transform: capitalize ;margin-bottom: 7px">
            Gender: {{$user->gender}}
          </p>
          <p style="margin-bottom: 7px">
            Bloodtype: {{$user->bloodType}}
          </p>
          <p style="margin-bottom: 7px">
            Height: {{$user->height}}CM
          </p>
          <p style="margin-bottom: 7px">
            Weight: {{$user->weight}}KG
          </p>
        </div>
      </div>

    <script>
      let map;
      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 30.0592099, lng: 31.3074362},
          zoom: 15,
          panControl: true,
        });
        var markercenter = new google.maps.LatLng(30.0592099,31.3074362);
        var marker = new google.maps.Marker({
          position:markercenter,
        });
        marker.setMap(map);
    }
      </script>  
      <script async
        src="https://maps.googleapis.com/maps/api/js?AIzaSyB0GIMWRrw47lHDp8WX1W9_g-3b3-r6xs8&callback=initMap">
    </script>
    <script src="/js/paramedic.js"></script>
  </body>
</html>