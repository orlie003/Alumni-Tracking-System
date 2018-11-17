	<?php

include('../../connect.php');

$id = $_GET['id'];
$brand = $_GET['brand'];
$model = $_GET['model'];
$price = $_GET['price'];
$purpose = $_GET['purpose'];
$kasarian = $_GET['kasarian'];

$query = "UPDATE bag SET brand ='$brand' , model = '$model', price = '$price', purpose = '$purpose', kasarian = '$kasarian' WHERE id = '$id' ";

if(mysqli_query($conn,$query)){

	header("Location:home.php");
}
else{

	echo"Error";
}

mysqli_close($conn);

?>