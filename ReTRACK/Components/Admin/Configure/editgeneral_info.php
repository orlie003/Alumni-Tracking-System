<?php
session_start();

$id = $_GET['alumni_id'];
include('../../connect.php');
$query = " SELECT * FROM general_info where alumni_id ='$id'";

$result = mysqli_query($connection, $query);

if (isset($_POST['idnumber'])) {
  $idnumber = $_POST['idnumber'];
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
  $batch = $_POST['batch'];


$i = $_POST['alumni_id'];
  $query1 = "UPDATE general_info SET idnumber ='$idnumber', First_name ='$First_name', Middle_name = '$Middle_name', Last_name ='$Last_name', status ='$status', Gender ='$Gender', address_current ='$address_current', address_permanent ='$address_permanent', Mobile_num ='$Mobile_num', Tel_num ='$Tel_num', Email_add ='$Email_add', Birth_date ='$Birth_date', Age ='$Age', batch ='$batch'   where alumni_id = '$i' ";
  if(mysqli_query($connection,$query1)){

  header("Location:../index.php");
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
      
  <?php 

      while($row = mysqli_fetch_assoc($result)) 
      {

      ?>
<form method="post">
        <div class="form-group">
                <legend for="Basic_Info" class="col-form-label">Basic Information: </legend>

        <input type="hidden" name="alumni_id" value="<?php echo $row['Alumni_id'];?>">
                <div class="form-group row">
                  <div class="offset-6 col">

                <input type="text" class="form-control" name="idnumber" value="<?php echo $row['idnumber'];?>" placeholder="Enter ID Number"></div>
                  <div class="col">
                <input type="text" class="form-control" name="batch" value="<?php echo $row['batch']; ?>" placeholder="Alumni Batch"></div></div>
                <div class="input-group">
                <div class="input-group-prepend">
                <label class="input-group-text">Name: </label>
                </div>
                  <input type="text" name="First_name" aria-label="First name" class="form-control" placeholder="First name" value="<?php echo $row['First_name']; ?>">
                  <input type="text" name="Middle_name" aria-label="Middle name" class="form-control" placeholder="Middle name" value="<?php echo $row['Middle_name']; ?>">
                  <input type="text" name="Last_name" aria-label="Last name" class="form-control" placeholder="Last name" value="<?php echo $row['Last_name']; ?>">
                </div>               
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <label class="input-group-text" >Status: </label>
                </div>
                  <select class="custom-select col-md-6" name="status">
                    <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
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
                  <input type="text" aria-label="Address Current" name="address_current" class="form-control" placeholder="Address Current" value="<?php echo $row['address_current']; ?>">
                  <input type="text" aria-label="Permanent Address" name="address_permanent" class="form-control" placeholder="Permanent Address">
                </div>
                </div>

                <div class="\">
                <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text">Contact Information: </label>
                </div>
                  <input type="text" aria-label="Telephone Number" name="Tel_num" class="form-control" placeholder="Telephone Number" value="<?php echo $row['Tel_num']; ?>">
                  <input type="text" aria-label="Mobile Number" name="Mobile_num" class="form-control" placeholder="Mobile Number" value="<?php echo $row['Mobile_num']; ?>">
                  <input type="text" aria-label="Email Address" name="Email_add" class="form-control" placeholder="Email Address" value="<?php echo $row['Email_add']; ?>">
                </div>
                </div>
            </div>
              
              

                <div class="form-group">
                <div class="input-group">
                <div class="input-group-prepend">
                <label class="input-group-text">Birth Date: </label>
                </div>
                <input type="date" name="Birth_date" class="form-control" value="<?php echo $row['Birth_date']; ?>">
                <div class="input-group-prepend">
                <label class="input-group-text">Age</label>
                </div>
                <input type="text" name="Age" class="form-control" value="<?php echo $row['Age']; ?>">>
                </div> 
              </div>
              <button type="Submit" class="btn btn-primary w-100">Update</button>

      </form>

      <?php }?>
    </section>



   
    
    </body>  
</html>