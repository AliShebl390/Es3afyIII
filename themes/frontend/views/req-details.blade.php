<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es3afy</title>
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/media.css">   
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo png.png"/>
<body>
    <div class="details-container">
        <div class="details-upper">
            <a href="/req-comp-for-user">
                <i class="fas fa-arrow-alt-left go-back"></i>
            </a>
            <h1><span>Re</span>quest's Details</h1>
        </div>
        <img src="/images/114036_OOLOG5_493-addc1e3de358e864b1d75e1d62824864.jpg" alt="">
        <div class="details-bottom">
            <div class="adrs1">
                <i style="font-size: 20px;" class="fas fa-calendar-alt"></i>
                <p>{{$details->timedate}}</p>
                </div>
                <div class="adrs2" style="flex-direction: column">
                    <p> 
                        <i class="fas fa-star" style="color: #ecec0a; font-size: 20px"></i>
                        {{$details->Rate}}
                    </p>
                        {{$details->feedback}}</p>
                    <p>
                </div>
        </div>
        <div class="details-button">
            <p>Feedbacks Helps Us To Improve!</p>
            <a href="/rating/{{$details->id}}">
                <button class="det-but">Give feedback</button>
            </a>
        </div>
    </div>
</body>
</html>