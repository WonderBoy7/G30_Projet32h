<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>History</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>assets/img/icon/accueil.png" rel="icon">

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
          <li><a class="nav-link" href="<?= base_url()?>">Accueil</a></li>
          <li><a class="nav-link " href="<?= base_url()?>Home/gestion_objet">Vos Objet</a></li>
          <li><a class="nav-link" href="<?= base_url()?>Home/all_objet">Liste objet</a></li>
          <li><a class="nav-link " href="<?= base_url()?>Home/proposition">Proposition</a></li>
          <li><a class="getstarted" href="<?= base_url()?>Home/logout"><i class="bi bi-door-open"></i> Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    
  <div class="container-fluid">
                    <h3 class="text-dark mb-4"></h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                           <center><h1> <p class="text-primary m-0 fw-bold">Historiques des Echanges des objets</p></h1></center>
                        </div>
                      
                                
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <br><br>
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>IdObjet</th>
                                            <th>IdUser</th>
                                            <th>Date </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($history as $row) {
                                                ?>
                                                <tr>
                                                    <td><?=$row['id']?></td>
                                                    <td><?=$row['idobjet']?></td>
                                                    <td><?=$row['idowner']?></td>
                                                    <td><?=$row['dt']?></td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                       
                                </table>
                            </div>
                            <div class="row">
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Groupe 30</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quasi, repellendus dolor accusamus quaerat magni similique cumque incidunt enim aut consequatur saepe culpa, ipsum a commodi corrupti quas ea cum.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="<?= base_url()?>assets/img/team/.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Tolotra Arnaud</h4>
                <span>ETU1869</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="<?= base_url()?>assets/img/team/.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mitia Razafimahefa</h4>
                <span>ETU1897</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="<?= base_url()?>assets/img/team/.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Seth Mickäel</h4>
                <span>ETU1870</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>IT University, Andoharanofotsy, Tana 101</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ard.tolotra@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+261 34 60 004 11</p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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