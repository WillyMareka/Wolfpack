<?php $assets_url = $this->config->item('assets_url'); ?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie" lang="en">
<![endif]-->
<html lang="en">


<!-- Mirrored from www.styllustheme.com/ThemeUnit/thirdeye-preview/thirdeye/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2017 11:04:22 GMT -->
<head>
    <!-- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>WolfPack Studios</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Mega  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    
    <!-- CSS -->
    <link rel="icon" href="<?= @$assets_url; ?>img/smallLogo.PNG">
    <link rel="stylesheet" href="<?= @$assets_url; ?>plugin/bootstrap-4.2.1/css/bootstrap.min.css">

    <link href="<?= @$base_url; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?= @$assets_url; ?>css/creative.min.css" rel="stylesheet">
  <link href="<?= @$assets_url; ?>css/main.css" rel="stylesheet">
    
    <?= @$page_css; ?>
</head>

<body id="page-top">
    <!-- Preloader Starts -->
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">WolfPack Studios</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <!-- Preloader Ends -->
    <!-- Nav Section -->
    <header class="masthead">
        <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
            <div>
                <video autoplay muted loop id="myVideo">
                <!-- <video width="320" height="240" controls> -->
                  <source src="<?= @$assets_url; ?>videos/avengers.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>
            <div class="videocontent">
                <div class="col-lg-10 align-self-end">
                  <h1 class="text-uppercase text-white font-weight-bold">Thoughts into a Reality</h1>
                  <hr class="divider my-4">
                </div>
                <div class="col-lg-8 align-self-baseline">
                  <p class="text-white-75 font-weight-light mb-5">Services the make your imaginations into a reality. You are only limited by your mind</p>
                  <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Contact Us</a>
                </div>
            </div>
            
          </div>
        </div>
    </header>
    <!-- End Nav Section -->
    <!-- Hero Section -->

    <?= $this->load->view($partial, $partialData); ?>

    <!-- Footer Section -->
    
    <!-- Ends Footer Section -->
    <!-- Copyright Section -->
    <footer class="bg-light py-5">
        <div class="container">
          <div class="small text-center text-muted">Copyright &copy; 2019 - Wolfpack Studios</div>
        </div>
      </footer>
    <!-- Ends Copyright Section -->
    <!-- Scripts -->
        <script src="<?= @$base_url; ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= @$base_url; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Plugin JavaScript -->
        <script src="<?= @$base_url; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="<?= @$base_url; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

      <!-- Custom scripts for this template -->
        <script src="<?= @$assets_url; ?>js/creative.min.js"></script>
    <?= @$page_js; ?>
</body>


</html>
