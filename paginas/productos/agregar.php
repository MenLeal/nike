<?php
$accion = @$_GET['accion'];
$id = @$_GET['id'];
if ($accion == "agregar") {
    $nom = $_POST['nombreImg'];
    if (isset($_FILES['img']) && $nom!="") {
        $ruta = $_FILES['img']['tmp_name'];
        $tipo = $_FILES['img']['type'];
        $img_info = getimagesize($_FILES['img']['tmp_name']);
        $ancho = $img_info[0];
        $largo = $img_info[1];

        if ($tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/webp') {
            if ($tipo == 'image/png') {
                $destino = "img/" . $nom . ".png";
            }
            if ($tipo == 'image/jpeg') {
                $destino = "img/" . $nom . ".jpg";
            }
            if ($tipo == 'image/webp') {
                $destino = "img/" . $nom . ".webp";
            }

            if (move_uploaded_file($ruta, $destino)) {
                $producto = new Producto();
                $producto->setNombreProducto($_POST['txtNombreProd']);
                $producto->setModelo($_POST['txtModelo']);
                $producto->setGenero($_POST['selectGen']);
                $producto->setEstilo($_POST['selectEst']);
                $producto->setColor($_POST['txtColor']);
                $producto->setTalla($_POST['txtTalla']);
                $producto->setPrecio($_POST['txtPrecio']);
                $producto->setStockOriginal($_POST['txtStock']);
                $producto->setStockActual($_POST['txtStock']);
                $producto->setDescripcion($_POST['txtDescrip']);
                $producto->setImagen($destino);
                if ($producto->validate()) {
                    echo "<div class='alert alert-success' role='alert'>Se ha agregado el producto <a href='index.php' class='alert-link'>Ver en tienda</a></div>";
                    $producto->save();
                } else {
                    $mensaje = "<div class='alert alert-danger text-center' style='margin-bottom:0;>
            <div class='container-fluid'>
            <div class='alert-icon'>
            <i class='material-icons'>error_outline</i>
            </div><b>ERROR EN LOS DATOS</div></div>";
                }
            }
        } else {
            $mensaje = "<div class='alert alert-danger text-center' style='margin-bottom:0;>
            <div class='container-fluid'>
            <div class='alert-icon'>
            <i class='material-icons'>error_outline</i>
            </div><b>FORMATO NO COMPATIBLE</b> SOLO USAR JPEG PNG O WEBP</div></div>";
        }
    } else {
        if($nom==""){
            $mensaje = "<div class='alert alert-danger text-center' style='margin-bottom:0;>
            <div class='container-fluid'>
            <div class='alert-icon'>
            <i class='material-icons'>error_outline</i>
            </div><b>PRODUCTO SIN NOMBRE DE FOTO</b> COLOCAR UN NOMBRE PARA LA FOTO DEL PRODUCTO </div></div>";
    
        }else{
            $mensaje = "<div class='alert alert-danger text-center' style='margin-bottom:0;>
            <div class='container-fluid'>
            <div class='alert-icon'>
            <i class='material-icons'>error_outline</i>
            </div><b>PRODUCTO SIN FOTO</b> COLOCAR UNA FOTO PARA EL PRODUCTO</div></div>";
    
        }
    }
}
if ($accion=="editar"){
    $producto = ProductoQuery::create()->filterByIdProducto($id)->findOne();
    @$nombreProducto = $producto->getNombreProducto();
    @$modeloProducto = $producto->getModelo();
}
echo @$mensaje;
?>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="card-header">
                <h4 class="font-weight-bolder">Agregar Producto</h4>
                <p class="mb-0">Ingrese todos los campos que se requieran</p>
            </div>
            <div class="col-xl-5 col-lg-2 col-md-3 d-flex flex-column me-lg-1">
                <div class="card card-plain">
                    <div class="card-body">
                        <form role="form" action="Fuser02.php?seccion=agregar_producto&accion=agregar" method="post" enctype="multipart/form-data">
                            <div class="input-group input-group-outline mb-3 is-filled">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txtNombreProd" value="<?php echo $nombreProducto;?>" onfocusout="defocused(this)" >
                            </div>
                            <div class="input-group input-group-outline mb-3 is-filled">
                                <label class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="txtModelo" value="<?php echo $modeloProducto;?>" onfocusout="defocused(this)">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Seleccione un Genero dando click aquí debajo</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="selectGen">
                                    <option value="U">Unisex</option>
                                    <option value="H">Hombre</option>
                                    <option value="M">Mujer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Seleccione un Estilo dando click aquí debajo</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="selectEst">
                                    <option value="Street">Street</option>
                                    <option value="Running">Running</option>
                                    <option value="Soccer">Soccer</option>
                                    <option value="Soccer">Basketball</option>
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Color</label>
                                <input type="text" class="form-control" name="txtColor">
                            </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Talla</label>
                            <input type="number" class="form-control" name="txtTalla">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number" class="form-control" name="txtPrecio">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Stock</label>
                            <input type="number" class="form-control" name="txtStock">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Descripci&oacute;n</label>
                            <input type="text" class="form-control" name="txtDescrip">
                        </div>
                        <div class="form-group is-empty is-fileinput">
                            <input type="file" id="inputFile4" name="img">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nombre de la IMAGEN DEL PRODUCTO" name="nombreImg">
                                <span class="input-group-btn input-group-sm">
                                    <button type="button" class="btn btn-fab btn-fab-mini">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                            </div>
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