<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	$lots = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parking Guide and Monitoring System</title>
    <?php require('links/links.php');?>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="styles/bill.css">
    <link rel="stylesheet" type="text/css" href="styles/pvms.css">
</head>

<body class="bg-light light">

<?php require('header.php');?>

<!-- Carousel-->
<div class="container-fluid">
  <div class="swiper swiper-container ">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/parking1.jfif" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/parking2.jfif" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/parking3.jfif" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/parking4.png"  class="w-100 d-block"/>
        </div>
        
         
      </div>
       
      <div class="swiper-pagination"></div>
    </div>
</div>
<!-- End Carousel -->

<!--  Parking -->
<?php include "pvms.php"?>
<!-- end -->


<br><br><br>
<br><br><br>

<!-- Reach Us -->
<h2 id="reach-us" class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white">
      <iframe  class="w-100 rounded" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123851.63490699544!2d121.26524217405048!3d14.055694291581057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5c96860a894b%3A0xfa9e0f05004f4aca!2sSan%20Pablo%20City%2C%20Laguna!5e0!3m2!1sen!2sph!4v1671097499032!5m2!1sen!2sph"    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call Us</h5>
        <a href="tel: +639954231106" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone"></i>+639954231106
        </a>
        <br>
        <a href="tel: +639954231106" class="d-inline-block  text-decoration-none text-dark">
        <i class="bi bi-telephone"></i>+639510457885
        </a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6">
          <i class="bi bi-twitter me-2"></i>Twitter
        </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6">
          <i class="bi bi-facebook me-1"></i>Facebook
        </span>
        </a>
        <br>
        <a href="#" class="d-inline-block  ">
        <span class="badge bg-light text-dark fs-6">
          <i class="bi bi-instagram me-1"></i>Instagram
        </span>
        </a>
        <br>
        
      </div>
      
    </div>
    
  </div>
  
</div>

<br><br><br><br>

<!-- About -->
<section id="about">
  <div class="about-container" style=" width: 50%;
      height: 530px;
      background-color: #ffffff;
      border-radius: 20px;
      display: flex;
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
      margin: 7% auto 20px auto;
      position: relative;
      bottom: 40px;
      justify-content: space-evenly;
      align-items: center;
  ">    
    <div class="about-text" style=" width: 550px;">
      <p class="h-font" style="color: #403e3e; font-size: 65px; line-height: 10px;">ABOUT US </p>
      <br><br>
      <p style="color: #7e7d7d; font-family: calibri; font-size: 18px;">
      These days, in this generation, every task must be completed in a fast and efficient manner while remaining productive. It is clear that it became a significant part to everybody’s daily life. This project is about monitoring a parking space through online.It focused on the creation of an management information system for Vehicle Parking Monitoring System that will help customers for monitoring in a parking space and paying bill in commercial areas that unnecessary consumes time.</p>
    </div>
  </div>
</section>   

<br><br>
<h2 id="team" class="mt-5 pt-4 mb-4 text-center fw-bold h-font">MEET THE TEAM</h2>
<div class="container">
  <div class="row">
  
    <div id="img" class="col-lg-4 col-md-6 my-3 ">
      <div class="card border-0 shadow" style="max-width: 250px; margin: auto;">
        <img src="images/ISAC.JPG" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h5 class="text-center">ISACHAR CORAL</h5>
        </div>
      </div>
    </div>

    <div id="img" class="col-lg-4 col-md-6 my-3 ">
      <div class="card border-0 shadow" style="max-width: 250px; margin: auto;">
        <img src="images/josh.JPG" class="card-img-top" alt="...">
        <div class="card-body bg-light">
          <h5 class="text-center">JOSHUA DE CASTRO</h5>
        </div>
      </div>
    </div>

    <div id="img" class="col-lg-4 col-md-6 my-3 ">
      <div class="card border-0 shadow" style="max-width: 250px; margin: auto;">
        <img src="images/jov.JPG" class="card-img-top" alt="..." style="height: 340px;">
        <div class="card-body bg-light">
          <h5 class="text-center">JOVANNI LAT</h5>
        </div>
      </div>
    </div>

    <style>
    .row #img{ transition: all ease .6s; }
    .row #img:hover{transform: scale(1.1);}
  </style>
  </div>
</div>

<br><br><br>

<?php require('footer.php');?>


 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 10,
        effect: "fade",
        loop:true,
        autoplay: {
          delay: 1500,
          disableOnInteraction: false,
        }
      });


      
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
</body>
</html>