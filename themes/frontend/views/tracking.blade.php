<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awsome library -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://kit.fontawesome.com/869711923d.js" crossorigin="anonymous"></script>  
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
  <link rel="stylesheet" href="../css/stylesheet.css" />
  <link rel="stylesheet" href="../css/media.css">
  </head>
  <body>
    <a href="/home">
      <div class="tracking-header">
          <button style="border-radius: 5px" class="button2">cancel request</button>
        </div>
    </a>
        <div id="map"></div>
      <div class="tracking-footer">
 <div class="first-section">
   <img src="/images/usersimgs/{{$para->image}}" alt="">
          <h3>{{$para->name}}</h3>
          <a href="tel:+20{{$para->phonenumber}}">
            <i style="font-size: 35px" class="fas fa-phone-alt"></i>
          </a>
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


</html>
