<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "a");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
   SELECT * FROM general_info INNER JOIN educationbg ON general_info.alumni_id = educationbg.alumni_id
  WHERE First_name LIKE '%".$search."%'
  AND batch LIKE '2010'
  OR Last_name LIKE '%".$search."%' 
  OR emp_status LIKE '%".$search."%'
 



 ";
}
else
{
 $query = "
  SELECT * FROM general_info INNER JOIN educationbg ON general_info.alumni_id = educationbg.alumni_id where batch = 2010";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer Name</th>
     <th>lastname</th>
     <th>middlename</th>
     <th>Batch</th>
     <th></th>
     <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["First_name"].'</td>
    <td>'.$row["Last_name"].'</td>
    <td>'.$row["Middle_name"].'</td>
    <td>'.$row["batch"].'</td>
    <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Edit Records
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="configure/editgeneral_info.php?alumni_id='.$row["Alumni_id"].'">Edit General Info</a>
    <a class="dropdown-item" href="configure/editeduc.php?alumni_id='.$row["educ_id"].'">Edit Educational</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
  </div>
</td>
    <td><a href="configure/view.php?alumni_id='.$row["Alumni_id"].'">view</a></td>
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