<?php
session_start();

$id = $_SESSION['alumni_id'];
include('../../connect.php');
$query = " SELECT * FROM educationbg where alumni_id ='$id'";

$result = mysqli_query($connection, $query);

if (isset($_POST['idnumber'])) {
  $idnumber = $_POST['idnumber'];
  $degree = $_POST['degree'];
  $name_school = $_POST['name_school'];
  $year_grad = $_POST['year_grad'];
  $honors_received = $_POST['honors_received'];
  $scholarship = $_POST['scholarship'];
  $Reason_Bac = implode(',', $_POST['Reason_Bac']);
  $reasongrad = $_POST['Reasona'];
  $name_exam = $_POST['name_exam'];
  $Date_Taken = $_POST['Date_Taken'];
  $Rating = $_POST['Rating'];
  $issued_by = $_POST['issued_by'];
  $Title_Training_Seminar = $_POST['Title_Training_Seminar'];
  $Date_Training_Seminar = $_POST['Date_Training_Seminar'];
  $Place_Training_Seminar = $_POST['Place_Training_Seminar'];
 
  
  $query1 = "UPDATE educationbg SET degree ='$degree', name_shool ='$name_shool', year_grad = '$year_grad', honors_received ='$honors_received', scholarship = '$scholarship', baccalaureate_reason ='$Reason_Bac', grad_study_reason = '$reasongrad', name_exam = '$name_exam' date_taken = '$Date_Taken', rating = '$Rating', training_seminar_title = '$Title_Training_Seminar', dates = '$Date_Training_Seminar',place_of_training_seminar = '$Place_Training_Seminar' where educ_id = '$i' ";
  if(mysqli_query($connection,$query1)){

  header("Location:../index.php");
}
else{

  echo"Error";
}

mysqli_close($connection);
}

