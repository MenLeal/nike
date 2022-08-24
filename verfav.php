<?php
session_start();
include_once "propelinit.php";
@$accion = @$_GET['accion'];
@$id = @$_GET['id'];
$mensaje="";
if(@$accion=="eliminar"){
    $fav = FavoritosQuery::create()->filterByIdFavorito($id)->findOne();
    $fav->delete();
}



$favoritos = FavoritosQuery::create()->findByIdUsuario($_SESSION["id"]);

#$productos = ProductoQuery::create()->find();

    ?>
    <!DOCTYPE html>
    <html lang="en">

<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title Page-->
<title>Favoritos!</title>

<!-- Icons font CSS-->
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<!-- Vendor CSS-->
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/csscp.css" rel="stylesheet" media="all">
</head>

        <body>
            <div class="page-wrapper bg-pink p-t-180 p-b-100 font-robo">
                <div class="wrapper wrapper--w960">
                    <div class="card card-2">
                        <div class="card-body text-aling-center">
                            <h2 class="title text-aling-center">Mis Favoritos</h2>
                            <h2>
                                <?php
                                    foreach ($favoritos as $favorito) {
                                        $producto = ProductoQuery::create()->filterByIdProducto($favorito->getIdProducto())->findOne();
                                        #echo $producto->getNombreProducto(); ?>
                                        <br>
                                        <div class="row row-space">
                                            <div class="col-2">
                                                <h3><?php echo $producto->getNombreProducto(); ?></h3>
                                                <img src="<?php echo $producto->getImagen(); ?>" alt="zzz" width="120" height="180">
                                            </div>
                                            <div class="col-2"><br><br>
                                                <a href="comprar.php?id=<?php echo $producto->getIdProducto(); ?>">
                                                    <button class="btn btn--radius btn--prlp btn-sm">Ver</button>
                                                </a><br>
                                                <a href="verfav.php?accion=eliminar&id=<?php echo $favorito->getIdFavorito(); ?>">
                                                    <button class="btn btn--radius btn--red btn-sm">Eliminar</button>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <?php
                                    }
                                ?>
                                       <div class="p-t-30">
                                            <a href="index.php">
                                                <button class="btn btn--radius btn--green btn-sm">Volver</button>
                                            </a><br>
                                        </div> 
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>

    </body>

</html>
<!-- end document-->