<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/media.css">   
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo png.png"/>
</head>
<body>
    <div class="req-container">
        <div class="req-header">
            <a style="font-size: 32px;" href="home"><i class="fas fa-arrow-alt-left"></i></a>
            <h1><span>My</span> requests</h1>
        </div>
        <div class="req-content">
    @foreach($history_data as $onereq)
            <a href="req-details/{{$onereq->id}}">
                <div class="req-process">
                    <p>{{$onereq->timedate}}</p>
                    <img src="images/114036_OOLOG5_493-addc1e3de358e864b1d75e1d62824864.jpg" alt="">
                    <p>Your paramedic was: {{$onereq->paramidicName}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</body>
</html>