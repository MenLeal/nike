<?php
include_once "propelinit.php";
$clave = $_GET['id'];
$productos = ProductoQuery::create()->findByIdProducto($clave);
$direccion = DireccionQuery::create()->find();
$usuario = UsuarioQuery::create()->find();

$envio=$_POST['envio'];
$pago=$_POST['pago'];

foreach ($productos as $producto) {


$cenvio=0;
$total=$producto->getPrecio();
if($envio=="Express"){
    $cenvio=80;
}
if($envio=="Standar"){
    $cenvio=40;
}
$total=$total+$cenvio;
$ref="X-X-X";
if($pago=="Transferencia-SPEI"){
    $ref="4815-1630-3715-7446";
}
if($pago=="Efectivo(OXXO)"){
    $ref="9700-0100-0157-4293";
}

?>
<!DOCTYPE html>
<html lang="en">

        <head>
            <!-- Required meta tags-->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Title Page-->
            <title>Final Comprar</title>

            <!-- Icons font CSS-->
            <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
            <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
            <!-- Font special for pages-->
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

            <!-- Vendor CSS-->
            <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
            <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

            <!-- Main CSS-->
            <link href="css/maincf.css" rel="stylesheet" media="all">
        </head>

        <body>
            <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
                <div class="wrapper wrapper--w960">
                    <div class="card card-2">
                        <div class="card-heading"></div>
                        <div class="card-body">
                            <h2 class="title">Compra Completada!</h2>
                            <h5>Su pedido ha sido registrado exitosamente, sin embargo, el envio no se realiza hasta que el pago sea acreditado.</h5>
                            <br><h4>Lo invitamos a realizar el pago total de su pedido por la cantidad de: $<?php echo $total; ?></h4>
                            <br><br>
                            <div class="row row-space">
                                <div class="col-2">
                                    <h5>Metodo de Pago: </h5>
                                    <h4><?php echo $pago; ?></h4>
                                </div>
                                <div class="col-2">
                                    <h5>Referencia: </h5>
                                    <h4><?php echo $ref; ?></h4>
                                </div>
                            </div>
                            <br>
                            <h6>A partir de este momento usted cuenta con 24 horas para realizar el pago por la cantidad total indicada anteriormente, en caso de que el pago no se acredite en el lapso de tiempo indicado, su compra sera cancelada.</h6>
                            <br>
                            <a href="index.php">
                                <button class="btn btn--radius btn--green">Listo</button>
                            </a>
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