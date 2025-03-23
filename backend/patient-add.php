<?php
require("lib/connection.php");


if(isset($_POST['send']))
{
    $firstName   = $_POST['first_name'];

    $lastName    = $_POST['last_name'];

    $email       = $_POST['email'];

    $gender      = $_POST['gender'];

    $address     = $_POST['address'];

    $dateOfBirth = $_POST['dob'];

    $phoneNumber =$_POST['phone_number'];

    $search_data="SELECT * FROM `patient` WHERE `phone_number` = '$phoneNumber' OR `email` = '$email'";
    $run_search_query =mysqli_query($con,$search_data);

   $fetch_search_data =mysqli_fetch_array($run_search_query);
   $count_data   =mysqli_num_rows($run_search_query);

    if($count_data>0)
    {
        if($fetch_search_data['phone_number']==$phoneNumber)
        {
            session_start();
            $_SESSION['id']=$fetch_search_data['patient_id'];
            ?>
            <p style="color: white; background-color: red; padding: 10px; border-radius: 5px; font-weight: bold;">
                ⚠️ Warning: Phone number already exists.
            </p>
            <a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK
                </a>

            <?php
        }
        else if($fetch_search_data['email']==$email)
        {
            ?>
            <p style="color: white; background-color: red; padding: 10px; border-radius: 5px; font-weight: bold;">
                ⚠️ Warning: Email already exists.
            </p> 
            <a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK
                </a>

            <?php
        }
        else 
        {
            ?>
            <p style="color: white; background-color: red; padding: 10px; border-radius: 5px; font-weight: bold;">
                ⚠️ Warning: Phone number & email already exists.
            </p> 
            <a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK
                </a>

            <?php
        }
    } 
    else 
    {
        $insert_data ="INSERT INTO `patient`(`patient_id`, `first_name`, `last_name`, `email`, `address`, `gender`, `date-of-birth`, `phone_number`) VALUES ('','$firstName','$lastName','$email','$address','$gender','$dateOfBirth','$phoneNumber')";

        $run_query  = mysqli_query($con,$insert_data);
        header("location:dashboard.php");
    }
   
    


} 




?>