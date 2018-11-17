 <?php  
 session_start();

include('../connect.php');
$id = $_SESSION['user_ids'];
$query1 = " SELECT * FROM general_info where Alumni_id = '$id'";

$result1 = mysqli_query($connection, $query1);

$query = " SELECT * FROM educationbg where Alumni_id = '$id'";

$result = mysqli_query($connection, $query);

// dito ilagay yung nasa admin side na editgeneral_info


 ?>  


 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
            <link rel="stylesheet" href="../../css/bootstrap.min.css" >
      </head>  
      <body style="height: 100%; padding-top: 30px;" class="mb-5">  
          <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary ">
      <div class="container">
        <a href="../" class="navbar-brand" style="color:black;">Alumni Tracking System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="nav navbar-nav ml-auto">
             <li class="nav-item ">
              <a class="nav-link"  href="pass.php" style="color:black;" >Change Password<span class="caret"></span></a>
              </li>  <li class="nav-item ">
              <a class="nav-link" style="color:black;"href="logout.php">Log Out<span class="caret"></span></a>
              </li>  


          </ul>


        </div>
      </div>
    </nav>
    <section class="jumbotron">
     <header class="bg-light container " id="first">
          <div>
        <div class="row mx-auto">
            <div class="col-2">
                <img src="../../img/logo.png" class="img-fluid img">               
            </div>
            <div class="mx-auto text-center col-8">
                    <h1  style="font-size: 2vw;">Pangasinan State University</h1>
                    <h3  style="font-size: 2vw;">College of Computing Science</h3>
                    <h3  style="font-size: 1.5vw;">Online Alumni Tracking System</h3>
                    <p  style="font-size: 2vw;">I.T Department</p>
                    
            </div>
            <div class="col-2">
                <img src="../../img/logo2.jpg" class="img-fluid img">               
            </div>
        </div>
    </div>
    </header>
    </section>

