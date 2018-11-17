<form>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
        <legend>Education Attainment (Baccalaureate Degree Only): </legend>
    <table class="table table-fluid">
      <thead>
        <tr class="bg-secondary">
          <th scope="col">Baccalaureate Degree</th>
          <th scope="col">Name of the School</th>
          <th scope="col">Year Graduated</th>
          <th scope="col">Honor(s) or Award(s) received</th>
          <th scope="col">Scholarship/s (if any)</th>
        </tr>
      </thead>
  <tbody>
    <tr>
      <td class="bg-white"><input class="form-control" type="text" id="degree1" onkeyup="degrees()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school1" onkeyup="name_school()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated1" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received1" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship1" onkeyup="scholarship()"></td>
    </tr>
    <tr>
      <td class="bg-white"><input class="form-control" type="text" id="degree2" onkeyup="degrees()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school2" onkeyup="name_school()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated2" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received2" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship2" onkeyup="scholarship()"></td>
    </tr>
    <tr>
      <td class="bg-white"><input class="form-control" type="text" id="degree3" onkeyup="degrees()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school3" onkeyup="name_school()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated3" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received3" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship3" onkeyup="scholarship()"></td>
    </tr>
    <tr>
      <td class="bg-white"><input class="form-control" type="text" id="degree4" onkeyup="degrees()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school4" onkeyup="name_school()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated4" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received4" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship4" onkeyup="scholarship()"></td>
    </tr>
    
  </tbody>
</table>



<fieldset class="form-group mb-5">
      <legend>  
      Reasons for pursuing the degree(s).</legend><label> You may check(/) more than one answer</label>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value="Good grades in high school in subjects related to the degree ">
          Good grades in high school in subjects related to the degree
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value="Influence of parents or relatives">
         Influence of parents or relatives
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value=" Peer influence">
          Peer influence
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value="Inspired by a role model">
          Inspired by a role model
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value="Passion for the profession">
          Passion for the profession
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value="In demand for immediate employment">
          In demand for immediate employment
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value=" Status or prestige of the profession">
            Status or prestige of the profession
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value=" Availability of the degree taken in the university">
          Availability of the degree taken in the university
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="Reason_Bac[]" value=" Prospect of high compensation after graduation">
            Prospect of high compensation after graduation
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox"  class="form-check-input" name="Reason_Bac[]"  value=" Oppurtunities for employment abroad">
          Oppurtunities for employment abroad
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox"  class="form-check-input" name="Reason_Bac[]"  value=" No other option">
          No other option
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox"  class="form-check-input" name="Reason_Bac[]"  value=" Others">
          Others
        </label>
      </div>
      
      </fieldset> 
       <legend>Graduate Studies: </legend>
<table class="col-md-12 table table-hover">
  <thead>
    <tr class="bg-secondary">
      <th scope="col">Masters/Doctorate</th>
      <th scope="col">Name of the School</th>
      <th scope="col">Year Graduated</th>
      <th scope="col">Honor(s) or Award(s) Received</th>
      <th scope="col">Scholarship/s (if any)</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <td class="bg-white"><input class="form-control" type="text" id="degree5" onkeyup="degrees()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school5" onkeyup="name_school()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated5" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received5" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship5" onkeyup="scholarship()"></td>
    </tr>
    <tr class="table-dark">
      <td class="bg-white"><input class="form-control" type="text" id="degree6" onkeyup="degrees()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school6" onkeyup="name_school()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated6" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received6" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship6" onkeyup="scholarship()"></td>
    </tr>
    <tr class="table-dark">
      <td class="bg-white"><input class="form-control" type="text" id="degree7" onkeyup="degrees()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school7" onkeyup="name_school()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated7" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received7" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship7" onkeyup="scholarship()"></td>
    </tr>
  </tbody> 


</table>

 <div class="row text-center">
      <div class="col"> <button class="btn btn-info w-50 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="1">Next</button></div>
    </div>
    </div>


    <div class="carousel-item">

      <fieldset class="form-group mb-5">
      <legend>  
     Reasons for taking advance or graduate studies</legend>
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona[]" onclick="this.value"value="For employment">
                   For employment<br>
                    </label>
      </div>

      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona[]" onclick="this.value"value="For promotion">
                    For promotion<br>
                    </label>
      </div>
         
       
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona[]" onclick="this.value"value="For professional development">
                    For professional development<br>
                    </label>
      
      </div>
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona[]" onclick="this.value"value=" Others">
                     Others<br>
                    </label>
      
      </div>
  
    
    </fieldset> 

    <legend>Professional Examination(s) Passed : </legend>
