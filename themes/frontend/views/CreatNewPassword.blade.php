<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awsome library -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/869711923d.js" crossorigin="anonymous"></script>  
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Es3afy</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/media.css">
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/logo png.png"
    />
    <!-- Js -->
</head>
<body>
    <div class="container-fp">
        <div class="content-fp">
            <div class="header">
                <a href="sign-in">
                    <i class="fas fa-arrow-alt-left"></i>
                </a>
        </div>
        <div class="main">
            <h1> <span style="border-bottom: 5px solid var(--light);">Cre</span>ate new password</h1>
            <p>your new passowrd must be different from previous used passowrds</p>
            <div class="adjust">
                <h3>password</h3>
                <form method="post" action="{{url('update-user')}}">
      @csrf 
                {{-- <input name="id" type="text" value="{{$password->id}}" hidden> --}}
                <div class="adjust-2">
                    <input name="password" type="password" class="password-input custom-input">
                    <i class="fas fa-eye-slash" id="show-password-icon"></i>
                </div>
                <h3>confirm password</h3>
                <input  type="password"  class="password-input custom-input">
                <p>both passwords must match</p>
              </div>
                <button tyb="submit" class="button-custom">reset password</button>
            </form>
        </div>
    </div>
</div>
<script>
    const passwordInput = document.querySelectorAll(".password-input");
const showPasswordIcon = document.getElementById("show-password-icon");

for (let i = 0; i < passwordInput.length; i++) {
  showPasswordIcon.addEventListener("click", function () {
    if (passwordInput[i].type === "password") {
      passwordInput[i].type = "text";
    } else {
      passwordInput[i].type = "password";
    }
  });
}
</script>
</body>
</html>