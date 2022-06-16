<?php
@$accion = @$_GET['accion'];
@$id = @$_GET['id'];
$producto = ProductoQuery::create()->filterByIdProducto($id)->findOne();
if($accion=="eliminar"){
    If (unlink($producto->getImagen())) {
        $producto->delete();
        $mensaje="<div class='alert alert-success' role='alert'>Se ha ELIMINADO <a href='Fuser02.php' class='alert-link'>Ver en tienda</a></div>";
      } else {
        $mensaje = "<div class='alert alert-danger text-center' style='margin-bottom:0;>
        <div class='container-fluid'>
        <div class='alert-icon'>
        <i class='material-icons'>error_outline</i>
        </div><b>ERROR BORRANDO DATOS</div></div>";
      }
}
if ($accion == "editar" && $id != "") {
    @$addfilled = "is-filled";
    @$nombreProducto = $producto->getNombreProducto();
    @$modeloProducto = $producto->getModelo();
    @$generoProducto = $producto->getGenero();
    @$estiloProducto = $producto->getEstilo();
    @$colorProducto = $producto->getColor();
    @$tallaProducto = $producto->getTalla();
    @$precioProducto = $producto->getPrecio();
    @$stockProducto = $producto->getStockOriginal();
    @$descripProducto = $producto->getDescripcion();
    @$imgProducto = $producto->getImagen();
    $diagonal = strpos($imgProducto,"/");
    $nombreImg = substr($imgProducto,5,$diagonal);
    switch ($generoProducto) {
        case 'H':
            @$selectGen1 = "selected='true'";
            break;
        case 'M':
            @$selectGen2 = "selected='true'";
            break;
        case 'U':
            @$selectGen3 = "selected='true'";
            break;
        default:
            echo "Error: Unknown";
            break;
    }
    switch ($estiloProducto) {
        case 'Street':
            @$selectEst1 = "selected='true'";
            break;
        case 'Running':
            @$selectEst2 = "selected='true'";
            break;
        case 'Bascketball':
            @$selectEst3 = "selected='true'";
            break;
        case 'Soccer':
            @$selectEst4 = "selected='true'";
            break;
        default:
            echo @$estiloProducto;
            break;
    }
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
                        <form role="form" action="Fuser02.php?seccion=agregar_producto&accion=editar" method="post" enctype="multipart/form-data">
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txtNombreProd" value="<?php echo @$nombreProducto; ?>">
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="txtModelo" value="<?php echo @$modeloProducto; ?>" onfocusout="defocused(this)">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Seleccione un Genero dando click aquí debajo</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="selectGen">
                                    <option value="U" <?php echo @$selectGen3 ?>>Unisex</option>
                                    <option value="H" <?php echo @$selectGen1 ?>>Hombre</option>
                                    <option value="M" <?php echo @$selectGen2 ?>>Mujer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Seleccione un Estilo dando click aquí debajo</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="selectEst">
                                    <option value="Street" <?php echo @$selectEst1 ?>>Street</option>
                                    <option value="Running" <?php echo @$selectEst2 ?>>Running</option>
                                    <option value="Basketball" <?php echo @$selectEst3 ?>>Basketball</option>
                                    <option value="Soccer" <?php echo @$selectEst4 ?>>Soccer</option>
                                </select>
                            </div>
                            <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                                <label class="form-label">Color</label>
                                <input type="text" class="form-control" name="txtColor" value="<?php echo @$colorProducto; ?>">
                            </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card card-plain">
                    <div class="card-body">
                        <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                            <label class="form-label">Talla</label>
                            <input type="number" class="form-control" name="txtTalla" value="<?php echo @$tallaProducto; ?>">
                        </div>
                        <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                            <label class="form-label">Precio</label>
                            <input type="number" class="form-control" name="txtPrecio" value="<?php echo @$precioProducto; ?>">
                        </div>
                        <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                            <label class="form-label">Stock</label>
                            <input type="number" class="form-control" name="txtStock" value="<?php echo @$stockProducto; ?>">
                        </div>
                        <div class="input-group input-group-outline mb-3 <?php echo @$addfilled ?>">
                            <label class="form-label">Descripci&oacute;n</label>
                            <input type="text" class="form-control" name="txtDescrip" value="<?php echo @$descripProducto; ?>">
                        </div>
                        <div class="form-group is-empty is-fileinput">
                            <input type="file" id="inputFile4" accept="image/*" name="img">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nombre de la IMAGEN DEL PRODUCTO" name="nombreImg" onchange="previewImage();" value="<?php echo @$nombreImg; ?>">
                                <span class="input-group-btn input-group-sm">
                                    <button type="button" class="btn btn-fab btn-fab-mini">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                                <img id="preview" src="<?php echo @$imgProducto; ?>" height="50px" width="50px">
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