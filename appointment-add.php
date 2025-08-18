<?php
    require("lib/connection.php");
    session_start();
   if(!$_SESSION['id'])
  {
    header("location:sign-up.php");
  }
   
    if(isset($_POST['send'])){
    $name               = $_POST['name'];

    $email              = $_POST['email'];

    $phoneNumber        = $_POST['phone'];

    $date               =$_POST['date'];

    $time               =$_POST['time'];

    $department         =$_POST['department'];

    $doctor             =$_POST['doctor'];


   $booked_by           =$_SESSION['id'];

   $search_query        =   "SELECT `status` from patient where `email`='$email'";
   $run_search_query    =   mysqli_query($con,$search_query);

   $fetch_array         =   mysqli_fetch_assoc($run_search_query);
   if($fetch_array['status']==1){

  

    $insert_query    ="INSERT INTO `appointment`( `name`, `email`, `phone`, `date`, `time`, `department_id`,`doctor_id`, `booked_by`) VALUES ('$name','$email ','$phoneNumber','$date','$time','$department','$doctor ','$booked_by')";

    $run_query =   mysqli_query($con,$insert_query);

        if($run_query)
        {
        ?>
        <div style="font-size: 20px; font-weight: bold; color: green; text-align: center; margin-top: 20px;">
        Your appointment has been booked
        </div>
        <div style="text-align: center; margin-top: 20px;">
        <a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK
        </a>
    <?php
        
    }
    else{
        ?>
        <div style="font-size: 20px; font-weight: bold; color: red; text-align: center; margin-top: 20px;">
        Please do otp varification by while sign-up
        </div>
        <div style="text-align: center; margin-top: 20px;">
        <a href="sign-up.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK
        </a>
        <?php
    }
    }
}
  


    

    
?>