<?php
session_start();
include_once "propelinit.php";
$productos = ProductoQuery::create()->find();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Nike Sports Tienda Deportiva de Calzado</title>
  <link rel="icon" type="image/png" href="img/iconike.ico">

</head>

<body>
  <div class="container-fluid" style="background-color:#000;">

    <body>

      <!-- Barra de navegacion estatica -->
      <div class="row">
        <div class="col-12 d-none d-md-block">
          <nav class="navbar  bg-info navbar-dark fixed-top">
            <a class="nav-brand" href="info_nike.php">
              <img src="img/icon_nike_bar.png" height="80px" width="150px">
            </a>
            <form class="form-inline" method="post" action="navbar.php">
              <input class="form-control" name="busc" type="text" size="50" placeholder="Buscar...">
              <button type="submit" class="btn btn-light" role="button">
                <img src="img/iconike.png" width="32" height="28" style="vertical-align: middle"><br>
              </button>
            </form>
            <?php
            if (@$_SESSION["nombres"] == "") {
              echo "<a class='nav-brand' href='login.php'>";
              echo "<img src='img/usuario.png' class='rounded-circle bg-light' height='40px' width='40px' href='login.php'>";
              echo "</a>";
            } else {
              echo  "<label class='nav-brand'>" . "Bienvenido, " . $_SESSION['nombres'] . "</label>";
              echo "<a class='nav-brand' href='logout.php'>";
              echo "<img src='img/logout.png' width='32' height='28' style='vertical-align: middle' >";
              echo "</a>";
            }

            ?>
          </nav>
        </div>
      </div>
      <!-- Fin Barra de navegacion estatica -->

      <!-- Nav-Bar responsive -->
      <div class="row text-center bg-warning">
        <div class="col-12 d-block d-md-none">
          <nav class="navbar  bg-info navbar-dark fixed-top">
            <a class="nav-brand" href="index.php">
              <img src="img/icon_nike_bar.png" height="50px" width="100px">
            </a>
            <form class="form-inline" method="post" action="navbarrr.php">
              <input name="bsc" type="text" size="30" placeholder="Buscar...">
              <button type="submit" class="btn btn-light" role="button">
                <img src="img/iconike.png" width="18" height="14" style="vertical-align: middle"><br>
              </button>
            </form>
            <a class="nav-brand" href="login.php">
              <img src="img/usuario.png" class="rounded-circle bg-light" height="40px" width="40px">
            </a>
          </nav>
        </div>
      </div>
      <!-- Fin Nav-Bar responsive -->
      <!-- Carrusel --><br>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
        </ul>
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
            <img src="img/nike1.jpg" height="500px" width="1200px" class="img-fluid">
            <div class="carousel-caption">
              <h1>NIKE</h1>
              <h6 class="font-italic">JUST DO IT</h6>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/nike6.jpg" height="500px" width="1200px" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="img/nike2.png" height="500px" width="1200px" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="img/nike3.jpg" height="500px" width="1200px" class="img-fluid">
          </div>
          <div class="carousel-item">
            <img src="img/nike4.jpg" height="500px" width="1200px" class="img-fluid">
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <br>
      <!-- Fin Carrusel -->

      <!-- wave -->
      <div class="row" style="background-color:#000;">
        <br>
        <svg style="pointer-events: none" class="wave" width="100%" height="60px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
          <defs>
            <style>
              .a {
                fill: none;
              }

              .b {
                clip-path: url(#a);
              }

              .c,

              .d {
                fill: #fff;
              }

              .d {
                opacity: 0.5;
                isolation: isolate;
              }
            </style>
            <clipPath id="a">
              <rect class="a" width="1920" height="75"></rect>
            </clipPath>
          </defs>
          <title>wave</title>
          <g class="b">
            <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
          </g>
          <g class="b">
            <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
          </g>
          <g class="b">
            <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
          </g>
          <g class="b">
            <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
          </g>
        </svg>
      </div>
      <!-- Fin Wave -->

      <!-- categorias -->
      <div class="row bg-white">
        <h3>Filtrar por:</h3><br>
      </div>
      <div class="row bg-white">
        <div class="col-4 text-center">
          <a class="btn btn-danger" role="button" href="#f1" data-toggle="collapse">
            Por Genero <img src="img/drpdwn.png" class="rounded-circle" width="30" height="30" style="vertical-align: middle">
          </a>
          <div id="f1" class="collapse">
            <form method="post" action="filtrado.php">
              <input type="radio" name="fil" value="H" />Masculino<br>
              <input type="radio" name="fil" value="M" />Femenino<br>
              <input type="radio" name="fil" value="U" />Unisex<br>
              <br>
              <button type="submit" class="btn btn-info" role="button">
                Filtrar<img src="img/iconike.png" width="34" height="30" style="vertical-align: middle"><br>
              </button>
            </form>
          </div>
        </div>
        <div class="col-4 text-center">
          <a class="btn btn-danger" role="button" href="#f2" data-toggle="collapse">
            Por color <img src="img/drpdwn.png" class="rounded-circle" width="30" height="30" style="vertical-align: middle">
          </a>
          <div id="f2" class="collapse">
            <form method="post" action="filtrado.php">
              <input type="radio" name="fil" value="Negro" />Negro<br>
              <input type="radio" name="fil" value="Blanco" />Blanco<br>
              <input type="radio" name="fil" value="Rojo" />Rojo<br>
              <br>
              <button type="submit" class="btn btn-info" role="button">
                Filtrar<img src="img/iconike.png" width="34" height="30" style="vertical-align: middle"><br>
              </button>
            </form>
          </div>
        </div>
        <div class="col-4 text-center">
          <a class="btn btn-danger" role="button" href="#f3" data-toggle="collapse">
            Por Estilo <img src="img/drpdwn.png" class="rounded-circle" width="30" height="30" style="vertical-align: middle">
          </a>
          <div id="f3" class="collapse">
            <form method="post" action="filtrado.php">
              <input type="radio" name="fil" value="Street" />Street<br>
              <input type="radio" name="fil" value="Running" />Runing<br>
              <input type="radio" name="fil" value="Soccer" />Soccer<br>
              <input type="radio" name="fil" value="Basketball" />Bascketball<br>
              <br>
              <button type="submit" class="btn btn-info" role="button">
                Filtrar<img src="img/iconike.png" width="34" height="30" style="vertical-align: middle"><br>
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-- Fin Categorias -->

      <div class="row bg-white"></br></div>
      <!-- contenido -->
      <div class="row bg-white">
        <?php
        foreach ($productos as $producto) {
        ?>
          <div class="col-6 col-md-4 col-lg-4 text-center">
            <div class="card">
              <img class="card-img-top" src="<?php echo $producto->getImagen(); ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $producto->getNombreProducto(); ?></h5>
                <p class="card-text">
                  <?php echo $producto->getModelo(); ?> <br>
                  <?php echo $producto->getEstilo(); ?>
                <h5>$
                  <?php echo $producto->getPrecio(); ?>
                </h5>
                </p>
                <a href="comprar.php?id=<?php echo $producto->getIdProducto(); ?>" class="btn btn-primary">Más...</a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      
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
            <a class="nav-brand text-right text-white" href="avisoftware.php">
              Powered By: <img src="img/avisoftware.png" class="rounded-circle bg-light" height="75px" width="80px">
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
            <a class="nav-brand text-right text-white" href="avisoftware.php">
              By: <img src="img/avisoftware.png" class="rounded-circle bg-light" height="60px" width="65px">
            </a>
          </nav>
        </div>
      </div>
      <!-- Fin Pie De Pagina responsive -->


  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>