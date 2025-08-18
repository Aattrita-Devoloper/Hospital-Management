<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require("lib/connection.php");

if (isset($_POST['send'])) {
    // Collect form data safely
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['dob'];
    $phoneNumber = $_POST['phone_number'];
    $otp = rand(100000, 999999); // Generate random OTP
    $otp_issue_time = date('Y-m-d H:i:s');
    $activation_code = md5(rand());
    $status = 0;

    // Check for duplicates
    $search_data = "SELECT * FROM `patient` WHERE `phone_number` = '$phoneNumber' OR `email` = '$email'";
    $run_search_query = mysqli_query($con, $search_data);
    $fetch_search_data = mysqli_fetch_array($run_search_query);
    $count_data = mysqli_num_rows($run_search_query);

    if ($count_data > 0) {
        if ($fetch_search_data['phone_number'] == $phoneNumber) {
            session_start();
            $_SESSION['id'] = $fetch_search_data['patient_id'];
            ?>
            <p style="color: white; background-color: red; padding: 10px; border-radius: 5px; font-weight: bold;">
                ⚠️ Warning: Phone number already exists.
            </p>
            <a href="sign-up.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK</a>
            <?php
        } elseif ($fetch_search_data['email'] == $email) {
            ?>
            <p style="color: white; background-color: red; padding: 10px; border-radius: 5px; font-weight: bold;">
                ⚠️ Warning: Email already exists.
            </p>
            <a href="sign-up.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK</a>
            <?php
        } else {
            ?>
            <p style="color: white; background-color: red; padding: 10px; border-radius: 5px; font-weight: bold;">
                ⚠️ Warning: Phone number & email already exists.
            </p>
            <a href="sign-up.php" style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; text-align: center">OK</a>
            <?php
        }
    } else {
        // Email sending function
        function smtpmailer($to, $from, $from_name, $subject, $body, $con, $firstName, $lastName, $email, $otp, $otp_issue_time, $activation_code, $status, $address, $gender, $dateOfBirth, $phoneNumber)
        {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;
            $mail->Username = 'sajsmultispecilityhospital@gmail.com';
            $mail->Password = 'jjoiavfxjvzbyzha';
            $mail->SMTPDebug = 0;  // keep debug off after testing
            $mail->isHTML(true);
            $mail->From = $from;
            $mail->FromName = $from_name;
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->addAddress($to);

            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                // Insert into database after successful email
                $insert_data = "INSERT INTO `patient` (`first_name`, `last_name`, `email`, `otp`,`otp_issue_time`, `activation_code`, `status`, `address`, `gender`, `date-of-birth`, `phone_number`) 
                VALUES ('$firstName','$lastName','$email','$otp','$otp_issue_time','$activation_code','$status','$address','$gender','$dateOfBirth','$phoneNumber')";

                $run_query = mysqli_query($con, $insert_data);
                if ($run_query) {
                    echo "<p style='color:green;'>Patient registered successfully and email sent.</p>";
                    // You can redirect to verify OTP page if needed
                    header("Location: verify-otp.php");
                } else {
                    echo "<p style='color:red;'>Database insertion failed: " . mysqli_error($con) . "</p>";
                }
            }
        }

        // Prepare email contents
        $to = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format");
        }

        $from = 'sajsmultispecilityhospital@gmail.com';
        $name = 'SAJS Multispecility Hospital';
        $subj = 'Email Verification';
        $msg = "Dear user,Welcome to SAJS Hospital <br> your Email Verification code is: " . $otp;

        smtpmailer($to, $from, $name, $subj, $msg, $con, $firstName, $lastName, $email, $otp, $otp_issue_time, $activation_code, $status, $address, $gender, $dateOfBirth, $phoneNumber);
    }
}
?>
