<?php
$dados = dadosEditarProduto($_GET['id']);//FUNÇÃO PARA TRAZER OS DADOS DO PRODUTO
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- Favicons -->
    <link href="../assets/img/favicon2.png" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/pg.css" rel="stylesheet">
</head>

<nav class="navbar bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" style="font-size:x-large; cursor:pointer ; color:white">Administrador</a>
        <a href="list_prod.php" class="btn btn-outline-warning" style="color:white">Voltar</button></a>
    </div>
</nav><br>

<body>
    <div class="container">
        <h2 style="padding:20px">Edite uma peça do seu cardápio!</h2>
        <form class="row g-3" method="post" action="edit_banco.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label"> Tipo</label>
                <input type="text" name="tipo" class="form-control" value="<?php echo $dados['tipo']; ?>">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label"> Valor</label>
                <input type="text" name="valor" class="form-control" value="<?php echo $dados['valor']; ?>">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label"> Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $dados['nome']; ?>">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Imagem</label>
                <input type="file" name="userfile" class="form-control">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-warning">Salvar</button>
            </div>

        </form>
    </div>
    <br>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>