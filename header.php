<!doctype html>
<?php session_start() ?>
<?php
    $user_name=$_SESSION["fname"];
    $user_email=$_SESSION["email"];
    if($user_name==null)
    {
        header("Location:./login.php");
    }
?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dipta</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">

            
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>DIPTA</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="home.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="home.php">Home</a></li>
                                        <!-- <li><a href="services.php">Service</a></li> -->
                                        <li><a href="book_hotel.php">Book Hotel Room</a>
                                            <ul class="submenu">
                                                <li><a href="book_by_hname.php">Book By Hotel Name</a></li>
                                                <li><a href="book_by_cname.php">Book By City Name</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="book_resort.php">Book Resort</a>
                                            <ul class="submenu">
                                                <li><a href="book_by_rname.php">Book By Name </a></li>
                                                <li><a href="book_by_cnamer.php">Book By City Name </a></li>
                                            </ul>
                                        </li>
                                        <!-- <li><a href="blog.php">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="about_home.php">About</a></li>
                                        <li><a href="contact_home.php">Contact</a></li>
                                        <li><?php echo($user_name); ?>
                                            <ul class="submenu">
                                                <li><a href="bookings.php">My Bookings</a></li>
                                                <li><a href="logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style" >
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h2_hero.jpg">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Top Resorts Near You</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Online Hotel & Resort Booking</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h4_hero.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Top Hotel Near You</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Online Hotel & Resturent Booking</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->


       