<?php
  $server     = "localhost";
  $username   = "root";
  $password   = "";
  $database   = "hospital-management-system";
  $con        = mysqli_connect($server,$username,$password,$database);


  // Check connection
  if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
    echo"success";
  }
?>
