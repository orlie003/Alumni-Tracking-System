<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "a");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
   SELECT * FROM general_info INNER JOIN educationbg ON general_info.alumni_id = educationbg.Alumni_id
  WHERE First_name LIKE '%".$search."%'
  OR Last_name LIKE '%".$search."%' 
  OR Middle_name LIKE '%".$search."%' 



 ";
}
else
{
 $query = "
  SELECT * FROM general_info INNER JOIN educationbg ON general_info.alumni_id = educationbg.alumni_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Middle Name</th>
     <th>Status</th>
     <th>Gender</th>
     <th>Address Current</th>
     <th>Address Permanent</th>
     <th>Mobile Number</th>
     <th>Tel Number</th>
     <th>Email Address</th>
     <th>Birth Date</th>
     <th>Age</th>
     <th>ID No.</th>
     <th>Batch</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["First_name"].'</td>
    <td>'.$row["Last_name"].'</td>
    <td>'.$row["Middle_name"].'</td>
    <td>'.$row["status"].'</td>
    <td>'.$row["Gender"].'</td>
    <td>'.$row["address_current"].'</td>
    <td>'.$row["address_permanent"].'</td>
    <td>'.$row["Mobile_num"].'</td>
    <td>'.$row["Tel_num"].'</td>
    <td>'.$row["Email_add"].'</td>
    <td>'.$row["Birth_date"].'</td>
    <td>'.$row["Age"].'</td>
    <td>'.$row["idnumber"].'</td>
    <td>'.$row["batch"].'</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Edit Records
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="configure/editgeneral_info.php?alumni_id='.$row["Alumni_id"].'">Edit General Info</a>
    <a class="dropdown-item" href="configure/editeduc.php?alumni_id='.$row["educ_id"].'">Edit Educational</a>
    <a class="dropdown-item" href="configure/editempstatus.php">Edit Employment Status</a>
  </div>
  </div>
  </div>
</td>
    <td><a href="configure/view.php?alumni_id='.$row["emp_id"].'">view</a></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>