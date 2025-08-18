<?php
require("lib/connection.php");
session_start();
$message = "";

if(isset($_POST['send']))
{
    $otp  = $_POST['otp'];

    $select_query           =   "SELECT * FROM `patient` WHERE `otp`='$otp'";
    $run_query              =   mysqli_query($con,$select_query);
    $fetch_array            =   mysqli_fetch_assoc($run_query);
    $otpIssueTime           =   $fetch_array['otp_issue_time'];
    $otpExpirationTheshold  =   300; //300 ==> 5 minutes 
    $currentTime            =   date('Y-m-d H:i:s');

    $timeDifference         =   strtotime($currentTime) - strtotime($otpIssueTime);

    $count_row      =   mysqli_num_rows($run_query);

    if($count_row > 0 && $otpExpirationTheshold>=$timeDifference){
        $update_query = "UPDATE `patient` SET `status`=1 WHERE `otp`='$otp'";
        mysqli_query($con, $update_query);
        $message = "<div class='alert alert-success'>OTP Verified Successfully</div>";
        $_SESSION['id'] =   $fetch_array['patient_id'];
        header("location:appointment.php");
    } else if ($otpExpirationTheshold>=$timeDifference) {
        $message = "<div class='alert alert-danger'>Time over</div>";
    }
    else {
        $message = "<div class='alert alert-danger'>Invalid OTP</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <form action="" method="POST">
        <div class="card shadow p-4" style="width: 22rem;">
            <h3 class="text-center mb-4">OTP Verification</h3>
            <?php echo $message; ?>
            <div class="mb-3">
                <label for="otp" class="form-label">Enter OTP</label>
                <input type="text" id="otp" name="otp" class="form-control" placeholder="Enter the OTP" maxlength="6" required>
                <code>OTP is valid for only 5 minutues</code>
            </div>
            <div class="d-grid">
                <button type="submit" name="send" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>