?>
   <html>  
    <head>  
        <title>Welcome</title>  
      <link rel="stylesheet" href="../../../css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../../../css/signin.css">
    </head>  
    <body >
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="../" class="navbar-brand" style="color:black;">Alumni Tracking System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="nav navbar-nav ml-auto">
             <li class="nav-item dropdown">
              <a class="nav-link"  href="logout.php" style="color:black;" >Log Out <span class="caret"></span></a>
          </li>      
          </ul>

        </div>
      </div>
    </nav>
    <div class="jumbotron">    
    <section class="ml-2 mr-2" style="margin-top:1550px;">
      
  <?php 

      while($row = mysqli_fetch_assoc($result)) 
      {

      ?>
<form method="post" class="form">
        <div class="form-group">
                <legend for="Basic_Info" class="col-form-label">Educational Background: </legend>

        <input type="text" name="alumni_id" value="<?php echo $row['educ_id'];?>">
        

<fieldset class="form-group mb-5">

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
      <td class="bg-white"><input class="form-control" type="text" id="degree1" onkeyup="degrees()" value="<?php echo $row['degree1']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school1" onkeyup="name_school()" value="<?php echo $row['name_school1']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated1" onkeyup="year_graduated()" value="<?php echo $row['year_graduated1']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received1" onkeyup="award_received()" value="<?php echo $row['award_received1']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship1" onkeyup="scholarship()" value="<?php echo $row['Scholarship1']; ?>"></td>
    </tr>
    <tr>
      <td class="bg-white"><input class="form-control" type="text" id="degree2" onkeyup="degrees()" alue="<?php echo $row['degree2']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school2" onkeyup="name_school()" value="<?php echo $row['name_school2']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated2" onkeyup="year_graduated()" value="<?php echo $row['year_graduated2']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received2" onkeyup="award_received()" value="<?php echo $row['award_received2']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship2" onkeyup="scholarship()"  value="<?php echo $row['Scholarship2']; ?>"></td>
    </tr>
    <tr>
      <td class="bg-white"><input class="form-control" type="text" id="degree3" onkeyup="degrees()" alue="<?php echo $row['degree3']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school3" onkeyup="name_school()" value="<?php echo $row['name_school3']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated3" onkeyup="year_graduated()" value="<?php echo $row['year_graduated3']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received3" onkeyup="award_received()" value="<?php echo $row['award_received3']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship3" onkeyup="scholarship()"></td>
    </tr>
    <tr>
      <td class="bg-white"><input class="form-control" type="text" id="degree4" onkeyup="degrees()" alue="<?php echo $row['degree4']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school4" onkeyup="name_school()" value="<?php echo $row['name_school4']; ?>">></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated4" onkeyup="year_graduated()" value="<?php echo $row['year_graduated4']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received4" onkeyup="award_received()" value="<?php echo $row['award_received4']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship4" onkeyup="scholarship()"  value="<?php echo $row['Scholarship4']; ?>"></td>
    </tr>
    
  </tbody>
</table>


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
      <td class="bg-white"><input class="form-control" type="text" id="degree5" onkeyup="degrees()"  value="<?php echo $row['degree5']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school5" onkeyup="name_school()" value="<?php echo $row['name_school5']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated5" onkeyup="year_graduated()" value="<?php echo $row['year_graduated5']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received5" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship5" onkeyup="scholarship()" value="<?php echo $row['Scholarship5']; ?>"></td>
    </tr>
    <tr class="table-dark">
      <td class="bg-white"><input class="form-control" type="text" id="degree6" onkeyup="degrees()" value="<?php echo $row['degree6']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school6" onkeyup="name_school()" value="<?php echo $row['name_school6']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated6" onkeyup="year_graduated()" value="<?php echo $row['year_graduated6']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received6" onkeyup="award_received()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship6" onkeyup="scholarship()" value="<?php echo $row['Scholarship6']; ?>"></td>
    </tr>
    <tr class="table-dark">
      <td class="bg-white"><input class="form-control" type="text" id="degree7" onkeyup="degrees()" value="<?php echo $row['degree7']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="name_school7" onkeyup="name_school()" value="<?php echo $row['name_school7']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="year_graduated7" onkeyup="year_graduated()"></td>
      <td class="bg-white"><input class="form-control" type="text" id="award_received7" onkeyup="award_received()" value="<?php echo $row['year_graduated7']; ?>"></td>
      <td class="bg-white"><input class="form-control" type="text" id="Scholarship7" onkeyup="scholarship()" value="<?php echo $row['Scholarship7']; ?>"></td>
    </tr>
  </tbody> 


</table>

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


<fieldset class="form-group mb-5">
      <legend>  
     Reasons for taking advance or graduate studies</legend>
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona" onclick="this.value" value="For employment">
                   For employment<br>
                    </label>
      </div>

      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona" onclick="this.value" value="For promotion">
                    For promotion<br>
                    </label>
      </div>
         
       
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona" onclick="this.value" value="For professional development">
                    For professional development<br>
                    </label>
      
      </div>
      <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" name="Reasona" onclick="this.value" value=" Others">
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

<input type="text" style="display: none;" name="Degree" id="combine_degree">
<input type="text" style="display: none;" name="Year_graduated_degree" id="combine_year_graduated">
<input type="text" style="display: none;" name="Honor_awards" id="combine_award_received">
<input type="text" style="display: none;" name="Scholarship" id="combine_Scholarship">
<input type="text" style="display: none;" name="Prof_Exam_Name" id="combine_name_exam">
<input type="text" style="display: none;" name="Date_Taken" id="combine_date_taken">
<input type="text" style="display: none;" name="issued_by" id="combine_issued">
<input type="text" style="display: none;" name="Title_Training_Seminar" id="combine_title_training">
<input type="text" style="display: none;" name="Date_Training_Seminar" id="combine_date_training">
<input type="text" style="display: none;" name="Place_Training_Seminar" id="combine_place_training">
<input type="text" style="display: none;" name="Rating" id="combine_Rating">
<input type="text" style="display: none;" name="Name_school" id="combine_name_school">



        <button type="Submit" class="btn btn-primary w-100">Update</button>

      </form>

      <?php }?>
    </section>
</div>




   <script type="text/javascript">


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
  

</script>


    
    </body>  
</html>