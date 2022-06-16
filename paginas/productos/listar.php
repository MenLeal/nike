<?php
$productos = ProductoQuery::create()->find();
?>
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Productos</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Producto</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Propiedades</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripcion</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($productos as $producto) {
                      if($producto->getStockActual()==0){
                        @$mensaje="danger";
                      }else{
                        if($producto->getStockActual()<10){
                          @$mensaje="warning";
                        }
                        else{
                          @$mensaje="success";
                        }
                      }
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $producto->getImagen(); ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $producto->getNombreProducto();?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $producto->getModelo();?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $producto->getTalla();?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $producto->getEstilo();?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-<?php echo $mensaje?>">Disponible {<?php echo $producto->getStockActual();?>}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?php echo $producto->getDescripcion() ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <a href="Fuser02.php?seccion=agregar_producto&accion=editar&id=<?php echo $producto->getIdProducto()?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit product">
                          Editar
                        </a>
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete product">
                          &nbsp; Eliminar
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>