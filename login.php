<?php
    require("lib/connection.php");

    if(isset($_POST['send']))
    {
        $email = $_POST['email'];

        $phone_number = $_POST['phone_number'];

        $search_data = "SELECT * FROM `patient` WHERE `email`= '$email' and `phone_number` = '$phone_number'";

        $run_query =mysqli_query($con,$search_data);

        $fetch_array=mysqli_fetch_array($run_query);

        $count_row =mysqli_num_rows($run_query);

        if($count_row>0)
        {
            
            session_start();
            $_SESSION['id']=$fetch_array['patient_id'];
            header('location:appointment.php');
        } 
        else
        {
            header("location:sign-up.php");
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            border: 3px solid blue; /* Blue border */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }
        h2 {
            color: blue;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: green; /* Green submit button */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 15px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <h2>Sign in</h2>
        <label for="user_name">User Name:</label>
        <input type="text" id="user_name" name="name" placeholder="Enter your user name" required>
        
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email id" required>
        
        <input type="submit" value="Submit" name="send">
    </form>
</body>
</html>
