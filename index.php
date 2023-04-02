<?php
include "cod/conecta.php";
include "cod/functions.php";

switch ($_GET['r']) {
  case 'edit_prod':
    include "cod/edit.php";
    break;
}

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
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#menu">Cardápio</a></li>
          <li><a href="#contact">Contato</a></li>
          <a href="https://wa.me/551125741033?text=pe%C3%A7a+seu+p%C3%A3o%21" class="btn-book-a-table">Whatsapp</a>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg" style="background-image: url(assets/img/bread.jpg);">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up" style="color:white">Ciabatta – Feito com amor e ingredientes de qualidade <br></h2>
          <p data-aos="fade-up" data-aos-delay="100" style="color:white">Bem-vindo à Ciabatta – Padaria Artesanal !</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="sobre.php" class="btn-book-a-table">Saiba mais!</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Sobre Nós</h2>
        <p>Um pouco da nossa <span>História</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-5 position-relative about-img" style="background-image: url(assets/img/bakery.jpg); border: radius 150px;" data-aos="fade-up" data-aos-delay="150">
        </div>
        <div class="col-lg-7 d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              Nós somos uma padaria artesanal dedicada a trazer tradição e sabor a cada pão que fazemos. Usando ingredientes frescos e técnicas artesanais de fermentação e cozimento, criamos pães autênticos e saborosos que vão deixar seu paladar apaixonado.
            </p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="sobre.php" class="btn-book-a-table">Saiba mais!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <section id="adm" class="adm">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Administrador</h2>
        <p>Gerenciar <span>Cardápio</span></p>
        <a href="cod/add.php" class="btn-book-a-table">Adcionar e editar informações.</a>
      </div>
  </section>

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Menu</h2>
          <p>Cheque <span>nosso cardápio!</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Pães</h4>
            </a>

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h3>Sabores</h3>
            </div>

            <div class="row gy-5">
              <?php $query = retornaDados();
              while ($dados = $query->fetch_array()) { ?>

                <div class="col-lg-4 menu-item">
                  <img src="<?php echo $dados['imagem']; ?>" style="border-radius: 1000px ; height:200px; widht: 200px;" alt="">
                  <h4><?php echo $dados['nome'] ?></h4>
                  <p class="tipo">
                    <?php echo $dados['tipo'] ?>
                  </p>
                  <p class="price">
                    R$ <?php echo $dados['valor'] ?>
                  </p>
                </div><!-- Menu Item -->

              <?php }; ?>
            </div>
          </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contato</h2>
          <p>Precisa de ajuda? <span>Contate-nos</span></p>
        </div>


        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Endereço:</h3>
                <p>R. Salomé Queiroga, 284 – Vila Carrao, São Paulo – SP/p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>E-mail:</h3>
                <p> info@ciabattabr.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Nosso contato:</h3>
                <p> +55 11 2574-1033</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Horários de funcionamento:</h3>
                <div><strong>Seg-Sáb:</strong> 11AM - 22PM;
                  <strong>Domingo:</strong> 12AM
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Menssagem" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Carregando</div>
            <div class="error-message"></div>
            <div class="sent-message">Sua mensagem foi enviada com sucesso. Obrigado!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar Menssagem</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

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