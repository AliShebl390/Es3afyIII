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
  <body style="overflow-x: hidden; " class="users-body">
    <div class="admin-sidebar">
      <div class="sidebar-content">
        <img src="/images/logo png.png" alt="" />
        <div class="center">
          <a style="color: var(--light)" href="#">
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
    <div style="overflow-x: hidden" class="admin-container">
            <div style="display: flex;justify-content: space-around;margin-bottom: 40px;width: 80vw;"> 
      <a href="home">
          <h1>Paramedicals</h1>
      </a>
        <h1>U<span class="header-span">ser</span>s</h1>
      </div>
    </div>
    <div class="users-container">
      @foreach ($allUsers as $user)
      <div class="user-card">
        <section>
          <img src="../images/usersimgs/{{$user->image}}" alt="" />
        </section>
        <aside>
          <header>
            <h2>{{$user->name}}</h2>    
            <div class="deleteee-user">
              <a href={{"delete/".$user['id']}}>
                <i class="fas fa-trash"></i>
              </a>
            </div>
          </header>
          <main>
              <h5>Mobile <span>{{$user->phonenum}}</span> </h5>
              <h5>Email <span>{{$user->email}}</span></h5>
              <h5>Gender <span style="text-transform: capitalize">{{$user->gender}}</span></h5>
              <h5>National ID </h5> 
    <span class="view-national-id-overlay" style="cursor: pointer;">View</span>
              <div class="national-id-overlay" style="flex-direction: row; padding: 20px;">
                  <img src="../images/usersimgs/{{$user->NIDfront}}" alt="">
                  <img src="../images/usersimgs/{{$user->NIDback}}" alt="">
                  <img src="../images/usersimgs/{{$user->NIDselfie}}" alt="">
                  <i class="fas fa-times hide-national-id-overlay"></i>
              </div>
          </main>
        </aside>
      </div>
      @endforeach
  </div>
  <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
  </body>
  <script>
   $(".national-id-overlay").hide(); //this hides the list initially
      $(".hide-national-id-overlay").click(function () {
        $(this).parent().closest("div").slideUp("fast");
      });
      $(".view-national-id-overlay").click(function () {
        $(this).next(".national-id-overlay").slideDown("fast");
      });
      $(".deleteee-user").click(function () {
        $(this).closest(".user-card").hide();
        console.log("hi");
      });
</script>
</html>
