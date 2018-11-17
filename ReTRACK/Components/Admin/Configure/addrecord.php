<?php

session_start();
include('../../connect.php');

if(!isset($_SESSION['user_ids']))
{
  header('location:logout.php');
}
if (isset($_POST['First_name'])) {
	$Alumni_id = $_POST['Alumni_id'];
	$First_name = $_POST['First_name'];
	$Middle_name = $_POST['Middle_name'];
	$Last_name = $_POST['Last_name'];
	$status = $_POST['status'];
	$Gender = $_POST['Gender'];
	$address_current = $_POST['address_current'];
	$address_permanent = $_POST['address_permanent'];
	$Mobile_num = $_POST['Mobile_num'];
	$Tel_num = $_POST['Tel_num'];
	$Email_add = $_POST['Email_add'];
  $Birth_date = $_POST['Birth_date'];
  $Age = $_POST['Age'];
  $idnumber = $_POST['idnumber'];
  $batch = $_POST['batch'];

    mysqli_query($connection, "INSERT INTO General_info(`Alumni_id`,`First_name`,`Middle_name`,`Last_name`,`status`,`Gender`,`address_current`,`address_permanent`,`Mobile_num`,`Tel_num`,`Email_add`,`Birth_date`,`Age`,`idnumber`,`batch`) VALUES ('$Alumni_id','$First_name','$Middle_name','$Last_name','$status','$Gender','$address_current','$address_permanent','$Mobile_num','$Tel_num','$Email_add','$Birth_date','$Age','$idnumber','$batch')");
    header('location:educ.php');
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
    <body >
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="../" class="navbar-brand" style="color:black;">Alumni Tracking System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="nav navbar-nav ml-auto">
             <li class="nav-item dropdown">
              <a class="nav-link"  href="logout.php" style="color:black;" >Log Out <span class="caret"></span></a>
          </li>      
          </ul>

        </div>
      </div>
    </nav>

    <section>
    	
    	<form method="post">
    		<input type="text" name="Alumni_id" value="<?php echo $_SESSION['user_ids']; ?>" style="display: none;">
        
    		<div class="form-group">
                <legend for="Basic_Info" class="col-form-label">Basic Information: </legend>
                <div class="form-group row">
                  <div class="offset-8 col">
                  <label>ID Number</label>
                <input type="text" class="form-control" name="idnumber" placeholder="ID Number"></div>
                  <div class="col">
                <label>Alumni Batch</label>
                <input type="text" class="form-control" name="batch" placeholder="Batch"></div></div>
                <div class="input-group">
                <div class="input-group-prepend">
                <label>Name: </label>
                </div>
                  <input type="text" name="First_name" aria-label="First name" class="form-control" placeholder="First name">
                  <input type="text" name="Middle_name" aria-label="Middle name" class="form-control" placeholder="Middle name">
                  <input type="text" name="Last_name" aria-label="Last name" class="form-control" placeholder="Last name">
                </div>               
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <label class="input-group-text" >Status: </label>
                </div>
                  <select class="custom-select col-md-6" name="status">
                    <option>Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Separated">Separated</option>
                    <option value="Single Parent">Single Parent</option>
                    <option value="Widow or Widower">Widow or Widower</option>
                  </select><div class="input-group-prepend">
                <label class="input-group-text" >Gender: </label>
                </div>
                  <select class="custom-select col-md-6" name="Gender" >
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
            </div>


               <div class="form-group">
                <label for="Basic_Info" class="form-label">Other Information:  </label>
                <div class="mb-3">
                <div class="input-group">
                <div class="input-group-prepend">                    
                <label class="input-group-text">Address: </label>
                </div>
                  <input type="text" aria-label="Address Current" name="address_current" class="form-control" placeholder="Address Current">
                  <input type="text" aria-label="Permanent Address" name="address_permanent" class="form-control" placeholder="Permanent Address">
                </div>
                </div>

                <div class="\">
                <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text">Contact Information: </label>
                </div>
                  <input type="text" aria-label="Telephone Number" name="Tel_num" class="form-control" placeholder="Telephone Number">
                  <input type="text" aria-label="Mobile Number" name="Mobile_num" class="form-control" placeholder="Mobile Number">
                  <input type="text" aria-label="Email Address" name="Email_add" class="form-control" placeholder="Email Address">
                </div>
                </div>
            </div>
              
              

                <div class="form-group">
                <div class="input-group">
                <div class="input-group-prepend">
                <label class="input-group-text">Birth Date: </label>
                </div>
                <input type="date" name="Birth_date" class="form-control">
                <div class="input-group-prepend">
                <label class="input-group-text">Age</label>
                </div>
                <input type="text" name="Age" class="form-control">
                </div> 
              </div>
              <button type="Submit" class="btn btn-primary w-100">Add</button>

    	</form>
    </section>



   
    
    </body>  
</html>