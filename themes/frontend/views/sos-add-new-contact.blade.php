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
    crossorigin="anonymous"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- meta for protection -->
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
      href="images/logo png.png"
    />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/media.css" />
  </head>
  <body>
    <div class="add-new-container sos-contact-container">
      <div class="add-new-content s-c-content">
        <div class="s-c-upper">
          <a href="sos-contacts"><i style="font-size: 35px" class="fas fa-arrow-alt-left"></i></a>
          <h1><span>Ne</span>w Contact</h1>
        </div>
        <form method="post" action="{{url('store-newContact')}}" enctype="multipart/form-data">
        <div class="add-new">
          <!-- header   -->
          @csrf
          <div class="bt1">
            <input type="file" name="sosphoto" class="custom-file-input2"/>
          </div>
          <div class="text">
            <a href="sos-add-new-contact">Avatar</a>
            <p>Upload A photo fo your contact</p>
          </div>
        </div>
        <div class="inputs">
            <input type="text" name="name" placeholder="Name" required/>
            <input type="number" name="phone" maxlength="11" minlength="11" placeholder="Phone number" required/>
            <div class="buttons">
              <button type="reset">Cancel</button>           
              <button type="submit" class="add">Add</button>           
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </body>
</html>
