<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"/>
    <!-- Font Awsome library -->
    <link
      rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css "integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&family=Work+Sans:wght@200;300;400;500;700;800&display=swap" rel="stylesheet"/>
    <title>Es3afy</title>
    <!-- icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/Untitled-1.png"/>
    <!-- Js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="/css/media.css" />
    <!-- script -->
  </head>
  <body style="overflow: hidden"> 
    {{-- <div class="splash-div">
      <div class="logo-container">
        <img
          class="logo animate__animated animate__rotateIn animate__infinite"
          src="./images/Untitled-1.png"
        />
      </div>
    </div> --}}
      <div class="content-container">
        <form method="POST" class="sign-up" action="{{ route('paramedic.create') }}" enctype="multipart/form-data">
          @if (Session::get('success'))
          <div style="position: absolute;
          background: #a9dca9;
          padding: 20px;
          width: 90vw;
          border-radius: 10px;
          margin-top: 5px;
          z-index: -1;
          bottom: 7%;" class="alert alert-success">
              {{ Session::get('success') }}
          </div>
          @endif
          @if (Session::get('fail'))
          <div style="" class="alert alert-danger">
          {{ Session::get('fail') }}
          </div>
          @endif

          @csrf
          
          <h1 class="sign-up-h1" style="margin-top: 20px;">Sign Up</h1>

          <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                  <input id="name" type="text" class="input-custom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                      <span class="invalid-feedback" style="display: flex;
                      flex-direction: column;" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="input-custom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" style="display: flex;
                flex-direction: column;" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          <div class="form-group row">
              <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

              <div class="col-md-6">
                  <input id="age" type="number" class="input-custom" name="age" required>
              </div>
          </div>

          <div class="form-group row">
              <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('phonenumber') }}</label>

              <div class="col-md-6">
                  <input id="age" type="number" class="input-custom" name="phonenumber" required maxlength="13">
              </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="input-custom @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="input-custom" name="password_confirmation" required autocomplete="new-password">
              </div>
          </div>

          <div class="form-group row">
              <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

              <div class="col-md-6">
                <input type="file" id="file-id" name="image" required/>
                <label style="color: #222831;
                background-color: #dadada;
                width: 200px;
                height: 41px;
                border-radius: 5px;
                text-align: center;
                padding-top: 10px;
                margin-bottom: 10px;
                display: block;
                font-size: 16px;" for="file-id" id="upload-btn-id"> Choose file </label>    
              <p style="font-size: 14px">The image is required</p>          
              </div>
            </div>

          <div class="mb-0 form-group row">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="button-custom">
                      {{ __('Register') }}
                  </button>
              </div>
          </div>
          <p>
            Already have an account ?<br />
            <span class="log-in">Log in</span>
          </p>
      </form>
      
      <div class="content-container-2" style="top: 7.5%">
          <div class="content-container-3">
              <div class="sign-in">
                  <form method="POST" action="{{ route('paramedic.login') }}">
                    @csrf
                    <div class="inputs-container" style="top: 23%; gap: 15px;">
                        <div class="form-group row">
                            <label style="color: #eee" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            
                        <div class="col-md-6">
                            <input id="email" type="email" class="input-custom @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        </div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" style="display: flex;
                    flex-direction: column; color: #eee" role="alert">
                        <label>{{ $message }}</label>
                    </span>
                    @enderror
                        
                        <div class="form-group row">
                        <label style="color: #eee" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="input-custom @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" style="display: flex;
                    flex-direction: column; color: #eee" role="alert">
                        <label>{{ $message }}</label>
                    </span>
                    @enderror
                    
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check" style="display: flex;
                            justify-content: center;
                            align-items: center;
                            gap: 5px;">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                <label style="color: #eee" class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-0 form-group row">
                        <button type="submit" class="button-custom">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
            <h1 class="sign-in-h1">Sign In</h1> 
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