<table class="col-md-12 table table-hover mb-5">
  <thead>
    <tr class="bg-secondary">
      <th scope="col">Name of Examination</th> 
      <th scope="col">Date Taken</th>
      <th scope="col">Rating</th>
      <th scope="col">Issued by</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="name_exam1" onkeyup="name_exam()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="date_taken1" onkeyup="date_taken()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Rating1" onkeyup="rating()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="issued1" onkeyup="issued_1()"></td>
    </tr>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="name_exam2" onkeyup="name_exam()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="date_taken2" onkeyup="date_taken()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Rating2" onkeyup="rating()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="issued2" onkeyup="issued_1()"></td>
    </tr>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="name_exam3" onkeyup="name_exam()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="date_taken3" onkeyup="date_taken()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Rating3" onkeyup="rating()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="issued3" onkeyup="issued_1()"></td>
    </tr>
  </tbody>
    
</table>

<legend>Trainings and seminar Attended After graduation : </legend>
<table class="col-md-12 table table-hover">
  <thead>
    <tr class="bg-secondary">
      <th scope="col">Title of the training or seminar</th>
      <th scope="col">Place of the Training or Seminar</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="title_training1" onkeyup="title_training()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="place_training1" onkeyup="place_training()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="date_training1" onkeyup="date_training()"></td>
    </tr>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="title_training2" onkeyup="title_training()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="place_training2" onkeyup="place_training()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="date_training2" onkeyup="date_training()"></td>
    </tr>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="title_training3" onkeyup="title_training()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="place_training3" onkeyup="place_training()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="date_training3" onkeyup="date_training()"></td>
    </tr>
  </tbody>

</table>

     <div class="row text-center">
      <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="0">Previous</button></div>
       <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="2">Next</button></div>
    </div>   
    </div>


    <div class="carousel-item">

      <legend class="mb-4">Employment Status: </legend>
      <fieldset class="form-group">
              <legend><u>PRESENT</u> Employment Status :</legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Regular">
                   Regular<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Temporary">
                    Temporary<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Contractual">
                    Contractual<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Job/ Casual">
                    Job/ Casual<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="stat_present_emp" onclick="this.value"value="Commission Based">
                    Commission Based<br>
                    </label>
                </div>

      </fieldset>

                

  <div class="form-group">
  <label class="col-form-label" for="inputDefault">Job title of your <u>PRESENT</u> Occupation(Ex: Grade School Teacher, Sales Representative, Computer Technician, etc) :</label>
  <input type="text" class="form-control" placeholder="Default input" name="PJtitle">

   
  <label class="col-form-label" for="inputDefault">Name of the Company of the organization of <u>PRESENT</u> employment :</label>
  <input type="text" class="form-control" placeholder="Default input"  name="PC_name">
</div>

<fieldset class="form-group mb-5">
              <legend>Place of <u>PRESENT</u> employment: </legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="PC_place" onclick="this.value" value=" Local ">
                    Local <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="PC_place" onclick="this.value" value="Abroad">
                    Abroad<br>
                    </label>
                </div>
          </fieldset>
                

<div class="form-group mb-5">
  <label class="col-form-label" for="inputDefault">Address of the <u>PRESENT</u> employment :</label>
  <input type="text" class="form-control" placeholder="Default input" id="inputDefault" name="PC_address">
</div>

