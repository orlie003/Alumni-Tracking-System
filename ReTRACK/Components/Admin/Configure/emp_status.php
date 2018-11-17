<?php

session_start();
include('../../connect.php');

if(!isset($_SESSION['user_ids']))
{
  header('location:logout.php');
}
	$Alumni_id = $_SESSION['user_ids'];


    mysqli_query($connection, "INSERT INTO `employment_status`(`emp_id`, `Alumni_id`, `stat_present`, `jobtitle_present`, `namecompany_present`, `place_presentemp`, `add_presentemp`, `majorline_present`, `gross_income`, `find_presentjob`, `reason_acceptpresent`, `present_rel_degree`, `stat_firstemp`, `jobtitle_first`, `namecompany_first`, `place_firstemp`, `add_firstemp`, `majorline_first`, `find_firstjob`, `reason_acceptfirst`, `first_rel_degree`, `howlong_firstjob`, `reason_leavefirstjob`, `reasonpresently_unemp`, `reason_neveremp`, `reason_selfemp`, `majorline_selfemp`, `grossearning_buss`, `howlong_buss`) VALUES ('$Alumni_id' ,'$Alumni_id' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' )");
    header("Location:login.php");
 


?>