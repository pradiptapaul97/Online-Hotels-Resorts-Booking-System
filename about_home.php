<!doctype html>
<?php session_start() ?>
<?php
    $user_name=$_SESSION["fname"];
    $user_email=$_SESSION["email"];
    if($user_name==null)
    {
        header("Location:./about.php");
    }
?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
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
                                        <li><a href="book_hotel.php">Book Hotel</a></li>
                                        <li><a href="book_resort.php">Book Resort</a></li>
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
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <!-- <a href="#" class="btn btn1 d-none d-lg-block ">Book Online</a> -->
                            </div>
                        </div>
                        <!-- Mobile Menu -->
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
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/aboutpage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <!-- <span>About </span> -->
                                <h2>About Us</h2>
                                <span>Online Hotel Booking on Dipta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="assets/img/customer/customar1.png" class="customar-img1" alt="">
                            <img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
                            <div class="service-experience heartbeat">
                                <h3> Book Cheap Luxury <br> Hotels In India</h3>
                            </div>
                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <span><h2>About our company</h2></span>
                            <div class="caption-details">
                                <p class="pera-dtails">Dipta's massive repository of over 83,000 hotels panning across 1100 cities opens up your options of booking hotels in India. Do an area-wise search or simply look for the best hotels in a destination, the options are plentiful making hotel booking a breeze. There are multiple ways to make an online hotel booking; you can either search against the hotel name or you can enter the location of your stay.</p>
                                <!-- <a href="#" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--font-back-tittle  -->
                    <div class="font-back-tittle mb-45">
                        <div class="archivment-front">
                            <h3>Online Hotel Booking Facilities</h3>
                        </div>
                        <h3 class="archivment-back">Facilities</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-caption">
                            <h3>Book Luxury Hotels in India</h3>
                            <div class="per-night">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-caption">
                            <h3>Choose from a Hotel or Resort</h3>
                            <div class="per-night">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-caption">
                            <h3>Compare Hotels, Opt for Deals and Discounts</h3>
                            <div class="per-night">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-caption">
                            <h3>Choose Hotels by Category</h3>
                            <div class="per-night">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-caption">
                            <h3>Find Cheap Hotels Near You</h3>
                            <div class="per-night">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-caption">
                            <h3>100% Money Back Guarantee</h3>
                            <div class="per-night">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Make customer End-->

        <!-- Dining Start -->
        <!-- <div class="dining-area d-padding">
            <-- Single Left img --
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Our resturent</span>
                                <h3>Dining & Drinks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <-- single Right img --
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Our Pool</span>
                                <h3>Swimming Pool</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More  <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> -->
        <!-- Dining End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>My booking from dipta at Mumbai was very comfortable and enjoyable. Room was good with good bed linens, and other amenities.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier, <span>Regular Client</span> </span>
                                    </div>
                                </div>

                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/testimonial1.png" alt="">
                                    </div>
                                    <h3 class="archivment-back">Testimonial</h3>
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>The hotel is very good and it is right in the middle of the city....and the staff's are very good and very helpful.
                                    </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star checked"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>devid jons, <span>Regular Client</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

       <?php include("footer.php"); ?>