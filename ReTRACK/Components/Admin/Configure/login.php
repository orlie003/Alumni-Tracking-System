<?php

include('../../connect.php');

session_start();

$message = '';


if(isset($_SESSION['user_ids']))
{
  header('location:addrecord.php');
}



if(isset($_POST['login']))
{
  $username = $_POST['username'];
  $query = "
    SELECT * FROM user_login 
      WHERE username = :username
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
    array(
      ':username' => $_POST["username"]
    )
  );  
  $count = $statement->rowCount();
  if($count > 0)
  {
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
     $password = $_POST['password']; 
      if(password_verify($password, $row["password"]))
      {
        $_SESSION['user_ids'] = $row['user_ids'];
        header('location:addrecord.php');
      }
      else
      {
        $message = '<label>Wrong Password</label>';
      }
    }
  }
  else
  {
    $message = '<label>Wrong Username</label>';
  }
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
    <body class="text-center">  

   
          <form class="form-signin" method="post">
  <img class="mb-4" src="../../../img/self" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
  <label for="inputEmail" class="sr-only">Username: </label>
  <input type="text" name="username" class="form-control mb-1" required placeholder="Enter your username" />
  <label for="inputPassword" class="sr-only">Password: </label>
  <input type="password" name="password" class="form-control mb-1" required placeholder="Enter your password" />
  <input type="submit" name="login" class="btn btn-info" style="width: 50%;" value="Login" />
  <center>Log In as ADMIN!<br><a href="admin.php">ADMIN</a></center>

  
    
      <?php if(isset($message)){ ?><div class="alert text-danger" role="alert"> <?php echo $message; ?> </div><?php } ?>
      <footer class="mt-5 mb-3 text-muted" style=" position: fixed; left: 0; bottom: 0;   width: 100%; color: white;text-align: center;">© 2017-2018</footer>

</form>

    </body>  
</html>