<fieldset class="form-group mb-5">
              <legend>Major line of business of the company or organization you are <u>PRESENTLY</u> employed in: </legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Accounting / Finance  ">
                    Accounting / Finance  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Agriculture ">
                    Agriculture <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Arts/Media/Communication  ">
                    Arts/Media/Communication  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Building/Construction ">
                    Building/Construction <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Computer/Infomation Technology  ">
                    Computer/Infomation Technology  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Education/Training">
                    Education/Training<br>
                    </label>
                </div>
                 <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Electricity/ Gas/ Water Supply  ">
                    Electricity/ Gas/ Water Supply  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Fishing ">
                     Fishing <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Financial Intermediation  ">
                    Financial Intermediation  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Healthcare ">
                    Healthcare <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Hotel/ Restaurant ">
                    Hotel/ Restaurant <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Industrial and automotive">
                    Industrial and automotive<br>
                    </label>
                </div>
                 <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Manufacturing ">
                     Manufacturing  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Other community, Social and Personal Service Activities ">
                    Other community, Social and Personal Service Activities <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Private Households with employed persons  ">
                    Private Households with employed persons  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Public Administration adn Deffense; Compulsary Social Security">
                    Public Administration adn Deffense; Compulsary Social Security<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Sales/ Marketing  ">
                     Sales/ Marketing  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Services">
                    Services<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Transport Storage and Communication  ">
                      Transport Storage and Communication  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Wholesale/ Retail/ trail">
                     Wholesale/ Retail/ trail<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Private Households with employed persons  ">
                      Private Households with employed persons  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="   Others">
                       Others<br>
                    </label>
                </div>  

    </fieldset> 

     <div class="row text-center">
      <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="1">Previous</button></div>
       <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="3">Next</button></div>
    </div>       
    </div>

    <div class="carousel-item">

       <div class="form-group">
      <legend>Gross monthly income : </legend>
      <select class="custom-select" name="gross_income">
      <option selected="">Open this select menu</option>
      <option value="Below Php 5,000">Below Php 5,000</option>
      <option value="less than Php 10,000">less than Php 10,000</option>
      <option value="less than Php 15,000">less than Php 15,000</option>
      <option value="less than Php 20,000">less than Php 20,000</option>
      <option value="less than Php 25,000">less than Php 25,000</option>
      <option value="less than Php 30,000">less than Php 30,000</option>
      <option value="less than Php 40,000">less than Php 40,000</option>
      <option value="Above Php 40,000">Above Php 40,000 </option>
    </select>
  </div>

<fieldset class="form-group mb-5">
              <legend>How did you find your <u>PRESENT</u> Job? </legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" name="howPJ_find[]" value="advertisement ">
                    Response to an advertisement <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" name="howPJ_find[]" value="applicant">
                    As a walk-in applicant<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" name="howPJ_find[]" value="Recommended">
                    Recommended by someone <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" name="howPJ_find[]" value="Information">
                    Information from friend(s)<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" name="howPJ_find[]" value="Internet">
                    Internet browsing (websites) <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" name="howPJ_find[]" value="Job">
                    Job Fair or Public Employment Service Office (PESO)<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" name="howPJ_find[]" value="Other, please specify ">
                    Other, please specify <br>
                    </label>
                </div>

    </fieldset>
   
          
               
<fieldset class="form-group mb-5">
      <legend>  
      Reason for accepting your <u>PRESENT</u> job.</legend><label> You may check (/) more than 1 answer :</label>
     <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value="Salary/ Wage ">
          Salary/ Wage
        </label>
      </div>
      <div class="form-check"> 
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value=" Oppurtunity for career growth ">
           Oppurtunity for career growth
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value="Career Challenge ">
          Career Challenge
        </label>
      </div>
      <div class="form-check"> 
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value=" Related to Skill(s) ">
           Related to Skill(s)
        </label>
      </div>
        <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value="Family Influence ">
          Family Influence
        </label>
      </div>
      <div class="form-check"> 
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value="  Peer Influence ">
            Peer Influence
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value="No other job option ">
          No other job option
        </label>
      </div>
      <div class="form-check"> 
        <label class="form-check-label">
          <input type="checkbox" name="reason_acceptPJ[]" value=" Others ">
           Others
        </label>
      </div>


      
      
      </fieldset> 

  <div class="form-group mt-5">
     <fieldset class="form-group">
              <legend>Is your <u>PRESENT</u> job related to the degree you finished in College? : </legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="PJrel_degree" onclick="this.value"value="Yes">
                    Yes<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="PJrel_degree" onclick="this.value"value="No">
                    No<br>
                    </label>
                </div>
              </div>

    </fieldset>

     <div class="row text-center">
      <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="2">Previous</button></div>
       <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="4">Next</button></div>
    </div>

    </div>

    <div class="carousel-item">

      <fieldset class="form-group">
              <legend>Employment Status in your <u>FIRST</u> employment :</legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Regular">
                   Regular<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Temporary">
                    Temporary<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Contractual">
                    Contractual<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_status_employement" onclick="this.value"value="Job/ Casual">
                    Job/ Casual<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="P_stat_present_emp" onclick="this.value"value="Commission Based">
                    Commission Based<br>
                    </label>
                </div>

      </fieldset>

      <div class="form-group">
  <legend>Job title of your <u>FIRST</u> Occupation(Ex: Grade School Teacher, Sales Representative, Computer Technician, etc) :</legend>
  <input type="text" class="form-control" placeholder="Default input" name="PJtitle">

   
  <legend>Name of the Company of the organization of <u>FIRST</u> employment :</legend>
  <input type="text" class="form-control" placeholder="Default input"  name="PC_name">
