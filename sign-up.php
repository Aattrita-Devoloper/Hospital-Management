<?php
    require("lib/connection.php");
    $otp_str = str_shuffle("0123456789");

    $otp  = substr($otp_str,4,9);
    $act_str = rand(100000,10000000);
    $activation_code = str_shuffle("abcdefghijklmnopqrstuvwxyz".$act_str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}

h2 {
    text-align: center;
    color: #333;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.gender-options {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

.gender-options label {
    margin: 0;
    font-weight: normal;
}

input[type="radio"] {
    margin-right: 5px;
}

input[type="submit"] {
    background: #007BFF;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    transition: background 0.3s;
}

input[type="submit"]:hover {
    background: #0056b3;
}
    </style>
</head>
<body>

    
    
    <form action="patient-add.php" method="POST">
    <h2>Sign Up</h2>

        <input type="hidden" id="otp" name="otp" value ="<?php echo "$otp" ;?>">
        
        <input type= "hidden" id ="activation_code" value ="<?php echo "$activation_code";?>">
        
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address"  rows="4" cols="68" required></textarea><br><br>

        <label for="gender">Gender:</label>
        <!-- <label for="male">Male</label> -->
        Male<input type="radio" id="male" name="gender" value="M">

        <!-- <label for="female">Female</label> -->
        Female<input type="radio" id="female" name="gender" value="F">

        <!-- <label for="other">Other</label> -->
        Other<input type="radio" id="other" name="gender" value="O"><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="phone_number">Phone Number</label>
        <input type="number" id="phone_number" name="phone_number" required><br>

        <input type="submit" value="Submit" name="send">

        <p style="font-size: 16px; color: black;">
            Already have an account? 
            <a href="login.php" style="color: blue; text-decoration: none; font-weight: bold;">
                Sign in
            </a>
        </p>
    </form>

</body>
</html>
