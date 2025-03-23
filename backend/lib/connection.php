<?php
    $server ="localhost";
    $username  ="root";
    $password ="";
    $db ="hospital-management-system";
    $con=mysqli_connect($server,$username,$password,$db);
    if (!$con)
        echo "Connection Not Succesfully created".mysqli_connect_error();

?>
