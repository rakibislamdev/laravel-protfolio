<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="keendevs">
    <!-- ======== Page title ============ -->
    <title>RAKIB - as a modern protfolio</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- metisMenu css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/metismenu.css') }}">
    <!-- progresscircle css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/progresscircle.css') }}">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    {{-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="P" class="letters-loading">
                    P
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="U" class="letters-loading">
                    U
                </span>
                <span data-text-preloader="C" class="letters-loading">
                    C
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- navbar section-->
    <header class="header-section header-style-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.html">RAKIB</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 d-none d-lg-block text-right">
                    <div class="main-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">services</a></li>
                            <li><a href="#resume">Resume</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 d-block d-lg-none">
                    <div class="menu-toggle text-right">
                        <div id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- mobile menu - responisve menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <li>
                                    <a class="has-arrow" href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#about">about</a>
                                </li>
                                <li>
                                    <a href="#services">services</a>
                                </li>
                                <li>
                                    <a href="#portfolio">portfolio</a>
                                </li>
                                <li>
                                    <a href="#blog">blog</a>
                                </li>
                                <li>
                                    <a href="#contact">contact</a>
                                </li>
                            </ul>
                        </nav>

                        <a href="#" class="theme-btn mt-4">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero-section hero-1" style="background-image: url('assets/img/hero_bg_element.png')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 text-center text-lg-left">
                    <div class="hero-content overflow-hidden">
                        <span class="hello-tooltip wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Hi!
                            There</span>
                        <h1 class="wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".9s">MD RAKIB</h1>
                        <div class="typed">
                            <h3 class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.3s">I'm a <span
                                    class="profession"></span></h3>
                        </div>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">I am a student studying
                            Diploma in Computer Engineering. I love working on various technologies in addition to my
                            studies. I love coding and programming. I am currently working on web development for the
                            last 1 years. And in addition to freelancing.</p>
                        <a href="#" class="theme-btn wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.9s">+
                            Download CV</a>

                        <div class="social-profile">
                            <a href="https://www.facebook.com/rakibislm.dev" class="wow fadeInLeft"
                                data-wow-duration="1.2s" data-wow-delay="2.2s"><i class="fal fa-plus"></i>facebook</a>
                            <a href="https://twitter.com/rakibislamdev" class="wow fadeInLeft" data-wow-duration="1.2s"
                                data-wow-delay="2.5s"><i class="fal fa-plus"></i>twitter</a>
                            <a href="https://www.linkedin.com/in/rakibislamdev/" class="wow fadeInLeft"
                                data-wow-duration="1.2s" data-wow-delay="2.7s"><i class="fal fa-plus"></i>linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-sm-12 text-center overflow-hidden">
                    <div class="hero-profile-img wow fadeInUp" data-wow-duration="2s" data-wow-delay=".9s">
                        <img src="assets/img/rakib.png" alt="Spruce" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-me section -->
    <section class="about-section section-padding theme-bg-white" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one wow fadeInDown" data-wow-duration="1.2s">
                        <span>about me</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <div class="main-profile-img">
                        <img src="assets/img/rakib-2.png" alt="profile image">
                        <span>+</span>
                        <div class="dots_animate"></div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12 wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                    <div class="about-content">
                        <h1>Hello! I,m Md Rakib Web Designer and Web Developer.</h1>
                        <h3>Have 1 Years Experienced</h3>
                        <p>I am Md Rakib. I am a student studying Diploma in Computer Engineering. I love working on
                            various technologies in addition to my studies. I love coding and programming. I am
                            currently working on web development for the last 2 years.</p>

                        <div class="row mt-4">
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Phone :</h4>
                                    <p>+880- 1794- 060623</p>
                                </div>
                                <div class="single-info">
                                    <h4>Freelance :</h4>
                                    <p>Avialable For You</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Email :</h4>
                                    <p>rakibislamdev@gmail.com</p>
                                </div>
                                <div class="single-info">
                                    <h4>Address :</h4>
                                    <p>Nawhata, Rajshahi, Bangladesh</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="theme-btn">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service section -->
    <section class="services-section section-padding theme-bg-gray" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one wow fadeInDown" data-wow-duration="1.2s">
                        <span>my services</span>
                        <h2>I’m Web Design , Developer and Check What’s Services I’ll Provide my Clients.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/icons/creativity.png" alt="">
                        </div>
                        <h3>Web Design</h3>
                        <p>Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum</p>
                    </div>
                </div> <!-- /.single-service -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="icon">
                            <img src="assets/img/icons/code.png" alt="">
                        </div>
                        <h3>Wed Development</h3>
                        <p>Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum</p>
                    </div>
                </div> <!-- /.single-service -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="icon">
                            <img src="assets/img/icons/seo.png" alt="">
                        </div>
                        <h3>Digital Marketing</h3>
                        <p>Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum</p>
                    </div>
                </div> <!-- /.single-service -->
            </div>
            <div class="contact-promo text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                Have any Work? Fell Free to - <a href="#contact">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- resume section -->
    <section class="skills-experiance-resume section-padding" id="resume">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>My resume</span>
                        <h2>High Skilled Provide High Quality </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="resume-timeline-wraper mt-5">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-edu-tab" data-toggle="pill"
                                        href="#v-pills-edu" role="tab" aria-controls="v-pills-edu"
                                        aria-selected="true">Education</a>
                                    <a class="nav-link" id="v-pills-job-tab" data-toggle="pill" href="#v-pills-job"
                                        role="tab" aria-controls="v-pills-job" aria-selected="false">Experience</a>
                                </div>
                            </div>

                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-edu" role="tabpanel"
                                        aria-labelledby="v-pills-edu-tab">
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2014-2015</span>
                                            </div>
                                            <h3>Junior School Certificate</h3>
                                            <p>I have completed my Junior School Certificate examination from Bagdhani
                                                High School. I got a GPA of 4.89 out of 5.</p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2015-2017</span>
                                            </div>
                                            <h3>Secondary School Certificate</h3>
                                            <p>I have completed my Secondary School Certificate examination from
                                                Bagdhani High School. I got a GPA of 4.45 out of 5.</p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2017-2022</span>
                                            </div>
                                            <h3>Diploma in Computer Engineering</h3>
                                            <p>I have completed my Diploma in Computer Engineering course from Rajshahi
                                                Polytechnic Institute. I got a CGPA of 3.45 out of 4.</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-job" role="tabpanel"
                                        aria-labelledby="v-pills-job-tab">
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2022-present</span>
                                            </div>
                                            <h3>Web Developer Internship</h3>
                                            <p>I have completed in Web Developer Internship at BdTask Limited.
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="programming-skill mt-5">
                        <h3>Coding Skills</h3>

                        <div class="single-progress-bar">
                            <p>HTML & CSS</p>
                            <div class="progress-bar barfiller" id='bar1'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                                    <span class="tip">90%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s"
                                    data-percentage="90"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>JavaScript & Jquery</p>
                            <div class="barfiller progress-bar" id='bar2'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                                    <span class="tip">70%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s"
                                    data-percentage="70"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>Bootstrap</p>
                            <div class="barfiller progress-bar" id='bar3'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s">
                                    <span class="tip">90%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s"
                                    data-percentage="90"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>WordPress</p>
                            <div class="barfiller progress-bar" id='bar4'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s">
                                    <span class="tip">90%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s"
                                    data-percentage="90"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>PHP</p>
                            <div class="barfiller progress-bar" id='bar5'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s">
                                    <span class="tip">90%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s"
                                    data-percentage="90"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>Laravel</p>
                            <div class="barfiller progress-bar" id='bar6'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
                                    <span class="tip">60%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s"
                                    data-percentage="60"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- profolio section -->
    <section class="portfolio-showcase section-padding pt-0" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>My portfolio</span>
                        <h2>I’m Graphic & Web Design , Developer and Check my Recent Work I’ll Provide my Clients.</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="portfolio-filter mt-4 mt-sm-5">
                        <button data-filter="*" class="active">All</button>
                        <button data-filter=".wordpress">WordPress</button>
                        <button data-filter=".website">Web Design</button>
                        <button data-filter=".development">Web Development</button>
                    </div>
                </div>
            </div>
            <div class="row grid p-0">
                <div class="col-lg-4 col-md-6 col-12 grid-item development website">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/1.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item wordpress website">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/2.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item wordpress">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/3.png" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/3.png" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial section -->
    <section id="testimonial" class="testimonial-section section-padding theme-bg-gray"
        style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row py-4">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one wow fadeInDown" data-wow-duration="1.2s">
                        <span>SOME WORDS</span>
                        <h2>Testimonial</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel-active text-center owl-carousel owl-theme">
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client.png');"></div>
                            <div class="client-info">
                                <h3>Rachel Dowson</h3>
                                <span>Creative Arts</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client.png');"></div>
                            <div class="client-info">
                                <h3>Salman Ahmed</h3>
                                <span>React Developer</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client.png');"></div>
                            <div class="client-info">
                                <h3>Isabella Dowson</h3>
                                <span>CEO of WPLand</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section id="contact" class="contact-section section-padding theme-bg-gray"
        style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>Contact us</span>
                        <h2>Feel Free Message OR Call Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="contact-form-wraper">
                        <form action="mail.php" id="contact-form" method="POST" class="row">
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="text" name="name" id="name" placeholder="@ type your name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="email" name="email" id="email" placeholder="Type Email Here">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="single-input">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="theme-btn">+ Mesage Me</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- col-12 col-lg-8 -->
                <div class="col-lg-4 col-12 offset-lg-1">
                    <div class="contact-info">
                        <div class="single-info">
                            <h4>eMail :</h4>
                            <span>rakibislamdev@gmail.com</span>
                        </div>
                        <div class="single-info">
                            <h4>Phone :</h4>
                            <span>+880- 1794- 060623</span>
                        </div>
                        <div class="single-info">
                            <h4>Address :</h4>
                            <span>Nawhata, Rajshahi, Bangladesh</span>
                        </div>
                    </div>
                </div><!-- col-lg-4 col-12 -->
            </div>
        </div>
    </section>

    <!-- footer section -->

    <footer class="footer-one text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    &copy; 2020 Copyright Reserved - <a href="https://www.facebook.com/rakibislm.dev/">Rakib</a>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="{{ asset('assets/js/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imageload.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progresscircle.js') }}"></script>
    <script src="{{ asset('assets/js/barfiller.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <script>
        let typed = new Typed('.profession', {
        strings: ["Freelancer", "Web Developer", "Web Designer"],
        typeSpeed: 80,
        loop: true,
        startDelay: 200,
        backSpeed: 50,
    });
    </script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
</body>

</html>
