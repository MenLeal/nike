<?php session_start();
$mensaje="";
$error =@$_GET["error"] ;
if ($error== "1") {
  $mensaje = "  <div class='alert alert-danger text-center' style='margin-bottom:0;>
  <div class='container-fluid'>
    <div class='alert-icon'>
      <i class='material-icons'>error_outline</i>
    </div>
    <b>LOGIN FALLIDO: </b>NO COLOCAR CAMPOS VACIOS
  </div>
  </div>";
}
if ($error== "2") {
  $mensaje = "  <div class='alert alert-danger text-center' style='margin-bottom:0;>
  <div class='container-fluid'>
    <div class='alert-icon'>
      <i class='material-icons'>error_outline</i>
    </div>
    <b>LOGIN FALLIDO: </b>USUARIO O CONTRASEÑA INCORRECTOS
  </div>
  </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/iconike.ico">
  <title>
    Inicio de Sesión
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css" rel="stylesheet" />
  <script src="js/jquery-3.3.1.slim.min.js"></script>
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <?php
    echo @$mensaje;
    ?>
    <div class="page-header align-items-start min-vh-100" style="background-image: url('img/fondologin.webp');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <div class="row mt-3">
                    <div class="col-3 text-center ">
                      <a class="btn btn-link px-4">
                        <img src="img/iconike.ico"></img>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body" id="loginForm">
                <form role="form" action="verify.php" class="text-start" method="post">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="txtEmail" id="email">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="txtPassword" id="password">
                  </div>
                  <div class="text-center">
                    <button class="btn bg-gradient-primary w-100 my-4 mb-2" type="submit" role="button">Ingresar</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    ¿Aún no tienes una cuenta?
                    <a href="signup.php" class="text-primary text-gradient font-weight-bold">Registrese aqui</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script>
    $("#loginForm").submit(function(event) {
      var email = $("#email").val();
      var password = $("#password").val();
      // Checking for blank fields.
      if (email == '' || password == '') {
        $('input[type="text"],input[type="email"]').css("border", "2px solid red");
        $('input[type="text"],input[type="password"]').css("border", "2px solid red");
        alert("RELLENAR TODOS LOS CAMPOS");
      }
    });
  </script>
  <!-- Github buttons -->
  <script async defer src="js/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>

</body>

</html>