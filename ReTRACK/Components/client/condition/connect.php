<?php

$connection = mysqli_connect('localhost','root','','');
if (!$connection) {
  die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection,'db_alum');
if (!$select_db) {
  die("Database Selection Failed" . mysqli_error($connection));
}

$connect = new PDO("mysql:host=localhost;dbname=db_alum", "root", "");


?>
<?php
// Make a MySQL Connection
include('connect.php');

   if (isset($_POST['submit'])) {
    $checkBox = implode(',', $_POST['Days']);

    mysqli_query($connection, "INSERT INTO example (orange) VALUES ('" . $checkBox . "')");

  }
?>
<html>
<body>
<form method="post">
Flights on: <br/>
<input type="checkbox" name="Days[]" value="Daily">Daily<br>
<input type="checkbox" name="Days[]" value="Sunday">Sunday<br>
<input type="checkbox" name="Days[]" value="Monday">Monday<br>
<input type="checkbox" name="Days[]" value="Tuesday">Tuesday <br>
<input type="checkbox" name="Days[]" value="Wednesday">Wednesday<br>
<input type="checkbox" name="Days[]" value="Thursday">Thursday <br>
<input type="checkbox" name="Days[]" value="Friday">Friday<br>
<input type="checkbox" name="Days[]" value="Saturday">Saturday <br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>