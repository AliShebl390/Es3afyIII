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
  <body style="background-color: #eee">
    <div class="burger-menu-container" id="lines-container">
      <div class="line line1" id="bar1"></div>
      <div class="line line2" id="bar2"></div>
      <div class="line line3" id="bar3"></div>
    </div>
    <div class="nav">
      <ol>
        <a href="completed-requests">history</a>
        <a href="contact-us">contact us</a>
        <a class="dropdown-item" href="{{ route('paramedic.logout') }}"
        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('paramedic.logout') }}" method="POST" class="d-none">
         @csrf
     </form>      
    </div>

    <div class="background"></div>

    <div class="paramedic-home-header"  style="justify-content: flex-end; background-color: #eee">
      <a href="profile">
        <img class="paramedic-img" src="/images/usersimgs/{{Auth::guard('paramedic')->user()->image}}" alt="" />
      </a>
    </div>
    <div style="height: 75%" id="map"></div>

    @foreach ($reqs as $onereq)
    <div class="request-section" style="height: 25vh; position: relative;">
      <div class="request-section1">
        <img class="user-img" src="/images/usersimgs/{{$onereq->userimage}}" alt="" />
        <div class="">
          <h2>{{$onereq->username}}</h2>
        </div>
      </div>

      <div class="request-section3">
            
        <a href="after-paramedic-accept-request/{{$onereq->userid}}/{{$onereq->id}}">
          <button style="cursor: pointer; width:250px;" class="accept-button">Accept</button>
        </a>
      </div>
    </div>
    @endforeach
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
<script 
  src="https://maps.googleapis.com/maps/api/js?AIzaSyB0GIMWRrw47lHDp8WX1W9_g-3b3-r6xs8&callback=initMap">
</script>

<script>
      function myFunction() {
  console.log("clicked");
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true) {
    text.innerText = "Online";
  } else {
    text.innerText = "Offline";
  }
}

const burgerMenuContainer = document.getElementById("lines-container");
const bar1 = document.getElementById("bar1");
const bar3 = document.getElementById("bar3");
const bar2 = document.getElementById("bar2");
const nav = document.querySelector(".nav");
const background = document.querySelector(".background");
  const burgerMenuOverlay = document.querySelector(".burger-menu-overlay");

burgerMenuContainer.addEventListener("click", function () {
  bar1.classList.toggle("line1-transform");
  bar3.classList.toggle("line3-transform");
  bar2.classList.toggle("line2-opacity");
  nav.classList.toggle("nav-display");
  background.classList.toggle("background-display");
});

burgerMenuOverlay.addEventListener("click", function () {
  bar1.classList.remove("line1-transform");
  bar3.classList.remove("line3-transform");
  bar2.classList.remove("line2-opacity");
  nav.classList.remove("nav-display");
  background.classList.remove("background-display");
});

    </script>
  </body>
</html>
