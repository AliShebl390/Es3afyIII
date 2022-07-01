<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/Untitled-1.png"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body style="overflow-y: scroll;">
    <div class="n-id-container">
      <a href="medical-history">
        <i class="fas fa-arrow-alt-left go-back"></i>
      </a>
      <div class="n-id-header">
        <a href="national-id-front">
          <button class="button-custom"><span>Front</span></button>
        </a>
        <a href="#">
          <button class="button-custom">Back</button>
        </a>
        <a href="#">
          <button class="button-custom">Selfie</button>
        </a>
      </div>
      <div class="ic-text">
          <div class="profile-pic-div-id">
          <img
            id="profile-pic-id"
            src="/images/istockphoto-612650934-612x612.jpg"
            alt=""
          />
          
        </div>
        <p>
      Please provide a photo of the <br />
      front side of your national ID
    </p>
      </div>
      <div class="n-id-bottom">
        <div class="buttons">
          <div class="bt1">
            <form method="post" enctype="multipart/form-data" action="{{url('store-nidfront')}}">
              @csrf 
              {{-- <input type="text"  value="{{$user->id}}"/> --}}
                  <input type="file" id="file-id" name="front" required/>
                  <label for="file-id" id="upload-btn-id"> choose file </label>
                </div>
                <div class="bt2">
                    <a href="naitonal-id-back">
                        <button type="submit" class="button-custom">Next</button>
                    </a>
                </form>
          </div>
        </div>
      </div>
    </div>
    <script>
              const profilePicDiv = document.querySelector(".profile-pic-div-id");
      const uploadBtn = document.querySelector("#upload-btn-id");
      const file = document.querySelector("#file-id");
      const profilePic = document.querySelector("#profile-pic-id");

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
