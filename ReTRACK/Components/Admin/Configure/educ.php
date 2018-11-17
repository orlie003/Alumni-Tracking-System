<?php

session_start();
include('../../connect.php');

if(!isset($_SESSION['user_ids']))
{
  header('location:logout.php');
}
	$Alumni_id = $_SESSION['user_ids'];


    mysqli_query($connection, "INSERT INTO `educationbg`(`educ_id`, `Alumni_id`, `degree`, `name_school`, `year_grad`, `honors_received`, `scholarship`, `baccalaureate_reason`, `grad_study_reason`, `name_of_exam`, `date_taken`, `rating`, `training_seminar_title`, `place_of_training_seminar`, `date`, `emp_status`, `fetch_id`) VALUES ('$Alumni_id','$Alumni_id','','','','','','','','','','','','','','','$Alumni_id')");
    header("Location:emp_status.php");
 


?>