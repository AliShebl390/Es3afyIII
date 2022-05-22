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
  <body style="overflow-y: scroll" class="admin-body">
    </div>
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
    <div style="overflow-x: auto" class="admin-container">
      <div style=" display: flex; justify-content: space-around; margin-bottom: 40px">
        <h1>Pa<span class="header-span">ramedic</span>als</h1>

        <a href="user">
          <h1>Users</h1>
        </a>
      </div>
    </div>
    <div class="users-container">
      @foreach($allParamedicals as $oneParamedical)
      <div class="user-card">
        <section>
          <img src="../images/usersimgs/{{$oneParamedical->image}}" alt="" />
        </section>
        <aside>
          <header>
            <h2 style="text-transform: capitalize">{{$oneParamedical->name}}</h2>
            <div class="deleteee-user">
              <a href={{"delete/".$oneParamedical['id']}}>
                <i class="fas fa-trash"></i>
              </a>
            </div>
          </header>
          <main>
            <h5>id <span>{{$oneParamedical->id}}</span></h5>

            <h5>mobile <span>{{$oneParamedical->phonenum}}</span></h5>

            <h5>email <span>{{$oneParamedical->email}}</span></h5>

            <h5>status <span>{{$oneParamedical->status}}</span></h5>

          </main>
        </aside>
      </div>
      @endforeach
    </div>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
</html>
