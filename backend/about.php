<?php
  include("lib/connection.php");
  session_start();
    if(!$_SESSION['id']){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Medilab Bootstrap Template</title>
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
  
  <section class="about section">

<div class="container">

    <div class="row gy-4 gx-5">

    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
        <img src="dist/img/about.jpg" class="img-fluid" alt="">
        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
    </div>

  <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
    <h3>About Us</h3>
    <p>
    At SAJS Hospital, we are committed to delivering world-class healthcare with compassion, innovation, and excellence. As a leading medical institution, we provide state-of-the-art facilities, advanced treatments, and a team of highly skilled doctors, surgeons, and healthcare professionals dedicated to patient care.
    </p> 
    <ul>
      <li>
        <i class="fa-solid fa-vial-circle-check"></i>
        <div>
          <h5>Our Mission</h5>
          <p>To provide compassionate, high-quality, and accessible healthcare through innovation, excellence, and patient-centered care, ensuring the well-being of our community.</p>
        </div>
      </li>
      <li>
        <i class="fa-solid fa-pump-medical"></i>
        <div>
          <h5>Our Stroy </h5>
          <p>Founded with a vision to redefine healthcare, SAJS Hospital began as a small clinic and grew into a trusted medical institution, where every life matters, and every cure is a commitment to excellence.</p>
        </div>
      </li>
      <li>
        <i class="fa-solid fa-heart-circle-xmark"></i>
        <div>
          <h5>Our Achievement</h5>
          <p>SAJS Hospital has proudly treated over 100,000 patients with a 98% success rate in critical care, earning recognition as a center of excellence for advanced medical treatments and patient safety.</p>
        </div>
      </li>
    </ul>
  </div>

</div>

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
