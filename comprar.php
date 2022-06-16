<?php
include_once "propelinit.php";
$clave = $_GET['id'];
$productos = ProductoQuery::create()->findByIdProducto($clave);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <title>Comprarrr</title>

    </head>
    <body>
        <!-- contenido -->
        <?php
        foreach ($productos as $producto) {
            ?>
            <div class="container-fluid" style="background-color:#fff;">
                <section class="py-5">
                    <div class="container px-4 px-lg-5 my-5">
                        <div class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 text-aling-left" src="<?php echo $producto->getImagen(); ?>"/></div>
                            <div class="col-md-6">
                                <div class="small mb-1"><?php echo $producto->getModelo(); ?></div>
                                <h1 class="display-5 fw-bolder"><?php echo $producto->getNombreProducto(); ?></h1>
                                <div class="fs-5 mb-5">
                                    <span class="text-decoration-line-through">$<?php echo $producto->getPrecio(); ?>.00</span>
                                    <span>$<?php echo $producto->getPrecio(); ?>.00</span>
                                </div>
                                <p class="lead"><?php echo $producto->getDescripcion(); ?></p>
                                <div class="d-flex">

                                    <?php include_once "fav.php"; ?>
                                    <div class="d-flex">
                                        <!-- <?php if ($producto->getPrecio() > 0) { ?>
                                                      <a href="pcompra.php?id=<?php echo $producto->getIdProducto(); ?>" class="btn btn-info"> <img src="img/icon_car.png" width="20" height="20" style="vertical-align: middle"> Comprar ahora</a>
                                        <?php } else { ?>
                                                    <a href="#" class="btn btn-info"> <img src="img/icon_car.png" width="20" height="20" style="vertical-align: middle"> Comprar ahora</a>
                                        <?php } ?>-->
                                        <a href="comprarrr.php?id=<?php echo $producto->getIdProducto(); ?>"><br><br><br>
                                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                                <i class="bi-cart-fill me-1"></i>
                                                <img src="img/icon_car.png" width="20" height="20" style="vertical-align: middle">
                                                Comprar ahora
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <?php
            }
            ?>
            <!-- Fin Contenido -->

            <!-- Pie de pagina -->
            <div class="row">
                <div class="col-12 d-none d-md-block">
                    <nav class="navbar bg-dark navbar-light">
                        <a class="nav-brand text-left" href="info_nike.php">
                            <img src="img/iconike_bl.png" height="40px" width="100px">
                        </a>            
                        <a class="nav-brand text-left text-white" href="https://www.facebook.com">
                            <img src="img/Facebook.png" height="50px" width="50px"><br> Nike Tizimín1
                        </a>
                        <a class="nav-brand text-left text-white" href="https://www.twitter.com">
                            <img src="img/twitter.png" height="50px" width="50px"><br> @NikeTiz1
                        </a>
                        <a class="nav-brand text-left text-white" href="https://www.gmail.com">
                            <img src="img/Mail.png" height="50px" width="50px"><br> NikeTiz1@gmail.com
                        </a>
                    </nav>
                </div>
            </div>
            <!-- Fin Pie de pagina -->

            <!-- Pie De Pagina responsive -->
            <div class="row text-center bg-dark">
                <div class="col-12 d-block d-md-none">
                    <nav class="navbar bg-dark navbar-light">
                        <a class="nav-brand text-left" href="info_nike.php">
                            <img src="img/iconike_bl.png" height="30px" width="75px">
                        </a>
                        <a class="nav-brand text-left" href="https://www.facebook.com">
                            <img src="img/Facebook.png" height="40px" width="40px">
                        </a>
                        <a class="nav-brand text-left" href="https://www.twitter.com">
                            <img src="img/twitter.png" height="40px" width="40px">
                        </a>
                        <a class="nav-brand text-left" href="https://www.gmail.com">
                            <img src="img/Mail.png" height="40px" width="40px">
                        </a>
                    </nav>
                </div>
            </div>
            <!-- Fin Pie De Pagina responsive -->


        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js" ></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>