<?php
session_start();
include('../connect.php');

if(!isset($_SESSION['Admin']))
{
  header("location:../client/");
}

 $sql = "SELECT * FROM general_info INNER JOIN educationbg ON general_info.alumni_id = educationbg.alumni_id";  
 $result = mysqli_query($connection, $sql);  
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>

    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../../css/scrolling-nav.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/index.css">
<style type="text/css">.like, .unlike, .likes_count {color: blue;}.hide {display: none;}.fa-thumbs-up, .fa-thumbs-o-up { transform: rotateY(-180deg);font-size: 1.7em;}</style>
  </head>

  <body id="top">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" style="color:black;">Alumni Tracking System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <ul class="nav navbar-nav ml-auto">
            </li>    
             <li class="nav-item dropdown">
              <a class="nav-link"  href="configure/register.php" style="color:black;" >Create User!<span class="caret"></span></a>
          </li>   
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: black;"  data-toggle="dropdown" id="download" >Record <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="configure/login.php">Add Record</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../4/cosmo/_variables.scss">Delete Record</a>
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: black;"  data-toggle="dropdown" id="download" >Search <span class="caret"></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" id="one">TRY</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" >Delete Record</a>
              </div>
          </li> 
          </li>    
             <li class="nav-item dropdown">
              <a class="nav-link"  href="../logout.php" style="color:black;" >Log Out <span class="caret"></span></a>
          </li>
              
          </ul>

        </div>
      </div>
    </nav>

<section id="live">
  
  <div class="container" style="margin-top: 150px;">
           <div class="row">

         <div class="col-sm"> 
              <div class="card">
              <div class="d-flex justify-content-center  bg-info" width="100" height="100">
                  <img class="rounded-circle img-fluid bg-white "  src="../../img/Employed" alt="Generic placeholder image" ></div>
                  <div class="mx-auto mt-2">
                  <h5>Employed</h5>                    
                  </div>
    <button type="button" id="employed" class="btn btn-success">Go</button>
              </div>
          </div>

          <div class="col-sm"> 
              <div class="card">
              <div class="d-flex justify-content-center  bg-info" width="100" height="100">
                  <img class="rounded-circle img-fluid bg-white "  src="../../img/self" alt="Generic placeholder image" ></div>
                  <div class="mx-auto mt-2">
                  <h5>Self Employed</h5>                    
                  </div>
            <button type="button" class="btn btn-success">Go</button>
              </div>
          </div>

          <div class="col-sm"> 
              <div class="card">
              <div class="d-flex justify-content-center  bg-info" width="100" height="100">
                  <img class="rounded-circle img-fluid bg-white "  src="../../img/Unemployment" alt="Generic placeholder image" ></div>
                  <div class="mx-auto mt-2">
                  <h5>Unemployed</h5>                    
                  </div>
            <button type="button" class="btn btn-success">Go</button>
              </div>
          </div>


        </div>
        </div>
  </div>

</section>

   
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../js/scrolling-nav.js"></script>
    <script src="../../js/index.js"></script>

  </body>

</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"configure/fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});

  $( "#employed" ).click(function() {
    $( "#live" ).load( "configure/EMP.php", function() {

});
});
</script>