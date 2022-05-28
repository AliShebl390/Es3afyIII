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
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/media.css"> 
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/logo png.png"
    />
  </head>
  <body style="overflow: hidden; background-color:">
    
    <div class="home-container">
  <div class="burger-menu-container" id="lines-container">
  <div class="line line1" id="bar1"></div>
  <div class="line line2" id="bar2"></div>
  <div class="line line3" id="bar3"></div>
</div>
<div class="nav">
  <ol>
      <a href="medical-history-menu">medical history</a>
      <a href="sos-contacts">SOS contacts</a>
      <a href="req-comp-for-user">my requests</a>
      <a href="get-in-touch">contact us</a>
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
          onclick="event.preventDefault();                        document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
 </ol>
</div>
<div class="background"></div>
  <div class="home-header">
     <a href="profile">
       <div class="profile-image">
         <img id="profile-pic" src="images/usersimgs/{{Auth::user()->image}}"alt=""/> 
       </div>
     </a>
  </div>
  <div class="emergency-section">
    <h1>Keep Calm!</h1>
    <p>Press the button below and help<br> will be on the way</p>
    <a style="display: flex;justify-content: center;" href="respondersOnTheWay">
    <img src="./images/—Pngtree—vector red warning light_5454124.png" alt="">
    </a>
    </div>
    <div class="sos-section">
      <i class="fas fa-phone-alt phone-icon "></i> 
      
            <div class="sos-contact-div">
          @foreach ($soscontacts as $sos)  
          <a href="tel:+20{{$sos->phonenumber}}">
            <img class="sos-contact"  src="images/usersimgs/{{$sos->sosphoto}}" alt="">
            </a>  
        @endforeach 
        </div>
    </div>
  </div>
</body>
<script>

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
      burgerMenuOverlay.style.display = "block";
    });

    const phoneImage = document.querySelector(".phone-icon");
    const sosContactsDiv = document.querySelector('.sos-contact-div')
    phoneImage.addEventListener("click", function () {
      sosContactsDiv.classList.toggle('activeSos')
      console.log('hi')
    });

    burgerMenuOverlay.addEventListener("click", function () {
      bar1.classList.remove("line1-transform");
      bar3.classList.remove("line3-transform");
      bar2.classList.remove("line2-opacity");
      nav.classList.remove("nav-display");
      background.classList.remove("background-display");
    });
</script>
</html>