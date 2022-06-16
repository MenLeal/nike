<?php
include 'propelinit.php';
$productos = ProductoQuery::create()->orderByStockActual('desc')->find();
?>
<div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Lo más vendido</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <a class="font-weight-bold ms-1" href="Fuser02.php?seccion=listar_producto">Ver todos</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Modelo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Compras</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stock</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($productos as $producto) {
                      $procentaje = $producto->getStockActual()/$producto->getStockOriginal();
                      $procentaje*=100;
                      $procentaje=round($procentaje, 0, PHP_ROUND_HALF_UP);
                      if($procentaje%10<5 && $procentaje%10!=0 || $procentaje%10>5 ){
                        switch($procentaje%10){
                          case 1:
                          case 6:
                            $procentaje+=4;
                          break;
                          case 2:
                          case 7:
                            $procentaje+=3;
                            break;
                          case 3:
                          case 8:
                            $procentaje+=2;
                            break;
                          case 4:
                            case 9:
                            $procentaje+=1;
                            break;
                      }                      
                    } 
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $producto->getImagen(); ?>" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $producto->getNombreProducto();?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                      <span class="text-xs font-weight-bold"><?php echo $producto->getModelo()?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"><?php echo $producto->getStockOriginal()-$producto->getStockActual()?> </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"><?php echo $procentaje?>%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-<?php echo $procentaje?>" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
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