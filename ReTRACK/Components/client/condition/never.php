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


      

    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="1">Next</button>
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

    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="0">Previous</button>
    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="2">Next</button>
    </div>


    <div class="carousel-item">

      <legend class="mb-4">Employment Status: </legend>
      <fieldset class="form-group">
              <legend>PRESENT Employment Status :</legend>
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
  <label class="col-form-label" for="inputDefault">Job title of your PRESENT Occupation(Ex: Grade School Teacher, Sales Representative, Computer Technician, etc) :</label>
  <input type="text" class="form-control" placeholder="Default input" name="PJtitle">

   
  <label class="col-form-label" for="inputDefault">Name of the Company of the organization of PRESENT employment :</label>
  <input type="text" class="form-control" placeholder="Default input"  name="PC_name">
</div>

<fieldset class="form-group mb-5">
              <legend>Place of PRESENT employment: </legend>
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
  <label class="col-form-label" for="inputDefault">Address of the PRESENT employment :</label>
  <input type="text" class="form-control" placeholder="Default input" id="inputDefault" name="PC_address">
</div>

<fieldset class="form-group mb-5">
              <legend>Major line of business of the company or organization you are presently employed in: </legend>
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

    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="1">Previous</button>
    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="3">Next</button>
    
    </div>

    <div class="carousel-item">

       <div class="form-group">
      <label class="col-form-label" for="inputDefault">Gross monthly income : </label>
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
              <legend>How did you find your PRESENT Job? </legend>
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
      Reason for accepting your PRESENT job.</legend><label> You may check (/) more than 1 answer :</label>
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
              <legend>Is your PRESENT job related to the degree you finished in College? : </legend>
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



    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="2">Previous</button>
    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="4">Next</button>
    
    </div>

    <div class="carousel-item">

    </fieldset> 

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
</table>

 <fieldset class="form-group mb-5">
      <legend>  
    Please state your reason why uou have NEVER BEEN EMPLOYED</legend>
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="R_never" onclick="this.value" value="Advance further study">
                   Advance further study
                    </label>
      </div>

      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="R_never" onclick="this.value" value="Family related matter">
                    Family related matter
                    </label>
      </div>
         
       
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="R_never" onclick="this.value" value="Health Related reasons">
                    Health Related reasons
                    </label>
      
      </div>


      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="R_never" onclick="this.value" value="No job opportunities">
                    No job opportunities
                    </label>
      
      </div>

      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="R_never" onclick="this.value" value="Did not look for a job">
                    Did not look for a job
                    </label>
      
      </div>

      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="R_never" onclick="this.value" value=" Others">
                     Others
                    </label>
      
      </div>
  
    
    </fieldset>


<br><br><br>
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






    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="3">Previous</button>
    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="5">Next</button>
    
    </div>

    <div class="carousel-item">

    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="4">Previous</button>
    <button class="btn btn-info w-100" data-target="#carouselExampleIndicators" data-slide-to="6">Next</button>
    
    </div>
  
</form>


 



