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
  <meta name="keywords" content="craakit, Craakit.com,UPSC civil services Mock Test, UPSC civil services mock exam, NEET mock exam, SAT Mock exam, JEE Mock test, JEE mains mock test, UPSC civil services subject wise mock test, UPSC civil services online preparation test">
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <!-- Favicons -->
  <link href="./exam_icon.png" rel="icon">
  <link href="./apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./aos.css" rel="stylesheet">
  <link href="./bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-icons.css" rel="stylesheet">
  <link href="./boxicons.min.css" rel="stylesheet">
  <link href="./glightbox.min.css" rel="stylesheet">
  <link href="./swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #hero {
      width: 100%;
      height: calc(105vh);
      background: url("./assets/img/upsc_img1.jpg") top center;
      background-size: cover;
      position: relative;
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

      <h1 class="logo"><a href="#">Craakit</a></h1>
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
          <li><a class="nav-link scrollto" href="#courses">Courses</a></li>
          <li><a class="nav-link scrollto" href="#why-us">About Us</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="./login.php">Login</a></li>
          <li><a class="nav-link scrollto" href="./register.php">Register</a></li>

          

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->