</div>

<fieldset class="form-group mb-5">
              <legend>Place of <u>FIRST</u> employment: </legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="PC_place" onclick="this.value" value=" Local ">
                    Local <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="PC_place" onclick="this.value" value="Abroad">
                    Abroad<br>
                    </label>
                </div>
          </fieldset>
                

<div class="form-group mb-5">
  <label class="col-form-label" for="inputDefault">Address of the <u>FIRST</u> employment :</label>
  <input type="text" class="form-control" placeholder="Default input" id="inputDefault" name="PC_address">
</div>

<fieldset class="form-group mb-5">
              <legend>Major line of business of the company or organization you are <u>FIRST</u> employment in: </legend>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Accounting / Finance  ">
                    Accounting / Finance  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Agriculture ">
                    Agriculture <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Arts/Media/Communication  ">
                    Arts/Media/Communication  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Building/Construction ">
                    Building/Construction <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Computer/Infomation Technology  ">
                    Computer/Infomation Technology  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Education/Training">
                    Education/Training<br>
                    </label>
                </div>
                 <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Electricity/ Gas/ Water Supply  ">
                    Electricity/ Gas/ Water Supply  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Fishing ">
                     Fishing <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Financial Intermediation  ">
                    Financial Intermediation  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Healthcare ">
                    Healthcare <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Hotel/ Restaurant ">
                    Hotel/ Restaurant <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Industrial and automotive">
                    Industrial and automotive<br>
                    </label>
                </div>
                 <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Manufacturing ">
                     Manufacturing  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="Other community, Social and Personal Service Activities ">
                    Other community, Social and Personal Service Activities <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Private Households with employed persons  ">
                    Private Households with employed persons  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Public Administration adn Deffense; Compulsary Social Security">
                    Public Administration adn Deffense; Compulsary Social Security<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Sales/ Marketing  ">
                     Sales/ Marketing  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value=" Services">
                    Services<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Transport Storage and Communication  ">
                      Transport Storage and Communication  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Wholesale/ Retail/ trail">
                     Wholesale/ Retail/ trail<br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="  Private Households with employed persons  ">
                      Private Households with employed persons  <br>
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Bline" onclick="this.value"value="   Others">
                       Others<br>
                    </label>
                </div>  

    </fieldset> 



     <div class="row text-center">
      <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="3">Previous</button></div>
       <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="5">Next</button></div>
    </div>   
    </div>

    <div class="carousel-item">







    <div class="row text-center">
      <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="4">Previous</button></div>
       <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="6">Next</button></div>
    </div>

    </div>

    <div class="carousel-item">




      <legend class="mt-5">Employement Awards Received<span class="text-muted">PRESENT</span></legend>
<table class="table table-hover">
  <thead>
<tr class="bg-secondary">
<th scope="col">Awards Received</th>
<th scope="col">Company Name/ Employer</th>
<th scope="col">Date Received</th>
</tr>
</thead>
<tbody>
  <tr>
    <td><input type="text" class="form-control" id="present_award1" onkeyup="present_award_1()"></td>
    <td><input type="text" class="form-control" id="present_company1" onkeyup="present_company_1()"></td>
    <td><input type="text" class="form-control" id="present_datereceived1" onkeyup="present_datereceived_1()"></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" id="present_award2" onkeyup="present_award_1()"></td>
    <td><input type="text" class="form-control" id="present_company2" onkeyup="present_company_1()"></td>
    <td><input type="text" class="form-control" id="present_datereceived2" onkeyup="present_datereceived_1()"></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" id="present_award3" onkeyup="present_award_1()"></td>
    <td><input type="text" class="form-control" id="present_company3" onkeyup="present_company_1()"></td>
    <td><input type="text" class="form-control" id="present_datereceived3" onkeyup="present_datereceived_1()"></td>
  </tr>
</tbody>
</table>

  <legend class="mt-5">Employement Awards Received<small class="text-muted"> &nbsp;previous</small></legend>
<table class="table table-hover">
  <thead>
