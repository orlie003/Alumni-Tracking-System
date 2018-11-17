<?php
    require('../../connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
        $default_password = $_POST["password"];
 
        $query = "INSERT INTO `user_login` (`username`, `password`, `default_password`, `Alumni_id`) VALUES ('$username', '$password', '$default_password' , '')";
        $result = mysqli_query($connection, $query);
        if($result==0){
            
            $fmsg ="User Registration Failed";
        }else{
            
header('location:../');
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Sign-Up</title>
<link rel="stylesheet" href="../../../css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

  <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="../" class="navbar-brand" style="color:black;">Alumni Tracking System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

        </div>
      </div>
    </div>
    <section class="container row" style="margin-top: 150px;">
<form class="offset-4 col-6" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Create Alumni Account</h1>
  <label for="inputEmail" class="sr-only">Username/ID number:</label>
  <input type="text" name="username" class="form-control" placeholder="Username/ID number" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" class="form-control mt-2 mb-3" placeholder="Password" required="">
  <button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Create Account</button>
    
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      
</form>
    </section>

  <footer class="blog-footer fixed-bottom text-center">
      <p>Alumni Tracking System is built for <a href="https://getbootstrap.com/">Pangasinan State University</a> by Orlie Oliva</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
</body>
</html>