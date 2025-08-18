<?php
require 'lib/connection.php';

$select_department = 'SELECT `department-id` FROM `department` ';
$run_query = mysqli_query($con, $select_department);
$count_row_department = mysqli_num_rows($run_query);

$select_doctor = 'SELECT `doctor-id` FROM `doctor`';
$run_query_2 = mysqli_query($con, $select_doctor);
$count_row_doctor = mysqli_num_rows($run_query_2);

$select_patient = 'SELECT `patient_id` FROM `patient`';
$run_query_3 = mysqli_query($con, $select_patient);
$count_row_patient = mysqli_num_rows($run_query_3);

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
    <link href="dist/img/icon.jpg" rel="apple-touch-icon">

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

    <?php require 'includes/header.php'; ?>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="dist/img/hero-bg1.webp" alt="" data-aos="fade-in">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h3 style="color: #ffffff; font-weight:bold;background-color: rgba(0, 0, 255, 0.5);width:80%;">
                        Welcome to SAJS Multispecialty Hospital</h3>
                    <p> Your Health, Our Priority</p>
                </div><!-- End Welcome -->

                <div class="row">
                    <div class="content row gy-4">

                        <div class="col-md-3">
                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="100">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Why SAJS Multispecialty Hospital</h4>

                                <p>SAJS Hospital is known for its state-of-the-art medical facilities, highly experienced doctors, and patient-centric care. With advanced technology and a commitment to excellence, it ensures top-quality treatment across various specialties. </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="100">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Message From Our Chairman</h4>

                                <p>At SAJS Hospital, our mission is to provide world-class healthcare with compassion, innovation, and excellence. We are dedicated to ensuring that every patient receives the highest standard of medical care in a safe and comfortable environment."</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="100">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Our Vision & Mission</h4>

                                <p>To revolutionize healthcare management by providing an efficient, patient-centric, and technology-driven hospital management system.
                                    Mission: To enhance hospital operations, improve patient care, and streamline workflows through innovative, secure
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-box" data-aos="zoom-out" data-aos-delay="100">
                                <i class="bi bi-clipboard-data"></i>
                                <h4>Modern Facilities & Technology</h4>

                                <p>Our hospital management system integrates advanced digital tools to optimize patient care, streamline operations, and enhance efficiency.
                                    Technology: Leveraging AI, cloud computing, and data analytics, we ensure secure, real-time access to medical records.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End of main div-->



        </section><!-- /Hero Section -->




        <section id="stats" class="stats section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Statistics</h2>
                
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-solid fa-user-doctor"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count_row_doctor; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Doctors</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fa-regular fa-hospital"></i>
                        <div class="stats-item">

                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count_row_department; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Departments</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-flask"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Research Labs</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="fas fa-award"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo $count_row_patient; ?>"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Patients</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->










        <!-- Testimonials Section -->


    </main>

    <!--footer-->

    <?php require 'includes/footer.php'; ?>
    <!--footer-->
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