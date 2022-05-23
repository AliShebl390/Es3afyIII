<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
    <!-- Font Awsome library -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Es3afy</title>
    <!-- icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/Untitled-1.png"
    />
    <!-- Js -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/media.css" />
    <!-- script -->
  </head>
  <body style="overflow: hidden">
    <div class="splash-div">
      <div class="logo-container">
        <img
          class="logo animate__animated animate__rotateIn animate__infinite"
          src="./images/Untitled-1.png"
        />
      </div>
    </div>

    <div class="container">
      <div class="content-container">
      <form class="sign-up" method="post" action="{{url('store-user')}}">
      @csrf   
          <div class="sign-up">
          <h1 class="sign-up-h1">Sign Up</h1>

          <label for="name">Fullname</label>
          <input class="input-custom" type="text" placeholder="" name="name">

          <label for="email">E-mail</label>
          <input class="input-custom" type="email" placeholder="" name="email"/>

          <label for="password">password</label>
          <input class="input-custom" type="password" placeholder="" name="password"/>

          <label for="phonenum">Phone number</label>
          <input class="input-custom" type="tel" placeholder="" name="phonenum"/>

          <label for="birthday">Date of birth</label>
          <input name="birthday" class="input-custom" id="birthday" type="date" />

          <label for="gender">Gender</label>
          <select name="gender" id="gender" class="input-custom">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="bmi">
          <div class="">
          <img src="/images/Blood_cute_illustration_red_fresh_generated.jpg" alt="">
          <select name="bloodType" id="">
            <option value="">O-</option>
            <option value="">A+</option>
            <option value="">B+</option>
            <option value="">O+</option>
          </select>
          </div>
          <div class="">
            <img src="/images/weigth.jpg" alt="">
            <input type="text" name="" id="" placeholder="80 KG">
          </div>
           <div class="">
            <img style="object-fit:contain ;" src="/images/vecteezy_illustration-vector-graphic-of-size-chart_.jpg" alt="">
            <input type="text" name="" id="" placeholder="172 cm">
          </div>
        </div>

          <a href="medical-history.htm">
            <button class="button-custom" type="submit">Sign Up</button>
          </a>
          <p>
            Already have an account ?<br />
            <span class="log-in">Log in</span>
          </p>
        </div>
      </form>
      </div>
      
      <div class="content-container-2">
        <div class="content-container-3">
          <div class="sign-in">
            <h1 class="sign-in-h1">Sign In</h1>
          </div>

          <div class="inputs-container">
            <input class="input-custom" type="email" placeholder="E-mail" />
            <input
              class="input-custom"
              type="password"
              placeholder="Password"
            />
            <a href="home">
              <button class="button-custom">Sign In</button>
            </a>
            <a href="ForgetPassword" class="forget-password"
              >forgot your password ?</a
            >
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script>
      $('input[type="search"]').on("keypress", function(event){
    event.preventDefault();
    return false;
});
        setTimeout(function () {
      let viewheight = $(window).height();
      let viewwidth = $(window).width();
      let viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute(
        "content",
        "height=" +
          viewheight +
          "px, width=" +
          viewwidth +
          "px, initial-scale=1.0"
      );
    }, 300);
      const signInH1 = document.querySelector(".sign-in-h1");
      const contentContainer2 = document.querySelector(".content-container-2");
      const SignUpH1 = document.querySelector(".sign-up-h1");
      const contentContainer = document.querySelector(".content-container");
      const logIn = document.querySelector(".log-in");

      logIn.addEventListener("click", function () {
        contentContainer2.classList.add("sign-active");
        signInH1.classList.add("h1-scale");
        SignUpH1.classList.remove("h1-scale");
        console.log("hi");
      });

      SignUpH1.addEventListener("click", function () {
        contentContainer2.classList.remove("sign-active");
        signInH1.classList.remove("h1-scale");
        SignUpH1.classList.add("h1-scale");
      });

      // contentContainer.addEventListener("click", function () {
      //   contentContainer2.classList.remove("sign-active");
      //   signInH1.classList.remove("h1-scale");
      //   SignUpH1.classList.add("h1-scale");
      // });

      $(window).on("load", function () {
        $(".splash-div").fadeOut(2000);
      });
    </script>
  </body>
</html>
