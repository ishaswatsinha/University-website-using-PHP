
<?php
session_start();

if(!isset($_SESSION['iamin']) || $_SESSION['iamin']!=true){
    header("location: ../../login/signup.php");
    exit;
}

?>


<!doctype html>
<html lang="en" >
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>RKU | Faculty  </title>
      
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
        <!-- ------------------------------------------------------------------------------- -->

        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/rku-fav.png" />
        
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="../assets/css/core/libs.min.css">
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="../assets/css/aprycot.min.css?v=1.0.0"> 
        
</head>
  <body class="  "  style="background:url(../assets/images/dashboard.png);    background-attachment: fixed;
    background-size: cover;">
    <!-- loader Start -->
    <div id="loading">
    <div class="position-relative">
      <div class="user-img1">
          <svg width="1857"  viewBox="0 0 1857 327" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4.05078 189.348C86.8841 109.514 348.951 -25.2523 734.551 74.3477C1120.15 173.948 1641.22 91.181 1853.55 37.3477" stroke="#EA6A12" stroke-opacity="0.3"/>
          <path d="M0.99839 152.331C90.9502 80.6133 364.495 -28.9952 739.062 106.31C1113.63 241.616 1640.16 208.056 1856.6 174.363" stroke="#EA6A12" stroke-opacity="0.3"/>
          </svg>
      </div>
    </div>
    <!-- SIDE NAVBAR  -->
   <?php include "assets/aside.php" ?>   
    <main class="main-content">

         <!--Nav Start-->
      <?php include "assets/nav.php" ?>

      <!-- ------------------------------------------------------------------------------- -->

    

      <!-- main page start -->
      
      <?php include "attendance.php" ?>
      
      
      <!-- Footer Section Start -->
     
      <?php include "assets/footer.php" ?>
      <!-- Footer Section End --> 
       </main>
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Required Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="../assets/js/charts/dashboard.js"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="../assets/js/fslightbox.js"></script>
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
    
    <!-- moment JavaScript -->
    <script src="../assets/vendor/moment.min.js"></script>
  </body>
</html>