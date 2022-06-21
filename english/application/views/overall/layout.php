<!DOCTYPE html>

<html lang="es">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>PCBTroniks - {title}</title>

  <meta content="Proveemos soluciones IT a pequeñas y grandes empresas." name="descriptison">

  <meta content="IT, SISTEMAS, GDL, SERVICIOS, CCTV" name="keywords">



  <!-- Favicons -->

  <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">

  <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Redes -->
  <!-- Facebook -->
  <meta property="og:url" content="https://pcbtroniks.com/" />
  <meta property="og:type" content="page" />
  <meta property="og:title" content="PCBTroniks - Soluciones IT" />
  <meta property="og:description"
    content="Proveemos soluciones It a pequeñas y grandes empresas, nos consideraremos tu departamento de sistemas. Siempre que lo necesites estaremos para asesorarte en el amplio ámbito It. Tendrás al alcance todos los servicios en una sola mano, Nosotros."/>
  <meta property="og:image" content="https://pcbtroniks.com/assets/img/slide/slide-1.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="628" />
  <meta property="og:locale:alternate" content="es_ES" />

  <!-- Goggle -->
  <meta itemprop="name" content="PCBTroniks - Soluciones IT" />
  <meta itemprop="description"
    content="Proveemos soluciones It a pequeñas y grandes empresas, nos consideraremos tu departamento de sistemas. Siempre que lo necesites estaremos para asesorarte en el amplio ámbito It. Tendrás al alcance todos los servicios en una sola mano, Nosotros." />
  <meta itemprop="image" content="https://pcbtroniks.com/assets/img/slide/slide-1.jpg" />



  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">



  <!-- Vendor CSS Files -->

  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?= base_url(); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="<?= base_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">

  <link href="<?= base_url(); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

  <link href="<?= base_url(); ?>assets/css/pcb.css" rel="stylesheet">

  <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet">



  <!-- Additional scripts -->

  <script src="https://www.google.com/recaptcha/api.js"></script>



</head>



<body>



  <!-- ======= Top Bar ======= -->

  <section id="topbar" class="d-none d-lg-block">

    <div class="container clearfix">

      <div class="contact-info float-left">

        <i class="icofont-envelope"></i><a href="mailto:info@pcbtroniks.com">info@pcbtroniks.com</a>

        <i class="icofont-phone"></i> +52 33 1305 9432

      </div>

      <div class="social-links float-right">

        <a href="https://www.facebook.com/PCBTRONIKS/" class="facebook"><i class="icofont-facebook"></i></a>
        
        <a href="https://www.instagram.com/pcbtroniks/" class="instagram"><i class="icofont-instagram"></i></a>

      </div>

    </div>

  </section>



  <!-- ======= Header ======= -->

  <header id="header">

    <div class="container">



      <div class="logo float-left">

        <h1 class="text-light"><a href="<?= base_url() ?>"><span style="color:#000000;">PCB</span><span style="color: #5AB131;">troniks</span></a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->

        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      </div>



      <nav class="nav-menu float-right d-none d-lg-block">

        <ul>

          <li class="active"><a href="<?= base_url(); ?>#topbar">Home</a></li>

          <li><a href="<?= base_url(); ?>#about">About us</a></li>

          <li><a href="<?= base_url(); ?>#services">Services</a></li>

          <li><a href="<?= base_url(); ?>#contact">Request Quote</a></li>

          <?php

          $_SESSION['logged_in'] = (empty($_SESSION['logged_in'])) ? FALSE : TRUE;

          if($_SESSION['logged_in'] === TRUE):

          ?>

            <li><a href="<?= base_url(); ?>clientes/soporte/">Support</a></li>

            <li><a href="<?= base_url(); ?>authentication/logout/">Logout</a></li>

          <?php else: ?>

            <li><a href="<?= base_url(); ?>clientes">Sing in</a></li>

          <?php endif; ?>

        </ul>

      </nav><!-- .nav-menu -->



    </div>

  </header><!-- End Header -->



  <!-- Main -->

  {main}

  <!-- End main -->



  <!-- ======= Footer ======= -->

  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row">



          <div class="col-lg-4 col-md-6 footer-info">

            <h3><span style="color:#000000;">PCB</span><span style="color: #5AB131;">troniks</span></h3>

            <p>

              Guadalajara, Jalisco <br>

              Mexico<br><br>

              <strong>Tel:</strong>+52 33 1305 9432<br>

              <strong>Email:</strong> info@pcbtroniks.com<br>

            </p>

            <div class="social-links mt-3">

              <a href="#" class="twitter"><i class="icofont-whatsapp"></i></a>

              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 footer-links">

            <h4>Links</h4>

            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>#header">Home</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>#about">About us</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>#services">Services</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>#terminos">Terms of Service</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>#privacidad">Privacy Policy</a></li>

            </ul>

          </div>



          <div class="col-lg-4 col-md-6 footer-links">

            <h4>Themes of insteres:</h4>

            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>#contact">Work</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>clientes">Clients</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>solicitar-cotizacion">Quotes</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url(); ?>clientes/soporte">Send Report</a></li>

            </ul>

          </div>



         <!--  <div class="col-lg-4 col-md-6 footer-newsletter">

            <h4>Our Newsletter</h4>

            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>

            <form action="" method="post">

              <input type="email" name="email"><input type="submit" value="Subscribe">

            </form>



          </div> -->



        </div>

      </div>

    </div>



    <div class="container">

      <div class="copyright">

        &copy; Copyright <strong><span>Pcbtroniks</span></strong>. All rights reserved

      </div>

    </div>

  </footer><!-- End Footer -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



  <!-- Vendor JS Files -->

  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/venobox/venobox.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/counterup/counterup.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>



  <!-- Template Main JS File -->

  <script src="<?= base_url(); ?>assets/js/main.js"></script>



</body>



</html>