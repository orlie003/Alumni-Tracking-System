<?php

//logout.php

session_start();

unset($_SESSION["user_ids"]);

header('location:../index.php');

?>