<?php
  include("lib/connection.php");
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
  
  <section class="about section">

  <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>For appointments and inquiries, contact us at SAJS </p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58940.984729411524!2d88.45160112512878!3d22.586150697146397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275350398a5b9%3A0x75e165b244323425!2sNewtown%2C%20Kolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1742782781454!5m2!1sen!2sin" width="100%" height="270px" style="border:0;"  frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p>34/6 Newtown,Kolkata</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>033 6636 0000</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>sajsmultispecilityhospita@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

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
