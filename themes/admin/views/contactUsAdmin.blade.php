<!DOCTYPE html>
<html lang="en">
  <head>
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
      href="../images/Untitled-1.png"
      />
      <link rel="stylesheet" href="../css/stylesheet.css" />
      <link rel="stylesheet" href="../css/media.css" />
      
      <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
      />
    </head>
    <style>
        .contact-us-container{
            width: calc(100vw - 72px);
            transform: translate(72px,72px);            
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            padding-bottom: 20px;
        }
        .contact-us-details{
            width: 300px;
            height: 300px;
            background-color: #222831;
            color: white;
            overflow-y: scroll;
            border-radius: 10%;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .contact-us-details h3{
            color: #00adb5;
        }
    </style>
  <body class="history-body">
    <div class="admin-sidebar">
      <div class="sidebar-content">
        <img src="/images/logo png.png" alt="" />
        <div class="center">
          <a style="color: var(--light)" href="home">
            <i class="fas fa-home"></i>
          </a>
          <a style="color: var(--light)" href="History-main">
            <i class="fas fa-history"></i>
          </a>
          <a style="color: var(--light)" href="contactUsAdmin">
            <i class="fas fa-comment-alt-dots"></i>
          </a>
        </div>
        <a style="color: var(--light); margin-bottom: 50px" href="{{ route('admin.logout') }}"
        onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
        </a>
      <form id="logout-form" action="{{ route('admin.logout') }}"     method="POST" class="d-none">
          @csrf
      </form>
      </div>
    </div>
    <div class="contact-us-container">
      @foreach ($messages as $message)
        <div class="contact-us-details">
            <div class="">
                <h3>Username:</h3>
                <p>{{$message->name}}</p>
            </div>
            <div class="">
                <h3>Email:</h3>
                <p>{{$message->email}}</p>
            </div>
              <div class="">
                <h3>Message:</h3>
                <p>{{$message->message}}</p>
            </div>
        </div>
        @endforeach 
    </div>
  </body>
</html>
