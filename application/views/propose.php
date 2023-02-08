<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Proposer un échange</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="<?= base_url()?>assets/font/fontawesome-all.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Takalo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?= base_url()?>assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="<?= base_url()?>">Accueil</a></li>
          <li><a class="nav-link " href="<?= base_url()?>home/gestion_objet">Vos Objet</a></li>
          <li><a class="nav-link " href="<?= base_url()?>home/all_objet">Liste objet</a></li>
          <li><a class="nav-link " href="<?= base_url()?>home/proposition">Proposition</a></li>
          <li><a class="getstarted" href="<?= base_url()?>home/logout"><i class="bi bi-door-open"></i> Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section id="Proposition" class="portfolio">
      <div class="container" data-aos="">
        <div class="section-title">
          <h2>Faire une proposition</h2>
          <div class="portfolio-img"><img src="<?=$obj[0]['path']?>" class="img-fluid" alt=""></div>
        </div>
        <form action="<?= base_url()?>home/send_propose" method="post">
            <input type="hidden" name="objet_convoite" value="<?=$obj[0]['idobjet']?>">
            <input type="hidden" name="idowner" value="<?=$obj[0]['iduser']?>">
            <div class="form">
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Objet</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="idobject" aria-label="Default select example">
                            <option selected>Choisissez votre objet à échanger</option>
                            <?php
                              foreach ($objets as $objet) {
                                ?>
                                <option value="<?=$objet['idobjet']?>"><?=$objet['nom']?></option>
                                <?php
                              }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-outline-warning mb-3" value="Proposer">
          </form>
      </div>

  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Takalo</h3>
            <p>
              IT University<br>
              Andoharanofotsy, Tana 101<br>
              Madagascar <br><br>
              <strong>Phone:</strong> +261 34 60 004 11<br>
              <strong>Email:</strong> ard.tolotra@gmail.com<br>
            </p>
            
            <p>
              <br>
              <strong>Tolotra Arnaud </strong>ETU001869<br>
              <strong>Mitia Razafimahefa </strong>ETU001897<br>
              <strong>Seth Mickaël </strong>ETU001870<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Takalo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="">G30</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="<?= base_url()?>assets/vendor/waypoints/noframework.waypoints.js"></script> -->
  <!-- <script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script> -->
  
  <!-- Template Main JS File -->
  <script src="<?= base_url()?>assets/js/main.js"></script>

</body>

</html>