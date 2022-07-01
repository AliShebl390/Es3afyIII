<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/869711923d.js"
      crossorigin="anonymous"
    ></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8"/>
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
  <body class="history-body" >
    </div>
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
    <div class="history-container">
      <div class="history-main">
        @foreach($All_history as $onehistory)
        <div class="rides-history-section" style="cursor: default">
          <div style="height: 110px; ; display: flex; align-items: flex-start justify-content: center; text-align: center; position: relative; flex-direction: column;" class="rides-section1">
            <p><i style="font-size: 18px" class="fas fa-calendar-alt"></i> {{$onehistory->created_at}}</p>
            <span style="margin-top: 25px">Made by: {{$onehistory->paraname}}             <img style="width: 50px;height: 50px; border-radius: 20%; margin-left: 10px" src="/images/usersimgs/{{$onehistory->userimage}}" alt="" />
          </span>
          </div>
          <hr />
          <div class="rides-section2">
            <img src="/images/usersimgs/{{$onehistory->userimage}}" alt="" style="object-fit: contain"/>
            <div class="rides-adjust">
              <h4>{{$onehistory->username}}</h4>
              <i class="fas fa-star"><span>{{$onehistory->Rate}}</span></i>
              <div class="show" style="margin-top: 10px; cursor: pointer;">View feedback...</div>
              <div class="feedback-admin">
              <div class="close">
                <i class="fas fa-times"></i>
              </div>
              <h1>feedback</h1>
              <p>
                {{$onehistory->feedback}}
              </p>          
              </div>
            </div>
          </div>
          <hr />
          <div class="rides-section3">
            <P style="margin: 20px;
            display: grid;
            place-items: center;">    
               <a style="cursor: pointer; font-size: 20px; color: #00adb5" href = "mailto: {{$onehistory->paraemail}}">
                <i style="font-size: 25px" class="fas fa-envelope"></i>
                Contact User</a>
            </P>
          </div>
        </div>
        @endforeach
      </div>
    </div>
        <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
    <script>
      const viewFeedbackOverlay = document.querySelectorAll('.view-feedback-overlay')
      const hideFeedbackOverlay = document.querySelectorAll('.hide-feedback-overlay')
      const feedbackOverlay = document.querySelector('.feedback-overlay')
      const ridesHistorySection = document.querySelectorAll('.rides-history-section')
$(".feedback-admin").hide(); //this hides the list initially

$(".close").click(function(){
  $(this).parent().closest('div').slideToggle('slow');
});
$(".show").click(function(){
  $(this).next('.feedback-admin').slideToggle('slow');
});
</script>
  </body>
</html>