<tr class="bg-secondary">
<th scope="col">Awards Received</th>
<th scope="col">Company Name/ Employer</th>
<th scope="col">Date Received</th>
</tr>
</thead>
<tbody>
  <tr>
    <td><input type="text" class="form-control" id="previous_award1" onkeyup="previous_award_1()"></td>
    <td><input type="text" class="form-control" id="previous_company1" onkeyup="previous_company_1()"></td>
    <td><input type="text" class="form-control" id="previous_datereceived1" onkeyup="previous_datereceiveds()"></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" id="previous_award2" onkeyup="previous_award_1()"></td>
    <td><input type="text" class="form-control" id="previous_company2" onkeyup="previous_company_1()"></td>
    <td><input type="text" class="form-control" id="previous_datereceived2" onkeyup="previous_datereceiveds()"></td>
  </tr>
  <tr>
    <td><input type="text" class="form-control" id="previous_award3" onkeyup="previous_award_1()"></td>
    <td><input type="text" class="form-control" id="previous_company3" onkeyup="previous_company_1()"></td>
    <td><input type="text" class="form-control" id="previous_datereceived3" onkeyup="previous_datereceiveds()"></td>
  </tr>
</tbody>
</table><br><br><br>
<p>Thank you for taking time to fill out this questionaire. Being one of the alumni of your institution, may we request you to list down the names of other colleges graduates from your program that you know and are actively in contact at present. Their participation will also be needed to make this study more meaningful.</p>
<table class="col-md-12 table table-hover mb-5">
  <thead>
    <tr class="bg-secondary">
      <th scope="col">Name</th> 
      <th scope="col">Full Address</th>
      <th scope="col">Contact number</th>
      <th scope="col">Email Address</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="reference_name1" onkeyup="reference_names()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="reference_add1" onkeyup="reference_adds()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="reference_contact_num1" onkeyup="reference_contact_nums()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="reference_email_add1" onkeyup="reference_email_adds()"></td>
    </tr>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="reference_name2" onkeyup="reference_names()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="reference_add2" onkeyup="reference_adds()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="reference_contact_num2" onkeyup="reference_contact_nums()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="reference_email_add2" onkeyup="reference_email_adds()"></td>
    </tr>
    <tr class="table-dark">
      <th class="bg-white"><input class="form-control" type="text" id="reference_name3" onkeyup="reference_names()"></th>
      <td class="bg-white"><input class="form-control" type="text" id="reference_add3" onkeyup="reference_adds()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="reference_contact_num3" onkeyup="reference_contact_nums()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="reference_email_add3" onkeyup="reference_email_adds()"></td>
    </tr>
  </tbody>
  

<input type="text" style="display: none;" name="reference_name" id="combine_reference_name">
<input type="text" style="display: none;" name="reference_add" id="combine_reference_add">
<input type="text" style="display: none;" name="reference_contact_num" id="combine_reference_contact_num">
<input type="text" style="display: none;" name="reference_email_add" id="combine_reference_email_add">
<input type="text" style="display: none;" name="Degree" id="combine_degree">
<input type="text" style="display: none;" name="Emp_Status" value="Employed">
<input type="text" style="display: none;" name="Year_graduated_degree" id="combine_year_graduated">
<input type="text" style="display: none;" name="Honor_awards" id="combine_award_received">
<input type="text" style="display: none;" name="Scholarship" id="combine_Scholarship">
<input type="text" style="display: none;" name="Prof_Exam_Name" id="combine_name_exam">
<input type="text" style="display: none;" name="Date_Taken" id="combine_date_taken">
<input type="text" style="display: none;" name="issued_by" id="combine_issued">
<input type="text" style="display: none;" name="Title_Training_Seminar" id="combine_title_training">
<input type="text" style="display: none;" name="Date_Training_Seminar" id="combine_date_training">
<input type="text" style="display: none;" name="Place_Training_Seminar" id="combine_place_training">
<input type="text" style="display: none;" name="award_dateP" id="combine_present_datereceived">
<input type="text" style="display: none;" name="awardP" id="awardP">
<input type="text" style="display: none;" name="present_company" id="combine_present_company">
<input type="text" style="display: none;" name="award_datePr" id="combine_previous_datereceived">
<input type="text" style="display: none;" name="award_Pr" id="combine_previous_award">
<input type="text" style="display: none;" name="previous_company" id="combine_previous_company">
<input type="text" style="display: none;" name="Rating" id="combine_Rating">
<input type="text" style="display: none;" name="Name_school" id="combine_name_school">
</div>


    
</table>



    <div class="row text-center">
      <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="5">Previous</button></div>
       <div class="col"> <button class="btn btn-info w-100 btn-lg" style="padding: 10px;" data-target="#carouselExampleIndicators" data-slide-to="7">Next</button></div>
    </div>  
  </div>

</div>
</form>