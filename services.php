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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

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

            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Comprehensive healthcare services, including emergency care, specialized treatments, advanced
                        diagnostics, and personalized patient care – all under one roof at SAJS Hospital.</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <a href="emergency.html" class="stretched-link">
                                    <h3>24/7 Emergency & Critical Care</h3>
                                </a>
                                <p>At SAJS Hospital, we understand that medical emergencies can happen at any time.
                                    That’s why our state-of-the-art Emergency & Critical Care Unit operates 24/7.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="fas fa-pills"></i>
                                </div>
                                <a href="opd.html" class="stretched-link">
                                    <h3>Outpatient Services (OPD)</h3>
                                </a>
                                <p>Experience world-class Outpatient Services (OPD) at SAJS, where expert doctors
                                    provide comprehensive consultations, advanced diagnostics,and personalized treatment
                                    —all without hospital admission.Your health, our priority!</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="fas fa-hospital-user"></i>
                                </div>
                                <a href="ipd.html" class="stretched-link">
                                    <h3>Inpatient Services (IPD)</h3>
                                </a>
                                <p>Our Inpatient Department (IPD) offers world-class medical care with advanced
                                    facilities, personalized treatment, and 24/7 nursing support</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="fas fa-dna"></i>
                                </div>
                                <a href="surgical.html" class="stretched-link"></a>
                                <h3>Surgical Services</h3>

                                <p>Experience world-class surgical care with cutting-edge technology, expert surgeons,
                                    and compassionate post-operative support—ensuring a smooth and successful recovery
                                    for every patient.</p>

                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="fas fa-wheelchair"></i>
                                </div>
                                <a href="d&i.html" class="stretched-link">
                                    <h3>Diagnostic & Imaging Services</h3>
                                </a>
                                <p>Experience cutting-edge Diagnostic & Imaging Services with ultra-modern technology
                                    for precise and swift diagnoses, ensuring the best care for your health.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="fas fa-notes-medical"></i>
                                </div>
                                <a href="m&c.html" class="stretched-link">
                                    <h3>Maternity & Childcare Services</h3>
                                </a>
                                <p>Experience exceptional Maternity & Childcare Services, where expert care meets
                                    comfort, ensuring a safe and joyful journey from pregnancy to parenthood. Your
                                    little one's health starts with us!</p>
                            </div>
                        </div><!-- End Service Item -->


                    </div>

                </div>




            </section>
            <!-- /About Section -->

    </main>

    <!--footer-->

    <?php require 'includes/footer.php';?>

    <!--End footer-->
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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