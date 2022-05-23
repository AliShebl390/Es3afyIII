<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name
      ="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"
    />
    <!-- Font Awsome library -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Es3afy</title>
    <!-- icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/Untitled-1.png"
    />
    <!-- Js -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/media.css" />
    <!-- script -->
  </head>
  <body style="overflow: hidden">
    {{-- <div class="splash-div">
      <div class="logo-container">
        <img
          class="logo animate__animated animate__rotateIn animate__infinite"
          src="./images/logo png.png"
        />
      </div>
    </div> --}}

      <div class="content-container">
        <div class="sign-up">
          <form method="POST" class="sign-up" action="{{ route('register') }}">
            @csrf
            <h1 class="sign-up-h1">Sign Up</h1>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror input-custom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email')is-invalid @enderror input-custom" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-custom" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="input-custom" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                    <div class="col-md-6">
                        <select name="gender" style="height: 31px" id="gender" class="input-custom" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="date of birth" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                    <div class="col-md-6">
                        <input id="date of birth" type="number" class="form-control @error('date') is-invalid @enderror input-custom" name="age" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phonenum">Phone number</label>

                    <div class="col-md-6">
                        <input id="phonenum" type="number" class="input-custom" name="phonenum" maxlength="13" minlength="11" class="" required>
                        
                        <input type="text" name="image" value="avatar.jpg" hidden>
                    </div>
                </div>
                <div class="bmi">
                  <div class="">
                  <img src="/images/Blood_cute_illustration_red_fresh_generated.jpg" alt="">
                  <input type="text" style="text-align: center; text-transform: capitalize" name="bloodType" id="" placeholder="A">
                  
                  </div>
                  <div class="">
                    <img src="/images/weigth.jpg" alt="">
                    <input type="text" name="weight" id="" placeholder="80 KG">
                  </div>
                   <div class="">
                    <img style="object-fit:contain ;" src="/images/vecteezy_illustration-vector-graphic-of-size-chart_.jpg" alt="">
                    <input type="text" name="height" id="" placeholder="172 cm">
                  </div>
                </div>      

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary button-custom">
                            {{ __('Sign Up') }}
                        </button>
                    </div>
                </div>
                <p>
                    Already have an account ?<br />
                    <span class="log-in">Log in</span>
                  </p>
            </form>
        </div>
      </div>

      <div class="content-container-2">
        <div class="content-container-3">
          <div class="sign-in">
            <h1 class="sign-in-h1">Sign In</h1>
          </div>
          <form method="POST" class="inputs-container" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">

                <div class="col-md-6">
                    <input id="email" type="email" placeholder="E-mail" class="input-custom form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="password" type="password" class="input-custom form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" style="color: #eee" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4" style="display: flex;
                flex-direction: column;
                gap: 11px">
                    <button type="submit" class="button-custom btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" style="color: #eee" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script>
      const signInH1 = document.querySelector(".sign-in-h1");
      const contentContainer2 = document.querySelector(".content-container-2");
      const SignUpH1 = document.querySelector(".sign-up-h1");
      const contentContainer = document.querySelector(".content-container");
      const logIn = document.querySelector(".log-in");

      logIn.addEventListener("click", function () {
        contentContainer2.classList.add("sign-active");
        signInH1.classList.add("h1-scale");
        SignUpH1.classList.remove("h1-scale");
        console.log("hi");
      });

      SignUpH1.addEventListener("click", function () {
        contentContainer2.classList.remove("sign-active");
        signInH1.classList.remove("h1-scale");
        SignUpH1.classList.add("h1-scale");
      });

      // contentContainer.addEventListener("click", function () {
      //   contentContainer2.classList.remove("sign-active");
      //   signInH1.classList.remove("h1-scale");
      //   SignUpH1.classList.add("h1-scale");
      // });

      $(window).on("load", function () {
        $(".splash-div").fadeOut(2000);
      });
    </script>
  </body>
</html>
