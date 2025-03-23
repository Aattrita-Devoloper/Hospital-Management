<?php
  require("lib/connection.php");
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
  <title>SAJS</title>
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

  <section id="departments" class="departments section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Departments</h2>
  <p>Here is the specilization departments of our hospital</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
  
    
   

  <div class="row">
    <div class="col-lg-3">
      <ul class="nav nav-tabs flex-column">
      <?php
       $search_data="SELECT * FROM `department`";
        $run_query=mysqli_query($con,$search_data);
   
    $row_count=mysqli_num_rows($run_query);
    if($row_count==0)
    {
      echo "NO data found";
    }
    else
    {
     $count=1;
      while( $fetch_row=mysqli_fetch_array($run_query))
      {
        $department = $fetch_row['department-id'];
      ?>
    
        <li class="nav-item">
            <?php
            if($count==1)
            {
            ?>
                <a class="nav-link active show" data-bs-toggle="tab" href="#<?php echo $department;?>"><?php echo $fetch_row['department-name'];?></a>
              <?php
            }
            else
            {
              ?>
                <a class="nav-link" data-bs-toggle="tab" href="#<?php echo $department;?>"><?php echo $fetch_row['department-name'];?></a>
              <?php
            }
              ?>
        </li>
        <?php
        $count++;
          }
          
          }
        ?>
      </ul>
      
    </div>
    <div class="col-lg-9 mt-4 mt-lg-0">
      <div class="tab-content">
        <?php
        $check=1;
        $search_data1="SELECT * FROM `department`";
        $run_query1=mysqli_query($con,$search_data1);
          while( $fetch_row1=mysqli_fetch_array($run_query1))
          {
            $department1 = $fetch_row1['department-id'];
            if($check==1)
            {
            ?>
           
            <div class="tab-pane active show" id="<?php echo $department1 ?>">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3><?php echo $fetch_row1['department-name']; ?></h3>
                <p class="fst-italic"><?php echo $fetch_row1['department-description']; ?></p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo $fetch_row1['department-image']; ?>" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <?php
            }
            else{
              ?>
               <div class="tab-pane " id="<?php echo $department1 ?>">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3><?php echo $fetch_row1['department-name']; ?></h3>
                <p class="fst-italic"><?php echo $fetch_row1['department-description']; ?></p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo $fetch_row1['department-image']; ?>" alt="" class="img-fluid">
              </div>
            </div>
          </div>
              <?php
            }
            $check++;
          }
        ?>
       
      </div>
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
