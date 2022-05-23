<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awsome library -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Font -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Es3afy</title>
    <link rel="stylesheet" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/Untitled-1.png"
    />
  </head>
  <body style="overflow-y: scroll">
    <div class="mh-container">
      <div class="mh-header">
        <a href="sign-in">
          <i class="fas fa-arrow-alt-left go-back"></i>
        </a>
        <h1><span style="text-transform: capitalize" class="header-span">me</span>dical history</h1>
      </div>
      <div class="mh-main">
        <form method="post" action="{{url('store-medical')}}">
          @csrf   
        <div class="section-1">
          <img src="/images/doctor.png" alt="" />
            <label for="surgeries">surgeries</label>
            <select name="surgeries[]" id="surgeries" multiple>
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
              <option value="e">e</option>
              <option value="f">f</option>
              <option value="h">h</option>
              <option value="i">i</option>
            </select>
        </div>
        
        <div class="section-1">
          <img src="/images/head.png" alt="" />
            <label for="allergies">Allerrgies</label>
            <select name="allergies[]" id="allergies" multiple>
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
              <option value="e">e</option>
              <option value="f">f</option>
              <option value="h">h</option>
              <option value="i">i</option>
            </select>
        </div>
        
        <div class="section-1">
          <img src="/images/disease.png" alt="" />
            <label for="chronic disease">Chronic disease</label>
            <select name="chronic_disease[]" id="chronic disease" multiple>
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
              <option value="e">e</option>
              <option value="f">f</option>
              <option value="h">h</option>
              <option value="i">i</option>
            </select>
        </div>

        <div class="section-1">
          <img src="/images/Medication.png" alt=""/>
            <label for="medications" style="margin-top: 12px">Medications</label>
            <select name="medications[]" id="medications" multiple>
              <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
              <option value="e">e</option>
              <option value="f">f</option>
              <option value="h">h</option>
              <option value="i">i</option>
            </select>
        </div>

        <a href="#">
          <button type="submit" class="button-custom">Next</button>
        </a>
      </div>
    </form>
    </div>
    <script>
      const surgeriesInput = document.querySelector(".surgeries-input");
      const surgeriesButton = document.querySelector(".surgeries-add-button");
      const surgeriesList = document.querySelector(".surgeries-list");
      
      surgeriesButton.addEventListener("click", addSurgeries);

      function addSurgeries(event) {
        event.preventDefault();
        const surgeriesDiv = document.createElement("div");
        surgeriesDiv.classList.add("new");
        const newSurgery = document.createElement("li");
        newSurgery.innerText = surgeriesInput.value;
        surgeriesDiv.appendChild(newSurgery);
        const trashButton = document.createElement("button");
        trashButton.classList.add("trash-btn");
        trashButton.innerHTML = '<i class="fas fa-trash"></i>';
        surgeriesDiv.appendChild(trashButton);
        surgeriesList.appendChild(surgeriesDiv);
        surgeriesInput.value = "";
      }

      surgeriesList.addEventListener("click", deleteCheck);
      function deleteCheck(e) {
        const surgery = e.target;
        if (surgery.classList[0] === "trash-btn") {
          const surgery = surgery.parentElement;
          surgery.remove();
        }
      }


      const allerrgiesInput = document.querySelector(".allerrgies-input");
      const allerrgiesButton = document.querySelector(".allerrgies-add-button");
      const allerrgiesList = document.querySelector(".allerrgies-list");

      allerrgiesButton.addEventListener("click", addAllerrgies);

      function addAllerrgies(event) {
        event.preventDefault();
      
          const allerrgiesDiv = document.createElement("div");
          allerrgiesDiv.classList.add("new");
          const newAllerrgy = document.createElement("li");
          newAllerrgy.innerText = allerrgiesInput.value;
          allerrgiesDiv.appendChild(newAllerrgy);
          const trashButton = document.createElement("button");
          trashButton.classList.add("trash-btn");
          trashButton.innerHTML = '<i class="fas fa-trash"></i>';
          allerrgiesDiv.appendChild(trashButton);
          allerrgiesList.appendChild(allerrgiesDiv);
          allerrgiesInput.value = "";
        
      }

      allerrgiesList.addEventListener("click", deleteCheck);
      function deleteCheck(e) {
        const allergy = e.target;
        if (allergy.classList[0] === "trash-btn") {
          const allerrgy = allergy.parentElement;
          allerrgy.remove();
        }
      }


      const chronicInput = document.querySelector(".chronic-input");
      const chronicButton = document.querySelector(".chronic-add-button");
      const chronicList = document.querySelector(".chronic-list");

      chronicButton.addEventListener("click", addChronic);

      function addChronic(event) {
        event.preventDefault();
        const chronicDiv = document.createElement("div");
        chronicDiv.classList.add("new");
        const newChronic = document.createElement("li");
        newChronic.innerText = chronicInput.value;
        chronicDiv.appendChild(newChronic);
        const trashButton = document.createElement("button");
        trashButton.classList.add("trash-btn");
        trashButton.innerHTML = '<i class="fas fa-trash"></i>';
        chronicDiv.appendChild(trashButton);
        chronicList.appendChild(chronicDiv);
        chronicInput.value = "";
      }

      chronicList.addEventListener("click", deleteCheck);
      function deleteCheck(e) {
        const chronic = e.target;
        if (chronic.classList[0] === "trash-btn") {
          const chronicc = chronic.parentElement;
          chronicc.remove();
        }
      }


      const medicationsInput = document.querySelector(".medications-input");
      const medicationsButton = document.querySelector(".medications-add-button");
      const medicationsList = document.querySelector(".medications-list");

      medicationsButton.addEventListener("click", addMedication);

      function addMedication(event) {
        event.preventDefault();
        const medicationsDiv = document.createElement("div");
        medicationsDiv.classList.add("new");
        const newMedication = document.createElement("li");
        newMedication.innerText = medicationsInput.value;
        medicationsDiv.appendChild(newMedication);
        const trashButton = document.createElement("button");
        trashButton.classList.add("trash-btn");
        trashButton.innerHTML = '<i class="fas fa-trash"></i>';
        medicationsDiv.appendChild(trashButton);
       medicationsList.appendChild(medicationsDiv);
        medicationsInput.value = "";
      }

      medicationsList.addEventListener("click", deleteCheck);
      function deleteCheck(e) {
        const medication = e.target;
        if (medication.classList[0] === "trash-btn") {
          const medicationn = medication.parentElement;
          medicationn.remove();
        }
      }




    </script>
  </body>
</html>