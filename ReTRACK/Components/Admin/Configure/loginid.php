<?php

session_start();
include('../../connect.php');

if(!isset($_SESSION['user_ids']))
{
  header('location:logout.php');
}
	$Alumni_id = $_SESSION['user_ids'];


    mysqli_query($connection, "UPDATE user_login SET Alumni_id = '$Alumni_id' where user_ids = '$Alumni_id' ");
    header("Location:../");
 


?>