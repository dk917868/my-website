<?php
include "./connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Craakit Competitive-Mock-Exams</title>
  <meta name="description" content="UPSC mock exams are practice tests designed to simulate the actual UPSC exam. They are meant to help candidates understand the exam pattern, the types of questions asked, and the level of difficulty., A subject-wise UPSC mock exam would have 100 questions, with each subject having a set number of questions. Candidates would be required to answer the questions within a stipulated time frame and get a score based on their performance. The mock exam would help candidates identify their strengths and weaknesses and work on their preparation accordingly., Mock exams are practice tests designed to simulate the actual UPSC civil services exam and help candidates prepare for it. Typically, mock exams consist of a series of multiple-choice questions that cover the topics and subjects that are included in the actual UPSC civil services exam.">
  <meta name="keywords" content="UPSC civil services Mock Test, UPSC civil services mock exam, NEET mock exam, SAT Mock exam, JEE Mock test, JEE mains mock test, UPSC civil services subject wise mock test, UPSC civil services online preparation test">

  <!-- Favicons -->
  <link href="assets/img/exam_icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    :root {
      --primary: #2124B1;
      --secondary: #4777F5;
      --light: #F7FAFF;
      --dark: #1D1D27;
    }

    #hero {
      width: 100%;
      height: calc(50vh);
      background: #fff;
      background-size: auto;
      position: relative;
    }

    #hero:before {
      content: "";
      background: rgb(255 255 255 / 50%);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    section {
      padding: 20px 0;
      overflow: hidden;
    }

    .cta {
      background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url("./assets/img/upsc_img2.jpg") fixed center center;
      background-size: cover;
      padding: 120px 0;
    }

    /*slider css */
    .recent-photos {
      min-width: fit-content;
      overflow: hidden;
    }

    .recent-photos .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .recent-photos .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: #fff;
      opacity: 1;
      border: 1px solid #006fbe;
    }

    .recent-photos .swiper-pagination .swiper-pagination-bullet-active {
      background-color: #006fbe;
    }

    .recent-photos .owl-nav,
    .recent-photos .owl-dots {
      margin-top: 25px;
      text-align: center;
    }

    .recent-photos .owl-item {
      border-left: 2px solid #fff;
      border-right: 2px solid #fff;
    }

    .recent-photos .owl-dot {
      display: inline-block;
      margin: 0 5px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: #95d3ff !important;
    }

    .recent-photos .owl-dot.active {
      background-color: #006fbe !important;
    }

    .recent-photos .gallery-carousel .owl-stage-outer {
      overflow: visible;
    }

    .recent-photos .gallery-carousel .center {
      border: 6px solid #006fbe;
      margin: -10px;
      box-sizing: content-box;
      padding: 4px;
      background: #fff;
      z-index: 1;
    }

    /* important updates css */
    .marquee {
      width: 80%;
      background: #fff;
      text-transform: initial;
      white-space: nowrap;
      overflow: hidden;
    }

    .marquee div {
      font-size: 1.5rem;
      font-family: verdana;
      padding-left: 100%;
      display: inline-block;
      animation: animate 25s linear infinite;
    }

    @keyframes animate {
      100% {
        transform: translate(-80%, 0);
      }
    }

    /* course view css */

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    .cardcontainer {
      position: relative;
      min-width: 1200px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 30px;
    }

    .cardcontainer .card {
      position: relative;
      max-width: 300px;
      height: 215px;
      background-color: #fff;
      margin: 30px 10px;
      padding: 20px 15px;

      display: flex;
      flex-direction: column;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
      transition: 0.3s ease-in-out;
      border-radius: 15px;
    }

    .cardcontainer .card:hover {
      height: 320px;
    }


    .cardcontainer .card .image {
      position: relative;
      width: 260px;
      height: 260px;

      top: -10%;
      left: 8px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .cardcontainer .card .image img {
      max-width: 100%;
      border-radius: 10px;
    }

    .cardcontainer .card .content {
      position: relative;
      top: -60px;
      padding: 10px 15px;
      color: #111;
      text-align: center;

      visibility: hidden;
      opacity: 0;
      transition: 0.3s ease-in-out;

    }

    .cardcontainer .card:hover .content {
      margin-top: 30px;
      visibility: visible;
      opacity: 1;
      transition-delay: 0.2s;

    }

    /* category css */
    .catcard {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 360px;
      height: 400px;
      background: #000;
    }

    .catcard .image {
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .catcard .image img {
      width: 100%;
      transition: .5s;
    }

    .catcard:hover .image img {
      opacity: .5;
      transform: translateX(30%);
      /*100%*/
    }

    .catcard .details {
      position: absolute;
      top: 0;
      left: 0;
      width: 70%;
      /*100%*/
      height: 100%;
      background: #ffc107;
      transition: .5s;
      transform-origin: left;
      transform: perspective(2000px) rotateY(-90deg);
    }

    .catcard:hover .details {
      transform: perspective(2000px) rotateY(0deg);
    }

    .catcard .details .center {
      padding: 20px;
      text-align: center;
      background: #fff;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
    }

    .catcard .details .center h1 {
      margin: 0;
      padding: 0;
      color: #ff3636;
      line-height: 20px;
      font-size: 20px;
      text-transform: uppercase;
    }

    .catcard .details .center h1 span {
      font-size: 14px;
      color: #262626;
    }

    .catcard .details .center p {
      margin: 10px 0;
      padding: 0;
      color: #262626;
    }



    /*** Carousel ***/
    .carousel-caption {
      top: 0px;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgb(14 14 14 / 70%);
      z-index: 4;
      transition: 0.5s;
    }

    @media (max-width: 1200px) {
      .carousel-caption h5 {
        font-size: 24px;
        font-weight: 500 !important;
      }

      .carousel-caption h1 {
        font-size: 30px;
        font-weight: 600 !important;
      }
    }

    @media (max-width: 576px) {
      .carousel-caption h5 {
        font-size: 18px;
        font-weight: 500 !important;
      }

      .carousel-caption h1 {
        font-size: 30px;
        font-weight: 600 !important;
      }
    }

    @media (max-width: 350px) {
      .carousel-caption h5 {
        font-size: 14px;
        font-weight: 500 !important;
      }

      .carousel-caption h1 {
        font-size: 30px;
        font-weight: 600 !important;
      }
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 10%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      width: 3rem;
      height: 3rem;
    }

    /*** Service ***/
    .service-item {
      position: relative;
      height: 250px;
      padding: 30px 25px;
      background: #FFFFFF;
      box-shadow: 0 0 45px rgba(0, 0, 0, .08);
      transition: .5s;
    }

    .service-item:hover {
      background: goldenrod;
    }

    .service-item .service-icon {
      margin: 0 auto 20px auto;
      width: 90px;
      height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--light);
      background: url(./assets/img/icon-shape-primary.png) center center no-repeat;
      transition: .5s;
    }

    .service-item:hover .service-icon {
      color: var(--primary);
      background: url(./assets/img/icon-shape-white.png);
    }

    .service-item h5,
    .service-item p {
      transition: .5s;
    }

    .service-item:hover h5,
    .service-item:hover p {
      color: var(--light);
    }

    .service-item a.btn {
      position: relative;
      display: flex;
      color: var(--secondary);
      transition: .5s;
      z-index: 1;
    }

    .service-item:hover a.btn {
      color: var(--primary);
    }

    .service-item a.btn::before {
      position: absolute;
      content: "";
      width: 35px;
      height: 35px;
      top: 0;
      left: 0;
      border-radius: 35px;
      background: #DDDDDD;
      transition: .5s;
      z-index: -1;
    }

    .service-item:hover a.btn::before {
      width: 100%;
      background: var(--light);
    }
    
  </style>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@craakit.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 7894561230
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Craakit</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->

          <li class="dropdown"><a href="#"><span>Test Series</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li class="dropdown"><a href="#"><span>UPSC civil Services(IAS/IPS/IRS)</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#"><span>Prelims Mock Test</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="./subscription.php">GS-1</a></li>
                      <li><a href="./subscription.php">Aptitude(CSAT)</a></li>
                    </ul>
                </ul>
              </li>
              <li><a href="./subscription.php">NEET</a></li>
              <li><a href="./subscription.php">CAT</a></li>
              <li><a href="./subscription.php">JEE</a></li>
            </ul>
          <li><a class="nav-link scrollto" href="#announcements">Announcements</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="./subscription.php">Subscribe</a></li>
          <li><a class="nav-link scrollto" href="./dashboard/login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="./dashboard/register.php">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <div class="row bg-soft-primary rounded">
    <div class="col-lg-2 my-auto py-2 bg-danger border-end border-warning border-2" style="margin-left: 20px;">
      <h4 class="h5 text-white title-dark mb-0" style=" margin-top :auto; padding-left: 20px;">Important Updates :</h4>

    </div>

    <div class="marquee">
      <div> subscribe and practice our mock exams | &nbsp The upcoming UPSC mock will be on 28/04/2023 (kindly prepare well)</div>
    </div>
  </div>
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="https://cdn.pixabay.com/photo/2018/08/06/19/30/exam-3588192__340.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px;">
                <h5 class="text-white text-uppercase mb-3 animated">UPSC Mock</h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">UPSC Civil services prelims</h1>
                <a href="./subscription.php" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">Subscribe</a>
                <a href="#contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="https://www.drishtiias.com/images/uploads/1660291161_62f4a70ebc1ed_PPS-Desktop-Banner-(1).jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px;">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Prelims</h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Prelims practice series </h1>
                <a href="#" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">Subscribe</a>
                <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="https://www.drishtiias.com/images/uploads/1660291044_62f4a70dd7cb0_MCS-Desktop-Banner-(1).jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px;">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">UPSC</h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">UPSC Prelims 2023</h1>
                <a href="#" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">Subscribe</a>
                <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="https://www.drishtiias.com/images/uploads/1667807024_63660b80287e9_All-Magazines-banner-(For-Desktop).jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px;">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">UPSC </h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Current Affairs</h1>
                <a href="#" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">Subscribe</a>
                <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="https://www.drishtiias.com/images/uploads/1674484207_IAS-csat-2023-m.png" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px;">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">CSAT</h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Civil services Apptitude</h1>
                <a href="#" class="btn btn-danger py-md-3 px-md-5 me-3 animated slideInLeft">Subscribe</a>
                <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>



    </div>
  </section>

  <section id="announcements" class="">

    <div class="container">
      <div class="section-title">
        <h4 class="title title-dark text-danger mb-4">ANNOUNCEMENTS</h4>
      </div>
      <div class="row">

        <!-- First Column -->
        <div class="col-lg-4">

          <!-- Custom Text Color Utilities -->


          <!-- Custom Font Size Utilities -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-danger">
              <h6 class="m-0 font-weight-bold text-white">Important Dates</h6>
            </div>
            <div class="card-body" style="overflow-x: scroll; overflow-x:hidden; max-height: 550px;">
              <ul>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="https://www.drishtiias.com/quiz/quizlist/daily-editorial-based-quiz">Editorial Quiz (15th March, 2023)</a></p>
                </li>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="">Rising Concerns over Freshwater Shortages - Articlas</a></p>
                </li>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="">SVB Financial Group Collapse - Articlas</a></p>
                </li>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="">India - Australia Critical Minerals Investment Partnership - Articlas</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Editorial - Shaping the Data Governance Regime </a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Infographics-UN Specialised Agencies - UNWTO, IFAD and UPU (Part–2)</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Rapid Fire Current Affairs - Articles</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">World Consumer Rights Day 2023 - Articles</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Menace of Missing Antiquities in India - Article
                    </a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Synchronised Survey of Vultures - Article</a></p>
                </li>
              </ul>
              <!-- <p class="text-xs">.text-xs</p>
                                    <p class="text-lg mb-0">.text-lg</p> -->
            </div>
          </div>

        </div>

        <!-- Second Column -->
        <div class="col-lg-4">

          <!-- Background Gradient Utilities -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-dark">
              <h6 class="m-0 font-weight-bold text-warning">Current Affairs
              </h6>
            </div>
            <div class="card-body" style="overflow-x: scroll; overflow-x:hidden; max-height: 550px;">
              <div class="panel--body editorial-scroll" tabindex="5000" style="overflow: hidden; outline: none;">
                <div class="editorial-slider">
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/indian-polity">Indian Polity</a></span>
                      <p><a href="">BCI Allows Foreign Lawyers to Practice in India</a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="">Important Facts For Prelims</a></span>
                      <p><a href="">National Policy on Older Persons in India</a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>
                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="">Rapid Fire</a></span>
                      <p><a href="">Rapid Fire Current Affairs</a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="">International Relations</a></span>
                      <p><a href="">India and the AUKUS Grouping </a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/indian-polity">Indian Polity</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18312">Governor’s Power to Call for Floor Test </a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/social-justice">Social Justice</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18311">Rising Concerns over Freshwater Shortages </a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18310">SVB Financial Group Collapse </a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/international-relations">International Relations</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18309">India - Australia Critical Minerals Investment Partnership </a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18308">International Day of Action for Rivers 2023</a></p>
                      <ul class="actions">
                        <li class="date">16 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/infographics">Infographics</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18307">UN Specialised Agencies - UNWTO, IFAD and UPU (Part–2) </a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/biodiversity-&amp;-environment">Biodiversity &amp; Environment</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18306">Landfill Fires and Mitigation</a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/governance">Governance</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-editorials/15-03-2023#18300">Shaping the Data Governance Regime</a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18298">World Consumer Rights Day 2023 </a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/biodiversity-&amp;-environment">Biodiversity &amp; Environment</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18299">Carbon Footprint of Marine Fisheries Lower than Global Average </a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/rapid-fire">Rapid Fire</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18297">Rapid Fire Current Affairs </a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/governance">Governance</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18296">British’ Online Safety Bill and End-to End Encryption </a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/biodiversity-&amp;-environment">Biodiversity &amp; Environment</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18295">World Air Quality Report</a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/indian-heritage-&amp;-culture">Indian Heritage &amp; Culture</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18294">Menace of Missing Antiquities in India</a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18293">Synchronised Survey of Vultures</a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                  <div>
                    <div class="editorial-box">
                      <span class="label bg-red"><a href="https://www.drishtiias.com/tags/social-justice">Social Justice</a></span>
                      <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18292">Centre Opposes Same-Sex Marriage</a></p>
                      <ul class="actions">
                        <li class="date">15 Mar 2023</li>


                      </ul>
                    </div>
                  </div>
                </div>
                <div class="editorial-slider--mobile">
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/indian-polity">Indian Polity</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18316">BCI Allows Foreign Lawyers to Practice in India</a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18315">National Policy on Older Persons in India</a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/rapid-fire">Rapid Fire</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18314">Rapid Fire Current Affairs</a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/international-relations">International Relations</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-editorials/16-03-2023#18313">India and the AUKUS Grouping </a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/indian-polity">Indian Polity</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18312">Governor’s Power to Call for Floor Test </a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/social-justice">Social Justice</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18311">Rising Concerns over Freshwater Shortages </a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18310">SVB Financial Group Collapse </a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/international-relations">International Relations</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18309">India - Australia Critical Minerals Investment Partnership </a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/16-03-2023#18308">International Day of Action for Rivers 2023</a></p>
                    <ul class="actions">
                      <li class="date">16 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/infographics">Infographics</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18307">UN Specialised Agencies - UNWTO, IFAD and UPU (Part–2) </a></p>
                    <ul class="actions">
                      <li class="date">15 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/biodiversity-&amp;-environment">Biodiversity &amp; Environment</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18306">Landfill Fires and Mitigation</a></p>
                    <ul class="actions">
                      <li class="date">15 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/governance">Governance</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-editorials/15-03-2023#18300">Shaping the Data Governance Regime</a></p>
                    <ul class="actions">
                      <li class="date">15 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/important-facts-for-prelims">Important Facts For Prelims</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18298">World Consumer Rights Day 2023 </a></p>
                    <ul class="actions">
                      <li class="date">15 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/biodiversity-&amp;-environment">Biodiversity &amp; Environment</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18299">Carbon Footprint of Marine Fisheries Lower than Global Average </a></p>
                    <ul class="actions">
                      <li class="date">15 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/rapid-fire">Rapid Fire</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18297">Rapid Fire Current Affairs </a></p>
                    <ul class="actions">
                      <li class="date">15 Mar 2023</li>

                    </ul>
                  </div>
                  <div class="editorial-box">
                    <span class="label bg-red"><a href="https://www.drishtiias.com/tags/governance">Governance</a></span>
                    <p><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials/news-analysis/15-03-2023#18296">British’ Online Safety Bill and End-to End Encryption </a></p>
                    <ul class="actions">
                      <li class="date">15 Mar 2023</li>

                    </ul>
                  </div>
                </div>

              </div>

              <!-- <div class="px-3 py-5 bg-gradient-primary text-white">edfswfwedjdnjkdfab juahabdhusgbfhsgfyv </div>
                                   
                                    <div class="px-3 py-5 bg-gradient-dark text-white">.bg-gradient-dark</div> -->
            </div>
          </div>

        </div>

        <!-- Third Column -->
        <div class="col-lg-4">

          <!-- Grayscale Utilities -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-warning">
              <h6 class="m-0 font-weight-bold text-dark">What's New?
              </h6>
            </div>
            <div class="card-body" style="overflow-x: scroll; overflow-x:hidden; max-height: 250px;">
              <ul>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="https://www.drishtiias.com/quiz/quizlist/daily-editorial-based-quiz">Editorial Quiz (15th March, 2023)</a></p>
                </li>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="">Rising Concerns over Freshwater Shortages - Articlas</a></p>
                </li>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="">SVB Financial Group Collapse - Articlas</a></p>
                </li>
                <li><span class="icon-calender">16 Mar 2023</span>
                  <p><a href="">India - Australia Critical Minerals Investment Partnership - Articlas</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Editorial - Shaping the Data Governance Regime </a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Infographics-UN Specialised Agencies - UNWTO, IFAD and UPU (Part–2)</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Rapid Fire Current Affairs - Articles</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">World Consumer Rights Day 2023 - Articles</a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Menace of Missing Antiquities in India - Article
                    </a></p>
                </li>
                <li><span class="icon-calender">15 Mar 2023</span>
                  <p><a href="">Synchronised Survey of Vultures - Article</a></p>
                </li>
              </ul>
              <!-- <div class="p-3 bg-gray-100">.bg-gray-100</div>
                                   
                                    <div class="p-3 bg-gray-900 text-white">.bg-gray-900</div> -->
            </div>
          </div>
          <!-- fourth column -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-info">
              <h6 class="m-0 font-weight-bold text-white">UPSC Prelims </h6>
              <i class="fas fa-dragon"></i>
            </div>
            <div class="card-body" style="overflow-x: scroll; overflow-x:hidden; max-height: 250px;">
              <div class="column-block">
                <div class="content" tabindex="5000">
                  <div class="category">
                    <p class="subheading bg-red">More Links</p>
                    <ul>
                      <!-- <li><a href="https://www.drishtiias.com/prelims/60-steps-to-prelims">60 Steps To Prelims</a></li> -->
                      <li><a href="https://www.drishtiias.com/prelims-test-series">Prelims Test Series 2022</a></li>
                      <li><a href="https://www.drishtiias.com/postal-course">Distance Learning Program</a></li>
                      <li><a href="https://www.drishtiias.com/statepcs">Prepare For State PCS</a></li>
                      <!-- <li><a href="https://www.drishtiias.com/summary-of-important-reports">Summary Of Important Reports</a></li> -->
                      <li><a href="https://www.drishtiias.com/quiz">Practice Quiz</a></li>
                      <li><a href="https://www.drishtiias.com/mains-practice-question/">Mains Answer Writing Practice</a></li>
                      <li><a href="https://www.drishtiias.com/current-affairs-news-analysis-editorials">Daily Current Affairs and Editorials</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- <p class="text-gray-100 p-3 bg-dark m-0">.text-gray-100</p>
                                    
                                    <p class="text-gray-900 p-3 m-0">.text-gray-900</p> -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- services -->
  <section id="services" class="">
    <div class="container-xxl py-5">
      <div class="container px-lg-5">
        <div class="section-title">
          <h4 class="title title-dark text-danger mb-4">Subjects</h4>

        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
              
              <h5 class="mb-3">UPSC</h5>
              <p>UPSC Civil Services</p>
              <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
              
              <h5 class="mb-3">General Science - 1</h5>
              <p>GS - 1 Updates will here</p>
              <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
              
              <h5 class="mb-3">CSAT</h5>
              <p>Aptitude updates will be here</p>
              <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Service End -->
  </section>


  <?php
  include "./footer.php";
  ?>