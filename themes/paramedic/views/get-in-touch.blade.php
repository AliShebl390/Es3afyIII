<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- meta for protection -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../css/media.css"> 
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/logo png.png"
    />
</head>
<body>
    <div class="g-container">
        
        <img src="../images/istockphoto-1215342220-612x612.jpg" alt="">
        <a href="home"><i style="font-size: 35px" class="arr fas fa-arrow-alt-left"></i></a>
        <div class="g-content">
            <h1>Get in touch!</h1>
            <form method="post" action="{{url('paramedic/store-get-para')}}" enctype="multipart/form-data">
                @csrf
                <div class="con1">
                    <label for="name">Name</label> 
                    <input name="name" type="text" id="name" placeholder="Please type Your name!">
                </div>
                <div class="con2">
                    <label for="email">Email</label>
                    <input name="email" type="email" id="email" placeholder="Example@email.com">    
                </div>
                <div class="cont3">
                    <label for="name">Message</label>
                    <input name="message" type="" id="name" class="m-box" placeholder="type your message here">
                </div>
                <button type="submit" style="border: none;">
                    <i style=" cursor: pointer;" class="send fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</body>
</html>