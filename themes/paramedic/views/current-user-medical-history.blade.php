<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awsome library -->
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
    <link rel="stylesheet" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="/css/media.css" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/logo png.png"
    />
  </head>
  <body>
    <div class="mh-container">
      <div class="mh-header">
        <h1><span class="header-span">Me</span>dical history</h1>
      </div>
      <div class="mh-main">
        <div class="section-1">
          <img src="/images/doctor.png" alt="" />
          <span>surgeries</span>
          @foreach ($medicalhistory->surgeries as $surgery)
          <div style="display: flex; flex-direction: column; gap: 15px">
            <p style="padding-top: 20px">{{$surgery}}</p>
          </div>
          @endforeach
        </div>

        <div class="section-1">
          <img src="/images/head.png" alt="" />
          <span>Allerrgies</span>
          @foreach ($medicalhistory->allergies as $allergies)
          <div style="display: flex; flex-direction: column; gap: 15px">
              <p style="padding-top: 20px">{{$allergies}}</p>
            </div>
            @endforeach
          </div>
  

        <div class="section-1">
          <img src="/images/disease.png" alt="" />
          <span>Chronic disease</span>
          @foreach ($medicalhistory->chronic_disease as $chronic_disease)
          <div style="display: flex; flex-direction: column; gap: 15px">
              <p style="padding-top: 20px">{{$chronic_disease}}</p>
            </div>
            @endforeach
        </div>

        <div class="section-1">
          <img src="/images/Medication.png" alt="" />
          <span>Medication</span>
          @foreach ($medicalhistory->medications as $medications)
          <div style="display: flex; flex-direction: column; gap: 15px">
              <p style="padding-top: 20px">{{$medications}}</p>
            </div>
            @endforeach
        </div>
      </div>
    </div>
  </body>
</html>
