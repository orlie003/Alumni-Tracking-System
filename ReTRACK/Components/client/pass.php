<?php
session_start();
include('../connect.php');


if(isset($_POST['login']))
{
  $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
  $passwords = $_POST["password"];
  $id = $_SESSION['user_ids'];
  $query = "UPDATE `user_login` SET `password` = '$password' , `default_password` ='$passwords' where user_ids = '$id'";
  if(mysqli_query($connection,$query)){

  header("Location:./");
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
      <link rel="stylesheet" href="../../css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../../css/signin.css">
    </head>  
    <body class="text-center">  

   
          <form class="form-signin" method="post">
  <img class="mb-4" src="../../img/pass.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Change Password</h1>
  <label for="inputPassword" class="sr-only">Enter Old Password: </label>
  <input type="text" name="password" class="form-control mb-3" required placeholder="Enter old Password" />
  <label for="inputPassword" class="sr-only">Enter new Password: </label>
  <input type="text" name="password" class="form-control mb-3" required placeholder="Enter New Password" />
  <label for="inputPassword" class="sr-only"> Re enter your new Password: </label>
  <input type="text" name="password" class="form-control mb-3" required placeholder="Re enter your new Password" />
  <input type="submit" name="login" class="btn btn-info" style="width: 50%;" value="Submit" />

  
      <footer class="mt-5 mb-3 text-muted" style=" position: fixed; left: 0; bottom: 0;   width: 100%; color: white;text-align: center;">© 2017-2018</footer>

</form>

    </body>  
</html>