<?php $assets_url = $this->config->item('assets_url'); ?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie" lang="en">
<![endif]-->
<html lang="zxx">


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
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/font-awesome.min.css">
    <!--Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/owl.carousel.min.css">
    <!-- Animated CSS -->
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/animate.min.css">
    <!-- Preloader Css -->
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/csspin.css">
    <!-- Theme CSS-->
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/default.css">
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/style.css">
    <link rel="stylesheet" href="<?= @$assets_url; ?>home/css/responsive.css">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/png" href="<?= @$assets_url; ?>home/img/favicon.png"> -->
    <?= @$page_css; ?>
</head>

<body data-spy="scroll" data-target="#scroll-menu" data-offset="65">
    <!-- Preloader Starts -->
    <div class="preloader-wrap">
        <div class="preloader-inside">
            <div class="cp-spinner cp-meter"></div>>
        </div>
    </div>
    <!-- Preloader Ends -->
    <!-- Nav Section -->
    <header>






        
    </header>
    <!-- End Nav Section -->
    <!-- Hero Section -->

    <?= $this->load->view($partial, $partialData); ?>

    <!-- Footer Section -->
    
    <!-- Ends Footer Section -->
    <!-- Copyright Section -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="footer-copyright">WolfPack Studios Copyright © 2019. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Ends Copyright Section -->
    <!-- Scripts -->
    <script src="<?= @$assets_url; ?>home/js/jquery-2.1.1.min.js"></script>
    <script src="<?= @$assets_url; ?>home/js/bootstrap.min.js"></script>
    <script src="<?= @$assets_url; ?>home/js/scrollreveal.min.js"></script>
    <script src="<?= @$assets_url; ?>home/js/jquery.waypoints.min.js"></script>
    <script src="<?= @$assets_url; ?>home/js/jquery.counterup.min.js"></script>
    <script src="<?= @$assets_url; ?>home/js/owl.carousel.min.js"></script>
    <script src="<?= @$assets_url; ?>home/js/theme.js"></script>
    <?= @$page_js; ?>
</body>


</html>
