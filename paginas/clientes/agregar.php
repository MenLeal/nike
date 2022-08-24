<?php
$accion = @$_GET['accion'];
$id = @$_GET['id'];
if ($accion == "agregar") {
    @$nombresUsuario = $_POST['txtNombres']; //
    @$apellidoP = $_POST['txtPaterno'];
    @$apellidoM = $_POST['txtMaterno'];
    @$correo = $_POST['txtCorreo'];
    @$telefono = $_POST['txtTelefono'];
    @$tipo = $_POST['selectTipo'];
    @$pass = $_POST['txtPass'];
    @$passC = $_POST['txtPassC'];
    @$addfilled = "is-filled";
    $usuario = new Usuario();
    $usuario->setNombres($nombresUsuario);
    $usuario->setApellidoPaterno($apellidoP);
    $usuario->setApellidoMaterno($apellidoM);
    $usuario->setCorreo($correo);
    $usuario->setTelefono($telefono);
    $usuario->setContrasena($pass);
    $usuario->setTipo($tipo);
    if($pass == $passC){
        if ($usuario->validate()) {
            $msg = "<div class='alert alert-success' role='alert'>Se ha agregado el producto <a href='index.php' class='alert-link'>Ver en tienda</a></div>";
            $usuario->save();
        } else {
            $msg = "<div class='alert alert-danger text-center' style='margin-bottom:0;>";
            $msg .= "<strong>¡Error al procesar!</strong> revise los problemas encontrados:";
            $msg .= "<ul>";
            $msg .= "</ul>";
            $msg .= "</div>";
        }
    
    }
}
echo @$msg;
?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-2 col-md-3 d-flex flex-column me-lg-1">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="font-weight-bolder">Agregar Producto</h4>
                        <p class="mb-0">Ingrese todos los campos que se requieran</p>
                    </div>
                    <div class="card-body">
                        <form role="form" action="usuarios.php?seccion=agregar_usuario&accion=agregar" method="post" enctype="multipart/form-data">
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Nombre(s)</label>
                                <input type="text" class="form-control" name="txtNombres" value="<?php echo @$nombresUsuario; ?>">
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" name="txtPaterno" value="<?php echo @$apellidoP; ?>" onfocusout="defocused(this)">
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" name="txtMaterno" value="<?php echo @$apellidoM; ?>">
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Telefono</label>
                                <input type="tel" class="form-control" name="txtTelefono" value="<?php echo @$telefono; ?>">
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" name="txtCorreo" value="<?php echo @$correo; ?>">
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="txtPass" value="<?php echo @$pass; ?>">
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" name="txtPassC" value="<?php echo @$passC; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Seleccione un Tipo dando click aquí debajo</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="selectTipo">
                                    <option value="Comprador" <?php echo @$selecT1 ?>>Comprador</option>
                                    <option value="Admin" <?php echo @$selecT3 ?>>Admin</option>
                                    <option value="Trans" <?php echo @$selecT2 ?>>Transportista</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" role="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>