<section id="status">
   <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
          <?php 

      while($row = mysqli_fetch_assoc($result1)) 
      {

      ?>
      <div class="container">

  <div class="form-group">
                <legend for="Basic_Info" class="col-form-label">Basic Information: </legend>

        <input type="hidden" disabled name="alumni_id" value="<?php echo $row['Alumni_id'];?>">
                <div class="form-group row">
                  <div class="offset-8 col">
                <label>ID Number</label>
                <input type="text" class="form-control" disabled name="idnumber" value="<?php echo $row['idnumber'];?>" placeholder="Enter ID Number"></div>
                <div class="col">
                <label>Batch </label>
                <input type="text" class="form-control" disabled name="batch" value="<?php echo $row['batch']; ?>" placeholder="Alumni Batch"></div></div>
                <div class="input-group">
                <div class="input-group-prepend">
                <label class="input-group-text">Name: </label>
                </div>
                  <input type="text" disabled name="First_name" aria-label="First name" class="form-control" placeholder="First name" value="<?php echo $row['First_name']; ?>">
                  <input type="text" disabled name="Middle_name" aria-label="Middle name" class="form-control" placeholder="Middle name" value="<?php echo $row['Middle_name']; ?>">
                  <input type="text" disabled name="Last_name" aria-label="Last name" class="form-control" placeholder="Last name" value="<?php echo $row['Last_name']; ?>">
                </div>               
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <label class="input-group-text" >Status: </label>
                </div>
                  <select class="custom-select col-md-6" disabled name="status">
                    <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Separated">Separated</option>
                    <option value="Single Parent">Single Parent</option>
                    <option value="Widow or Widower">Widow or Widower</option>
                  </select><div class="input-group-prepend">
                <label class="input-group-text" >Gender: </label>
                </div>
                  <select class="custom-select col-md-6" disabled name="Gender" >
                    <option value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?></option>
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
                  <input type="text" aria-label="Address" disabled name="address_current" class="form-control" placeholder="Address" value="<?php echo $row['address_current']; ?>">
                  <input type="text" aria-label="Permanent Address" disabled name="address_permanent" class="form-control" placeholder="Permanent Address" value="<?php echo $row['address_permanent']; ?>">
                </div>
                </div>

                <div class="form-group">
                <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text">Contact Information: </label>
                </div>
                  <input type="text" aria-label="Telephone Number" disabled name="Tel_num" class="form-control" placeholder="Telephone Number" value="<?php echo $row['Tel_num']; ?>">
                  <input type="text" aria-label="Mobile Number" disabled name="Mobile_num" class="form-control" placeholder="Mobile Number" value="<?php echo $row['Mobile_num']; ?>">
                  <input type="text" aria-label="Email Address" disabled name="Email_add" class="form-control" placeholder="Email Address" value="<?php echo $row['Email_add']; ?>">
                </div>
                </div>
            </div>
              
              

                <div class="form-group">
                <div class="input-group">
                <div class="input-group-prepend">
                <label class="input-group-text">Birth Date: </label>
                </div>
                <input type="date" disabled name="Birth_date" value="<?php echo $row['Birth_date'];?>" class="form-control">
                <div class="input-group-prepend">
                <label class="input-group-text">Age</label>
                </div>
                <input type="text" disabled name="Age" class="form-control" value="<?php echo $row['Age']; ?>">
                </div> 
              </div>
              </div>
              <button type="button" class="btn btn-primary w-100" data-target="#carouselExampleIndicators" data-slide-to="1">Next</button>

</div>
      <?php }?>


         <div class="carousel-item">
           <div class="container container-fluid">

          <div class="mx-auto mb-4" style="width: 350px;">
          <h2 >Employment Status</h2>
          </div>

        <div class="row">

         <div class="col-sm"> 
              <div class="card">
              <div class="d-flex justify-content-center  bg-info" width="100" height="100">
                  <img class="rounded-circle img-fluid bg-white "  src="../../img/Employed" alt="Generic placeholder image" ></div>
                  <div class="mx-auto mt-2">
                  <h5>Employed</h5>                    
                  </div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Employed">Go</button>
              </div>
          </div>

          <div class="col-sm"> 
              <div class="card">
              <div class="d-flex justify-content-center  bg-info" width="100" height="100">
                  <img class="rounded-circle img-fluid bg-white "  src="../../img/self" alt="Generic placeholder image" ></div>
                  <div class="mx-auto mt-2">
                  <h5>Self Employed</h5>                    
                  </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#selfemployed">Go</button>
              </div>
          </div>

          <div class="col-sm"> 
              <div class="card">
              <div class="d-flex justify-content-center  bg-info" width="100" height="100">
                  <img class="rounded-circle img-fluid bg-white "  src="../../img/Unemployment" alt="Generic placeholder image" ></div>
                  <div class="mx-auto mt-2">
                  <h5>Unemployed</h5>                    
                  </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Unemployed1">Go</button>
              </div>
          </div>

          <div class="col-sm"> 
              <div class="card">
              <div class="d-flex justify-content-center  bg-info" width="100" height="100">
                  <img class="rounded-circle img-fluid bg-white "  src="../../img/never" alt="Generic placeholder image" ></div>
                  <div class="mx-auto mt-2">
                  <h5>Never Employed</h5>                    
                  </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Never">Go</button>
              </div>
          </div>


        </div>
        </div>
    </div>
  </div>
</div>

</section>
<div class="modal fade" id="Employed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Employed Current Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="text-info">Is your Job your First job??</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="employedNo" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="employedYES"  data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="selfemployed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Self Employed Current Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="text-info">Are you Self Employed after Graduation?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="selfNo" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" id="selfYES" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Unemployed1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Are you sure</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="text-info">Unemployed, But you was Employed Before?</h4>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-primary" id="Unemployed" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Never" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4 class="text-info">Never Employed?</h4>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-primary" id="Never" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>
   
   
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../js/index.js"></script>

</body>
</html>
<script>
  $( "#employedYES" ).click(function() {
    $( "#status" ).load( "condition/employedYES.php", function() {
  alert( "Load was performed." );
});
});
    $( "#employedNo" ).click(function() {
    $( "#status" ).load( "condition/employedNo.php", function() {
  alert( "Load was performed." );
});
});
      $( "#selfYES" ).click(function() {
    $( "#status" ).load( "condition/SEAC.php", function() {
  alert( "Load was performed." );
});
});

        $( "#selfNo" ).click(function() {
    $( "#status" ).load( "condition/SEEB.php", function() {
  alert( "Load was performed." );
});
});
        $( "#Unemployed" ).click(function() {
    $( "#status" ).load( "condition/unemployed.php", function() {
  alert( "Load was performed." );
});
});
        
        $( "#Never" ).click(function() {
    $( "#status" ).load( "condition/never.php", function() {
  alert( "Load was performed." );
});
});

  
</script>