<?php 
    
session_start();
    $_SESSION['action']='';
    $string='<li class="nav-item">
    <a class="nav-link js-scroll" id="login" href="login.php">Login</a>
  </li>';
    // $string='<li class="nav-item><a class="nav-link js-scroll " id="login" href="login.php">Login</a></li>';
    $string1='<a href="newAccount.php" class="btn btn-outline-warning btn-lg " role="button" aria-pressed="true">Create New Account</a>';
 $string2='<a href="#" data-toggle="modal" data-target="#exampleModal" class="block main-div-1">';
 $string3='<a href="#" class="block main-div-2" data-toggle="modal" data-target="#exampleModal">';
 $string4='<a href="#" class="block main-div-3" data-toggle="modal" data-target="#exampleModal">';
 $string5='<a href="#" class="block main-div-5" data-toggle="modal" data-target="#exampleModal">';
 $string6='<a href="#" class="block main-div-4" data-toggle="modal" data-target="#exampleModal">';
 

    $for_animation='<script src="apps.js"></script>';
    if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
    {
      $string='<li class="nav-item">
      <a class="nav-link js-scroll" id="logout" href="login.php?logout=1">Logout</a>
    </li>';
        // $string='<li><a id="logout" href="login.php?logout=1">Logout</a></li>';
        $string1='<a href="feedback.php" class="btn btn-outline-warning btn-lg " role="button" aria-pressed="true">Raise a Complaint</a>';
        $for_animation='';
        
        $string2='<a href="profile.php" class="block main-div-1">';
        $string3='<a href="balance.php" class="block main-div-2">';
        $string4='<a href="#" class="block main-div-3">';
        $string5='<a href="transaction.php" class="block main-div-5">';
        $string6='<a href="tootherbank.php" class="block main-div-4">';
        $str='<li class="nav-item">
        
      </li>';
    }
    
    







 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fit Trac</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->
    <link rel="icon" type="image/png" href="heart.svg">

    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Vendor CSS Files -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="home_style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

</head>

<body id="page-top">

    <!-- ======= Header/ Navbar ======= -->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php" id="nm">
                <img src="heart.svg" width="38" height="38" class="d-inline-block align-top" alt="" loading="lazy">
                Fit Trac
            </a>
            <!-- <a class="navbar-brand js-scroll" href="#page-top">Fit Trac</a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="aboutus.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="profile.php">Profile</a>
                    </li>

                    <!-- <li class="nav-item">
            <a class="nav-link js-scroll" href="feedback.php">feedback</a>
          </li> -->
                    <!-- <li class="nav-item">
            <a class="nav-link js-scroll" href="#logout">Logout</a>
          </li> -->
                    <?php
          if(!empty($str))
          echo $str;
          ?>
                    <?php
          echo $string;
          ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ======= Intro Section ======= -->
    <div id="home" class="intro route bg-image" style="background-image: url(foodhomepg1.jpg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="intro-title mb-4">Welcome to Fit Trac</h1>
                    <p class="intro-subtitle"><span class="text-slider-items">We are just the Health Tracker you need,
                            Together we'll make a difference!</span><strong class="text-slider"></strong></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="service" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Services
                            </h3>
                            <!-- <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p> -->
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <a href="diet_calculator.php">
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="fas fa-utensils"></i></span>
                                </div>
                            </a>
                            <div class="service-content">
                                <h2 class="s-title">Diet Calculator</h2>
                                <!-- <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <a href="exercise_calculator.php">
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="fas fa-dumbbell"></i></span>
                                </div>
                            </a>
                            <div class="service-content">
                                <h2 class="s-title">Exercise Calculator</h2>
                                <!-- <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <a href="balance.php">
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                                </div>
                            </a>
                            <div class="service-content">
                                <h2 class="s-title">Personalized Diet</h2>
                                <!-- <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <a href="optimalintake.html">
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                                </div>
                            </a>
                            <div class="service-content">
                                <h2 class="s-title">Optimal Intake</h2>
                                <!-- <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <a href="bmi.php">
                                <div class="service-ico">
                                    <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                                </div>
                            </a>
                            <div class="service-content">
                                <h2 class="s-title">BMI Calculator</h2>
                                <!-- <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div> -->
                    <!-- <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div> -->
                    <!-- <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div> -->
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Counter Section ======= -->
        <!-- <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">450</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">550</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">36</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>End Counter Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Lorem impsum dolor</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-2.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-2.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Loreda Cuno Nere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-3.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mavrito Lana Dere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-4.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-4.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bindo Laro Cado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-5.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-5.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Lena Mado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-6.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="assets/img/work-6.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Xavi Alonso</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Marta Socrate</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
        <!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <!-- <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
        <!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <!-- <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                        expedita aperiam aliquid at.
                        Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                        mollitia inventore?
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                        <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>
                        <li><span class="ion-email"></span> contact@example.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong></strong>. All Rights Reserved</p>
            <div class="credits">
              
              Designed by BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> -->

    <!-- End  Footer -->

    <!-- start -->
    <footer class="page-footer font-small ">


        <!-- Footer Links -->
        <div style="background-color:#1C2331;">


            <div style="background-color:#3F729B;">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 text-white">
                            <h6 class="mb-0">Get connected with us on social networks!</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right  ">

                            <!-- Facebook -->
                            <a class="fb-ic text-white" href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic text-white" href="https://twitter.com/">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <!-- <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>-->
                            <!--Linkedin -->
                            <a class="li-ic text-white" href="https://in.linkedin.com/">
                                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic text-white" href="https://www.instagram.com/">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>

                        </div>

                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->
                    <!-- rahul  -->

                    <hr>
                </div>
            </div>

            <div class="container text-center text-md-left mt-5 ">

                <!-- Grid row -->
                <div class="row mt-3 text-white">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold text-white">Fit Trac</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto">
                        <p>Please do not believe any entity using Fit Trac logos & branding to request the public for
                            money
                            in exchange for opening a Customer Service Point.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <!--<h6 class="text-uppercase font-weight-bold">OUR OFFERINGS</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="#!">Savings Account</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="#!">Current Account</a>
                </p>-->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">BrandFlow</a>
                </p> -->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
                </p> -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <!--<h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="#!">Your Account</a>
                </p>-->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">Become an Affiliate</a>
                </p> -->
                        <!-- <p>
                    <a class="dark-grey-text" href="#!">Shipping Rates</a>
                </p> -->
                        <!--<p>
                    <a class="dark-grey-text" href="#!">Help</a>
                </p>-->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold" style="color :white; ">Contact</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-home mr-3"></i>Kumarswamy layout, Bengaluru ,India
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@example.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                        </p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89
                        </p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
        </div>

        <!-- Footer Links -->

        <!-- Copyright -->
        <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

        <div class="footer-copyright text-center text-white py-3 " style="background-color:#1C2331;">?? 2021 Copyright:
            Fit Trac
            <!--<a  style="color:white;" href="https://mdbootstrap.com/"> ApnaBank.com</a>-->
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- footer ends -->
    <!-- end -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="main.js"></script>

</body>

</html>