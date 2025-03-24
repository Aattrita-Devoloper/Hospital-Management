<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  $server     = "localhost";
  $username   = "root";
  $password   = "";
  $database   = "hospital_management";
  $con        = mysqli_connect($server,$username,$password,$database);


  // Check connection
  if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
