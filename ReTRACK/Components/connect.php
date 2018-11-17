<?php

//database_connection.php
$connection = mysqli_connect('localhost','root','','');
if (!$connection) {
  die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection,'a');
if (!$select_db) {
  die("Database Selection Failed" . mysqli_error($connection));
}

$connect = new PDO("mysql:host=localhost;dbname=a", "root", "");


?>