<script type="text/javascript">

  function reference_names() {
    var reference_name1 = document.getElementById('reference_name1').value;
    var reference_name2 = document.getElementById('reference_name2').value;
    var reference_name3 = document.getElementById('reference_name3').value;
    var combine_reference_name = reference_name1 +', '+reference_name2 +', '+reference_name3; 
    document.getElementById('combine_reference_name').value =combine_reference_name;
  }

  function reference_adds() {
    var reference_add1 = document.getElementById('reference_add1').value;
    var reference_add2 = document.getElementById('reference_add2').value;
    var reference_add3 = document.getElementById('reference_add3').value;
    var combine_reference_add = reference_add1 +', '+reference_add2 +', '+reference_add3; 
    document.getElementById('combine_reference_add').value =combine_reference_add;
  }

  function reference_contact_nums() {
    var reference_contact_num1 = document.getElementById('reference_contact_num1').value;
    var reference_contact_num2 = document.getElementById('reference_contact_num2').value;
    var reference_contact_num3 = document.getElementById('reference_contact_num3').value;
    var combine_reference_contact_num = reference_contact_num1 +', '+reference_contact_num2 +', '+reference_contact_num3; 
    document.getElementById('combine_reference_contact_num').value =combine_reference_contact_num;
  }

  function reference_email_adds() {
    var reference_email_add1 = document.getElementById('reference_email_add1').value;
    var reference_email_add2 = document.getElementById('reference_email_add2').value;
    var reference_email_add3 = document.getElementById('reference_email_add3').value;
    var combine_reference_email_add = reference_email_add1 +', '+reference_email_add2 +', '+reference_email_add3; 
    document.getElementById('combine_reference_email_add').value =combine_reference_email_add;
  }



  function degrees() {
    var degree1 = document.getElementById('degree1').value;
    var degree2 = document.getElementById('degree2').value;
    var degree3 = document.getElementById('degree3').value;
    var degree4 = document.getElementById('degree4').value;
    var degree5 = document.getElementById('degree5').value;
    var degree6 = document.getElementById('degree6').value;
    var degree7 = document.getElementById('degree7').value;
    var combine_degree = degree1 +', '+degree2 +', '+degree3+', '+degree4 +', '+degree5 +', '+degree6 +', '+degree7;  
    document.getElementById('combine_degree').value = combine_degree;
  }
  function name_school() {
    var name_school1 = document.getElementById('name_school1').value;
    var name_school2 = document.getElementById('name_school2').value;
    var name_school3 = document.getElementById('name_school3').value;
    var name_school4 = document.getElementById('name_school4').value;
    var name_school5 = document.getElementById('name_school5').value;
    var name_school6 = document.getElementById('name_school6').value;
    var name_school7 = document.getElementById('name_school7').value;
    var combine_name_school = name_school1 +', '+name_school2 +', '+name_school3 +', '+name_school4 +', '+name_school5 +', '+name_school6 +', '+name_school7; 
    document.getElementById('combine_name_school').value = combine_name_school;
  }
  function year_graduated() {
    var year_graduated1 = document.getElementById('year_graduated1').value;
    var year_graduated2 = document.getElementById('year_graduated2').value;
    var year_graduated3 = document.getElementById('year_graduated3').value;
    var year_graduated4 = document.getElementById('year_graduated4').value;
    var year_graduated5 = document.getElementById('year_graduated5').value;
    var year_graduated6 = document.getElementById('year_graduated6').value;
    var year_graduated7 = document.getElementById('year_graduated7').value;
    var combine_year_graduated = year_graduated1 +', '+year_graduated2 +', '+year_graduated3 +', '+year_graduated4 +', '+year_graduated5 +', '+year_graduated6 +', '+year_graduated7; 
    document.getElementById('combine_year_graduated').value = combine_year_graduated;
  }
  function award_received() {
    var award_received1 = document.getElementById('award_received1').value;
    var award_received2 = document.getElementById('award_received2').value;
    var award_received3 = document.getElementById('award_received3').value;
    var award_received4 = document.getElementById('award_received4').value;
    var award_received5 = document.getElementById('award_received5').value;
    var award_received6 = document.getElementById('award_received6').value;
    var award_received7 = document.getElementById('award_received7').value;
    var combine_award_received = award_received1 +', '+award_received2 +', '+award_received3 +', '+award_received4 +', '+award_received5 +', '+award_received6 +', '+award_received7; 
    document.getElementById('combine_award_received').value = combine_award_received;
  }
  function scholarship() {
    var Scholarship1 = document.getElementById('Scholarship1').value;
    var Scholarship2 = document.getElementById('Scholarship2').value;
    var Scholarship3 = document.getElementById('Scholarship3').value;
    var Scholarship4 = document.getElementById('Scholarship4').value;
    var Scholarship5 = document.getElementById('Scholarship5').value;
    var Scholarship6 = document.getElementById('Scholarship6').value;
    var Scholarship7 = document.getElementById('Scholarship7').value;
    var combine_Scholarship = Scholarship1 +', '+Scholarship2 +', '+Scholarship3 +', '+Scholarship4 +', '+Scholarship5 +', '+Scholarship6 +', '+Scholarship7; 
    document.getElementById('combine_Scholarship').value = combine_Scholarship;
  }
  function name_exam() {
    var name_exam1 = document.getElementById('name_exam1').value;
    var name_exam2 = document.getElementById('name_exam2').value;
    var name_exam3 = document.getElementById('name_exam3').value;
    var combine_name_exam = name_exam1 +', '+name_exam2 +', '+name_exam3;
    document.getElementById('combine_name_exam').value = combine_name_exam; 
  }
  function date_taken() {
    var date_taken1 = document.getElementById('date_taken1').value;
    var date_taken2 = document.getElementById('date_taken2').value;
    var date_taken3 = document.getElementById('date_taken3').value;
    var combine_date_taken = date_taken1 +', '+date_taken2 +', '+date_taken3; 
    document.getElementById('combine_date_taken').value =combine_date_taken;
  }
  function rating() {
    var Rating1 = document.getElementById('Rating1').value;
    var Rating2 = document.getElementById('Rating2').value;
    var Rating3 = document.getElementById('Rating3').value;
    var combine_Rating = Rating1 +', '+Rating2 +', '+Rating3; 
    document.getElementById('combine_Rating').value =combine_Rating;
  }
  function issued_1() {
    var issued1 = document.getElementById('issued1').value;
    var issued2 = document.getElementById('issued2').value;
    var issued3 = document.getElementById('issued3').value;
    var combine_issued = issued1 +', '+issued2 +', '+issued3;
    document.getElementById('combine_issued').value =combine_issued;  
  }
  function title_training() {
    var title_training1 = document.getElementById('title_training1').value;
    var title_training2 = document.getElementById('title_training2').value;
    var title_training3 = document.getElementById('title_training3').value;
    var combine_title_training = title_training1 +', '+title_training2 +', '+title_training3; 
    document.getElementById('combine_title_training').value = combine_title_training;
  }
  function date_training() {
    var date_training1 = document.getElementById('date_training1').value;
    var date_training2 = document.getElementById('date_training2').value;
    var date_training3 = document.getElementById('date_training3').value;
    var combine_date_training = date_training1 +', '+date_training2 +', '+date_training3; 
    document.getElementById('combine_date_training').value = combine_date_training;
  }
  function place_training() {
    var place_training1 = document.getElementById('place_training1').value;
    var place_training2 = document.getElementById('place_training2').value;
    var place_training3 = document.getElementById('place_training3').value;
    var combine_place_training = place_training1 +', '+place_training2 +', '+place_training3; 
    document.getElementById('combine_place_training').value = combine_place_training;
  }
    function present_award_1() {
    var present_award1 = document.getElementById('present_award1').value;
    var present_award2 = document.getElementById('present_award2').value;
    var present_award3 = document.getElementById('present_award3').value;
    var combine_present_award = present_award1 +', '+present_award2 +', '+present_award3; 
    document.getElementById('awardP').value =combine_present_award;
  }
    function present_company_1() {
    var present_company1 = document.getElementById('present_company1').value;
    var present_company2 = document.getElementById('present_company2').value;
    var present_company3 = document.getElementById('present_company3').value;
    var combine_present_company = present_company1 +', '+present_company2 +', '+present_company3; 
    document.getElementById('combine_present_company').value =combine_present_company;
  }
    function present_datereceived_1() {
    var present_datereceived1 = document.getElementById('present_datereceived1').value;
    var present_datereceived2 = document.getElementById('present_datereceived2').value;
    var present_datereceived3 = document.getElementById('present_datereceived3').value;
    var combine_present_datereceived = present_datereceived1 +', '+present_datereceived2 +', '+present_datereceived3; 
    document.getElementById('combine_present_datereceived').value = combine_present_datereceived;
  }
  function previous_award_1() {
    var previous_award1 = document.getElementById('previous_award1').value;
    var previous_award2 = document.getElementById('previous_award2').value;
    var previous_award3 = document.getElementById('previous_award3').value;
    var combine_previous_award = previous_award1 +', '+previous_award2 +', '+previous_award3; 
    document.getElementById('combine_previous_award').value =combine_previous_award;
  }
    function previous_company_1() {
    var previous_company1 = document.getElementById('previous_company1').value;
    var previous_company2 = document.getElementById('previous_company2').value;
    var previous_company3 = document.getElementById('previous_company3').value;
    var combine_previous_company = previous_company1 +', '+previous_company2 +', '+previous_company3; 
    document.getElementById('combine_previous_company').value =combine_previous_company;
  }
    function previous_datereceiveds() {
    var previous_datereceived1 = document.getElementById('previous_datereceived1').value;
    var previous_datereceived2 = document.getElementById('previous_datereceived2').value;
    var previous_datereceived3 = document.getElementById('previous_datereceived3').value;
    var combine_previous_datereceived = previous_datereceived1 +', '+previous_datereceived2 +', '+previous_datereceived3; 
    document.getElementById('combine_previous_datereceived').value = combine_previous_datereceived;
  }

</script>



<!-- 
alum_id
lastname
firstname
middlename
Gender
status
birthdate
age
housenumberc
streetbarangayc
municipalitycityc
provincec
housenumberp
streetbarangayp
municipalitycityp
provincep
emailadd
telnum
mobilenum
degree
yeargraduatebac
nameschool
honorawards
schorlarship




profexamname
Date_TakenFra
rating
titletrainingseminar
placetrainingseminar
datetrainingseminar
empstatus
referencename
referenceadd
referencecontactnum
referenceemailadd
dateaccomplish -->