<?php
include_once "propelinit.php";
$clave = $_GET['id'];
$productos = ProductoQuery::create()->findByIdProducto($clave);

$direccion = DireccionQuery::create()->find();
$usuario = UsuarioQuery::create()->find();

foreach ($productos as $producto) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <!-- Required meta tags-->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Title Page-->
            <title>Proceso de Compra</title>

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
            <div class="page-wrapper bg-blue p-t-180 p-b-100 font-robo">
                <div class="wrapper wrapper--w960">
                    <div class="card card-2">

                        <div class="card-body text-aling-center">
                            <h2 class="title text-aling-center">Proceso de Compra</h2>

                            <h2>
                                <?php echo $producto->getNombreProducto(); ?>
                            </h2>
                            <form method="POST" action="comprarfn.php?id=<?php echo $producto->getIdProducto(); ?>">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <img class="card-img-top" src="<?php echo $producto->getImagen(); ?>" alt="zzz" width="150" height="250">
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label for="talla">Talla:</label>
                                            <input  class="input--style-2" type="text" value="24" id="talla" name="talla" readonly><br>
                                        </div>
                                        <div class="input-group">
                                            <label for="col">Color:</label>
                                            <input class="input--style-2" type="text" value="<?php echo $producto->getColor(); ?>" id="col" name="col" readonly size="5"><br>
                                        </div>
                                        <div class="input-group">
                                            <label for="est">Estilo:</label>
                                            <input class="input--style-2" type="text" value="<?php echo $producto->getEstilo(); ?>" id="est" name="est" readonly size="5"><br>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <h3>Metodo de Entrega</h3><br>
                                <div class="input-group">
                                    <label for="est">Telefono: </label>
                                    <input class="input--style-2" type="text" placeholder="num" name="tel">
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="dir">
                                                    <option disabled="disabled" selected="selected">Domicilio</option>
                                                    <option>dir1</option>
                                                    <option>dir2</option>
                                                    <option>dir3</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn--radius btn--prlp">Agregar nuevo Domicilio</button>
                                    </div>
                                </div>
                                <br><br>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <h3>Metodo de Envio</h3><br>
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="envio">
                                                    <option disabled="disabled" selected="selected">Tipo de Envio</option>
                                                    <option>Express</option>
                                                    <option>Standar</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <h3>Metodo de Pago</h3><br>
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="pago">
                                                    <option disabled="disabled" selected="selected">Como desea Pagar?</option>
                                                    <option>Transferencia-SPEI</option>
                                                    <option>Efectivo(OXXO)</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-t-30">
                                    <button class="btn btn--radius btn--green" type="submit">Comprar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

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