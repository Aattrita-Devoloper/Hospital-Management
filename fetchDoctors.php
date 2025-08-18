<?php
    require('lib/connection.php');


    if($_POST['department_id']) {
        $departmentID   =    $_POST['department_id'];

        // search the doctors
        $searchDoctors  =   "SELECT * FROM doctor WHERE `department-id` = ".$departmentID;
        $runSearchDoctors   =   mysqli_query($con, $searchDoctors);
        $doctorsDetails     =   [];

        
        while($details  =   mysqli_fetch_array($runSearchDoctors)) {
            $doctorsDetails[]   =   [
                'id'   =>   $details['doctor-id'],
                'name'  =>  $details['doctor-name']
            ];
        }

        echo json_encode($doctorsDetails);
    }

?>