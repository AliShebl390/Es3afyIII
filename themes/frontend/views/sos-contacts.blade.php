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
    crossorigin="anonymous"/>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es3afy</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo png.png"/>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/media.css"> 
</head>
<body>
    <div class="sos-contact-container">
        <div class="s-c-content">
            <div class="s-c-upper">
                <a href="/home">              
                    <i style="font-size: 35px" class="fas fa-arrow-alt-left"></i>
                </a>
                <h1><span>So</span>s Contacts</h1>
            </div>
            <div class="add-new">
                <a href="/sos-add-new-contact">
                    <div class="add-c"><i class="fas fa-plus"></i></div>
                </a>
                <div class="text">
                    <a href="/sos-add-new-contact">Add New</a>
                    <p> Maximmum: 5 Contacts</p>
                </div>
            </div>
            @foreach ($All_soscontacts as $onesos)
            <div class="contact">
                <input name="userid" type="text" value="{{$onesos->userid}}" hidden>
                <img style="width: 50px; height: 50px;" src="/images/usersimgs/{{$onesos->sosphoto}}" alt="">
                <div class="all-text">
                    <p class="special">{{$onesos->contactname}}</p>
                    <p>{{$onesos->phonenumber}}</p>
                </div>
                <a href={{"delete/".$onesos['id']}}>
                    <i style="color: red; font-size: 30px" class="fas fa-trash-alt"></i>
                </a>
            </div>
            @endforeach 
        </div>
    </div>
</body>
</html>