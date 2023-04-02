<?php
include "cod/conecta.php";
include "cod/functions.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ciabatta Padaria Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon2.png" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/pg.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="assets/img/Logo-pao.png">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="sobre.php">Sobre Nós</a></li>
          <li><a href="#footer">Contato</a></li>
          <a href="https://wa.me/551125741033?text=pe%C3%A7a+seu+p%C3%A3o%21" class="btn-book-a-table">Whatsapp</a>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>


    </div>
  </header><!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about"><br>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Sobre Nós</h2>
                <p>Um pouco da nossa<span> História</span></p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-5 position-relative about-img" style="background-image: url(assets/img/padaria-chick.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                </div>
                <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Nós somos uma padaria artesanal dedicada a trazer tradição e sabor a cada pão que fazemos. Usando ingredientes frescos e técnicas artesanais de fermentação e cozimento, criamos pães autênticos e saborosos que vão deixar seu paladar apaixonado.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Na Ciabatta, acreditamos que a comida é uma forma de amor e queremos compartilhar esse amor com nossos clientes. Estamos comprometidos em oferecer o melhor atendimento ao cliente e garantir que cada cliente saia da nossa padaria satisfeito e com um pão delicioso em mãos.</li>
                            <li><i class="bi bi-check2-all"></i> Nosso objetivo é trazer tradição e autenticidade à sua mesa, fazendo com que cada mordida seja uma experiência única. Visite a Ciabatta em São Paulo e experimente o sabor da tradição italiana em cada pão.</li>
                        </ul>
                        <p class="fst-italic">
                          Nossa especialidade é a ciabatta, um pão italiano macio por dentro e crocante por fora. Mas também oferecemos outras opções como baguetes, focaccias e pães integrais, sempre feitos com a mesma dedicação e amor.
                        </p>

                        <div class="position-relative mt-4">
                            <img src="assets/img/paes.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Endereço</h4>
            <p>
              R. Salomé Queiroga, 284 – <br> Vila Carrao, São Paulo – SP
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contatos</h4>
            <p>
              <strong>Phone:</strong> +55 11 2574-1033 <br>
              <strong>Email:</strong> info@ciabattabr.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horários de funcionamento</h4>
            <p>
              <strong>Seg-Sáb: 11AM</strong> - 22PM<br>
              Domingo: 12AM
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4></h4>
          <div class="social-links d-flex">
            <a href="https://wa.me/551125741033?text=pe%C3%A7a+seu+p%C3%A3o%21" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            <a href="https://pt-br.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://br.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ciabatta</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by W&W
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>