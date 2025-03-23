<?php
  require("lib/connection.php");
  session_start();
    if(!$_SESSION['id']){
        header('location:index.php');
    }

  $select_data_patient = "SELECT * FROM `patient` NATURAL JOIN`appointment` WHERE `patient`.`patient_id`=`appointment`.`appointment-patient-id`";  
  $run_query = mysqli_query($con,$select_data_patient);        
  $fetch_array=mysqli_fetch_array($run_query);                        
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Appointment</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="dist/img/favicon.png" rel="icon">
  <link href="dist/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="dist/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="dist/vendor/aos/aos.css" rel="stylesheet">
  <link href="dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="dist/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="dist/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="dist/css/main.css" rel="stylesheet">

  
  
</head>

<body class="index-page">

  <?php require 'includes/header.php';?>

  <main class="main">
  
  <section id="appointment" class="appointment section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Appointment</h2>
        <p>Take an appointment for a better health </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="appointment-add.php" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name"  value =<?php echo $fetch_array['first_name'];?><?php echo " ".$fetch_array['last_name'];?>>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" value =<?php echo $fetch_array['email'];?>>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" value =<?php echo $fetch_array['phone_number'];?>>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select" required="">
              <option value="">Select Department</option>
                <?php
                  $search_department = "SELECT * FROM `department`";
                  $run_department_query =mysqli_query($con,$search_department);
                  while($fetch_department_array=mysqli_fetch_array($run_department_query))
                  {
                  ?>
                    <option value="<?php $fetch_department_array['department-id']; ?>"><?php echo  $fetch_department_array['department-name']; ?></option>
                  <?php
                  }
                ?>
                
                
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select" required="">
                <option value="">Select Doctor</option>
                <?php
                   $search_data="SELECT * FROM `department` NATURAL JOIN`doctor` WHERE `department`.`department-id`=`doctor`.`department-id`";
                   $run_doctor_query = mysqli_query($con,$search_data);
                   while ($fetch_doctor_array=mysqli_fetch_array($run_doctor_query))
                   {
                    ?>
                    <option value="<?php $fetch_doctor_array['doctor-id'];?>"><?php echo $fetch_doctor_array['doctor-name'];?></option>
                    <?php
                   }
                ?>
                
                
              </select>
            </div>
          </div>

         
          <div class="mt-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
          </div>
        </form>

      </div>

    </section>
<!-- /About Section -->

  </main>
  
  <!--footer-->

    <?php require 'includes/footer.php';?>

  <!--End footer-->
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/vendor/php-email-form/validate.js"></script>
  <script src="dist/vendor/aos/aos.js"></script>
  <script src="dist/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="dist/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="dist/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="dist/js/main.js"></script>

</body>

</html>
