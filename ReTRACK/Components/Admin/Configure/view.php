<?php

session_start();
include('../../connect.php');
$id = $_GET['alumni_id'];
$query = " SELECT * FROM general_info INNER JOIN educationbg ON general_info.alumni_id = educationbg.alumni_id where fetch_id = '$id'";

$query2 = " SELECT * FROM employment_status where alum_id = '$id'";

$result = mysqli_query($connection, $query);


$result2 = mysqli_query($connection, $query2);

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



    <section  style="overflow-x: auto; width: 90%;">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">First name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Status</th>
      <th scope="col">Gender</th>
      <th scope="col">Address Current</th>
      <th scope="col">Address Permanent</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Tel Number</th>
      <th scope="col">Email Add</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Age</th>
      <th scope="col">ID Number</th>
      <th scope="col">Batch</th>
      <th scope="col">Degree</th>
      <th scope="col">Name of the School</th>
      <th scope="col">Year Graduated</th>
      <th scope="col">Honor(s) or Award(s) received</th>
      <th scope="col">Scholarship</th>
      <th scope="col">Reason pursuing baccalaureate</th>
      <th scope="col">Reason for taking graduate studies</th>
      <th scope="col">Name of Examination</th>
      <th scope="col">Date Taken</th>
      <th scope="col">Rating</th>
      <th scope="col">Title of the Training or Seminar</th>
      <th scope="col">Place of the Training or Seminar</th>
      <th scope="col">Date</th>
      <th scope="col">stat_present</th>
      <th scope="col">jobtitle_present</th>
      <th scope="col">namecompany_present</th>
      <th scope="col">place_presentemp</th>
      <th scope="col">add_presentemp</th>
      <th scope="col">majorline_present</th>
      <th scope="col">gross_income</th>
      <th scope="col">find_presentjob</th>
      <th scope="col">reason_acceptpresent</th>
      <th scope="col">present_rel_degree</th>
      <th scope="col">stat_firstemp</th>
      <th scope="col">jobtitle_first</th>
      <th scope="col">namecompany_first</th>
      <th scope="col">place_firstemp</th>
      <th scope="col">add_firstemp</th>
      <th scope="col">majorline_first</th>
      <th scope="col">find_firstjob</th>
      <th scope="col">reason_acceptfirst</th>
      <th scope="col">first_rel_degree</th>
      <th scope="col">howlong_firstjob</th>
      <th scope="col">reason_leavefirstjob</th>
      <th scope="col">reasonpresently_unemp</th>
      <th scope="col">reason_neveremp</th>
      <th scope="col">reason_selfemp</th>
      <th scope="col">majorline_selfemp</th>
      <th scope="col">grossearning_buss</th>
      <th scope="col">howlong_buss</th>
    </tr>
  </thead>
    <?php 

      while($row = mysqli_fetch_assoc($result)) 
      {

      ?>

    <tr>
      <td><?php echo $row['First_name'];?></td>
      <td><?php echo $row['Middle_name'];?></td>
      <td><?php echo $row['Last_name'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><?php echo $row['Gender'];?></td>
      <td><?php echo $row['address_current'];?></td>
      <td><?php echo $row['address_permanent'];?></td>
      <td><?php echo $row['Mobile_num'];?></td>
      <td><?php echo $row['Tel_num'];?></td>
      <td><?php echo $row['Email_add'];?></td>
      <td><?php echo $row['Birth_date'];?></td>
      <td><?php echo $row['Age'];?></td>
      <td><?php echo $row['idnumber'];?></td>
      <td><?php echo $row['batch'];?></td>
      <td><?php echo $row['degree'];?></td>
      <td><?php echo $row['name_school'];?></td>
      <td><?php echo $row['year_grad'];?></td>
      <td><?php echo $row['honors_received'];?></td>
      <td><?php echo $row['scholarship'];?></td>
      <td><?php echo $row['baccalaureate_reason'];?></td>
      <td><?php echo $row['grad_study_reason'];?></td>
      <td><?php echo $row['name_of_exam'];?></td>
      <td><?php echo $row['date_taken'];?></td>
      <td><?php echo $row['rating'];?></td>
      <td><?php echo $row['training_seminar_title'];?></td>
      <td><?php echo $row['place_of_training_seminar'];?></td>
      <td><?php echo $row['date'];?></td>

  <?php }?>



    <?php 

      while($row = mysqli_fetch_assoc($result)) 
      {

      ?> 

      <td><?php echo $row['stat_present'];?></td>
      <td><?php echo $row['jobtitle_present'];?></td>
      <td><?php echo $row['namecompany_present'];?></td>
      <td><?php echo $row['place_presentemp'];?></td>
      <td><?php echo $row['add_presentemp'];?></td>
      <td><?php echo $row['majorline_present'];?></td>
      <td><?php echo $row['gross_income'];?></td>
      <td><?php echo $row['find_presentjob'];?></td>
      <td><?php echo $row['reason_acceptpresent'];?></td>
      <td><?php echo $row['present_rel_degree'];?></td>
      <td><?php echo $row['stat_firstemp'];?></td>
      <td><?php echo $row['jobtitle_first'];?></td>
      <td><?php echo $row['namecompany_first'];?></td>
      <td><?php echo $row['place_firstemp'];?></td>
      <td><?php echo $row['add_firstemp'];?></td>
      <td><?php echo $row['majorline_first'];?></td>
      <td><?php echo $row['find_firstjob'];?></td>
      <td><?php echo $row['reason_acceptfirst'];?></td>
      <td><?php echo $row['first_rel_degree'];?></td>
      <td><?php echo $row['howlong_firstjob'];?></td>
      <td><?php echo $row['reason_leavefirstjob'];?></td>
      <td><?php echo $row['reasonpresently_unemp'];?></td>
      <td><?php echo $row['reason_neveremp'];?></td>
      <td><?php echo $row['reason_selfemp'];?></td>
      <td><?php echo $row['majorline_selfemp'];?></td>
      <td><?php echo $row['grossearning_buss'];?></td>
      <td><?php echo $row['howlong_buss'];?></td>
     

</tr>
</tbody>

<?php }?>
    	
    	
    </section>



   
    
    </body>  
</html>