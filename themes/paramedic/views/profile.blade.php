<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awsome library -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

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
      href="images/Untitled-1.png"
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

  <body style="overflow-y: scroll; overflow-x: hidden">
    <form method="post" action="{{url('paramedic/update')}}" enctype="multipart/form-data">
      @csrf 
      <div class="profile-overlay">
        <h1 style="margin-top: 60px">Edit your account</h1>
        <div class="profile-pic-div" style="margin: 50px 0 60px;
      }">
          <img id="profile-pic" src="/images/usersimgs/{{$para->image}}" alt=""/>
          <input type="file" id="file" name="image"/>
          <label for="file" id="upload-btn" style="padding-top: 2.5px">Choose file</label>
        </div>
        <i class="fas fa-times close-profile-overlay"></i>
        <input name="id" type="text" value="{{$para->id}}" hidden>
        <input class="overlay-input-firstname input-custom" name="name" type="text" value="{{$para->name}}" />
        <input class="overlay-input-mobile input-custom" name="phonenumber" type="text" value="{{$para->phonenumber}}" />
        <input class="overlay-input-email input-custom" name="email" type="text" value="{{$para->email}}" />
        <button type="submit" class="button-custom overlay-submit">Save Changes</button>
    </div>
    
    <div class="rating-header">
      <a href="http://es3afyiii.test/paramedic/home">
          <i class="fas fa-arrow-alt-left go-back"></i>
      </a>
      <h1>Edit your account</h1>
    </div>

    <div class="profile-container">
      <div
        style=" display: flex; align-items: center; justify-content: center; position: relative;" class="">
        <div class="profile-pic-div">
          <img id="profile-pic" src="/images/usersimgs/{{$para->image}}" alt=""/>
        </div>
        <i id="edit-icon" class="fas fa-edit ed"></i>
      </div>

      <div class="profile-section2">
        <h5>Name</h5>
        <p class="first-name">{{$para->name}}</p>

        <h5>Phone number</h5>
        <p class="mobile">{{$para->phonenumber}}</p>

        <h5>Email</h5>
        <p class="email">{{$para->email}}</p>
      </div>
    </div>
    </form>
    <script>
      const edd = document.querySelector(".ed");
      const inn = document.querySelectorAll(".in");

      const saveChanges = document.querySelector(".save-changes");
      const profileOverlay = document.querySelector(".profile-overlay");

      const firstNameInput = document.querySelector(".overlay-input-firstname");
      const lastNameInput = document.querySelector(".overlay-input-lastname");
      const mobileInput = document.querySelector(".overlay-input-mobile");
      const emailInput = document.querySelector(".overlay-input-email");
      const firstName = document.querySelector(".first-name");
      const lastName = document.querySelector(".last-name");
      const mobile = document.querySelector(".mobile");
      const email = document.querySelector(".email");
      const overlaySubmit = document.querySelector(".overlay-submit");
      const closeIcon = document.querySelector(".close-profile-overlay");
      edd.addEventListener("click", function () {
        profileOverlay.classList.toggle("profile-overlay-active");
        firstNameInput.value = firstName.innerHTML;
        lastNameInput.value = lastName.innerHTML;
        mobileInput.value = mobile.innerHTML;
        emailInput.value = email.innerHTML;
      });
      overlaySubmit.addEventListener("click", function () {
        profileOverlay.classList.toggle("profile-overlay-active");
        firstName.innerHTML = firstNameInput.value;
        lastName.innerHTML = lastNameInput.value;
        mobile.innerHTML = mobileInput.value;
        email.innerHTML = emailInput.value;
      });
      closeIcon.addEventListener("click", function () {
        profileOverlay.classList.toggle("profile-overlay-active");
      });

      const profilePicDiv = document.querySelector(".profile-pic-div");
      const uploadBtn = document.querySelector("#upload-btn");
      const file = document.querySelector("#file");
      const profilePic = document.querySelector("#profile-pic");

      file.addEventListener("change", function () {
        const choosedFile = this.files[0];
        if (choosedFile) {
          const reader = new FileReader();
          reader.addEventListener("load", function () {
            profilePic.setAttribute("src", reader.result);
          });
          reader.readAsDataURL(choosedFile);
        }
      });
    </script>
  </body>
</html>
