<?php
session_start();


/* if (!isset($_SESSION["usuario"]) ) {
    if (!isset($_POST['usuario'])){
        $usuario =  $_POST['usuario'];
        header("Location: login.php?erro=usuario não logado!");
        exit;
    
    }
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['nomeusuario'] = $_POST['nomeusuario'];
}
require_once 'menu.php'; */
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['nome'] = $_POST['nome'];
                require_once 'menu.php';

echo $_SESSION['nome'];
include '../Repositorio/conexao.php';
include '../Modelo/Produto.php';
include '../Repositorio/ProdutoRepositorio.php';

$produtosRepositorio = new ProdutoRepositorio($conn);
$bolos = $produtosRepositorio->listarBolos();
$torta = $produtosRepositorio->listarTorta();
$doces = $produtosRepositorio->listarDoces();
$cupcake = $produtosRepositorio->listarCupCake();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Magical Bakery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <div style="display: flex;">
        <img src="../assets/img/logo.png" style="display: flex; justify-content: center; align-items: center; width: 30%; margin: 0 auto">
    </div>


    <!-- Favicons -->
    <link href="../assets/img/logojanela.png" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/index.css" rel="stylesheet">
    <link href="../assets/css/menu.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>Bem-vindo a nossa confeitaria artesnal</h2>
                    <p class="mb-0">Feito com amor & servido com duçura</p>
                </div>
                <a href="#" onclick="enviarParaInicio()" data-filter=" *">Home</a>
                <a href="#" onclick="bolo()" data-filter=".bolo">Bolos</a>
                <a href="#" onclick="torta()" data-filter=".torta" class="active">Tortas</a>
                <a href="#" onclick="doce()" data-filter=".doce">Doces</a>
                <a href="#" onclick="cupcake()" data-filter=".cupcake">CupCakes</a>
            </div>
            <?php $i = 0; ?>
            <?php $i = 0; ?>
            <?php $i = 0; ?>
            <div>

                <?php foreach ($cupcake as $bolo) : ?>
                    <?php if ($i % 2 == 0) : ?>
                        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                        <?php endif; ?>
                        <div class="item torta col-sm-6 col-md-6 col-lg-6 mb-3">
                            <a href="<?php echo $bolo->getImagem() ?>" class="item-wrap fancybox">
                                <div class="work-info">
                                    <h3><?php echo $bolo->getNome() ?></h3>
                                    <span><?php echo $bolo->getTipo() ?></span>
                                </div>
                                <img class="img-fluid mx-auto d-block" src="<?php echo $bolo->getImagem() ?>" style="width: 60%;">
                            </a>
                        </div>
                        <?php if ($i % 2 == 1) : ?>
                        </div>
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>

            </div>

    </section><!-- End  Works Section -->

    <!-- ======= Services Section ======= -->
    <section class="section services">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-5">
                    <h3 class="h3">Cárdapio</h3>
                    <p>Conheça um pouco das nossas gostosuras!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">

                    <h4 class="h4 mb-2">Bolos</h4>
                    <p>Sabores:</p>
                    <ul class="list-unstyled list-line">
                        <li>Brigadeiro</li>
                        <li>Floresta Negra</li>
                        <li>Prestigio</li>
                        <li>Red Velvet</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <h4 class="h4 mb-2">Tortas</h4>
                    <p>Sabores:</p>
                    <ul class="list-unstyled list-line">
                        <li>Doce de leite</li>
                        <li>Limão</li>
                        <li>Morango</li>
                        <li>Banoffe</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <h4 class="h4 mb-2">Doces</h4>
                    <p>Sabores:</p>
                    <ul class="list-unstyled list-line">
                        <li>Brigadeiro Gourmet</li>
                        <li>Brigadeiro de doce de leite</li>
                        <li>Macarrons</li>
                        <li>Pão de mel</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <h4 class="h4 mb-2">CupCakes</h4>
                    <p>Sabores:</p>
                    <ul class="list-unstyled list-line">
                        <li>Baunilha</li>
                        <li>Chocolate</li>
                        <li>Cranberry</li>
                        <li>Ferrero Rocher</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <section class="section pt-0">
        <div class="container">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial">
                                <img src="../assets/img/donaneide.jpg" alt="Image" class="img-fluid">
                                <blockquote>
                                    <p>Os ingredientes de alta qualidade fazem toda diferneça, com certeza comprarei novamente.</p>
                                </blockquote>
                                <p>&mdash; Dona Neide</p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial">
                                <img src="../assets/img/joao.jpg" alt="Image" class="img-fluid">
                                <blockquote>
                                    <p>É sempre muito dificil apenas escolher uma sobremesa. sempre saio com vários doces!</p>
                                </blockquote>
                                <p>&mdash; João Silva</p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="mb-1">&copy; Copyright MagicalBakery. All Rights Reserved</p>
                    <div class="credits">

                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-sm-6 social text-md-end">
                    <a href="#"><span class="bi bi-twitter"></span></a>
                    <a href="#"><span class="bi bi-facebook"></span></a>
                    <a href="#"><span class="bi bi-instagram"></span></a>
                    <a href="#"><span class="bi bi-linkedin"></span></a>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>