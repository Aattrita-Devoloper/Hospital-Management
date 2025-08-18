<?php
  require("lib/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Hospital Management System</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="dist/img/sub.png" rel="icon">
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
  



<!-- /About Section -->
<section id="doctors" class="doctors section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Doctors</h2>
  <p>The  specilize doctor are here to provide you best services for 24 hours</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">
  <?php
          $search_data="SELECT * FROM `department` NATURAL JOIN`doctor` WHERE `department`.`department-id`=`doctor`.`department-id`";
  
          $run_search_query = mysqli_query($con,$search_data);
          
          $count_row =mysqli_num_rows($run_search_query);
          
          if($count_row==0)
          {
            echo "NO data found";
          }
          else
          {
            ?>
            <?php
            while($fetch_row=mysqli_fetch_array($run_search_query))
            {
        ?>
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="team-member d-flex align-items-start">
        <div class="pic"><img src="<?php echo $fetch_row['doctor-image'];?>" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4><?php echo $fetch_row['doctor-name'];?></h4>
          <span><?php echo $fetch_row['department-name'];?></span>
          <p><?php echo "Fees ".$fetch_row['visit']."<br>Days:  ".$fetch_row['doctor-schedule'];?></p>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""> <i class="bi bi-linkedin"></i> </a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->
    <?php
   }
     }
?>   
  </div>

</div>

</section><!-- /Doctors Section -->

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
