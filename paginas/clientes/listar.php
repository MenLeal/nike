<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Usuarios</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contacto</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipo</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($usuarios as $usuario) {
                      if($usuario->getTipo()=="Cliente"){
                        $pill = "secondary";
                      }
                      else if($usuario->getTipo()=="Admin"){
                        $pill = "primary";
                      }
                      else if($usuario->getTipo()=="Trans"){
                        $pill = "success";
                      }
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $usuario->getNombres()?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $usuario->getApellidoPaterno()?> <?php echo $usuario->getApellidoMaterno()?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $usuario->getTelefono()?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $usuario->getCorreo()?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-<?php echo @$pill?>"><?php echo $usuario->getTipo()?></span>
                      </td>
                      <td class="align-middle text-center text-sm"">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Editar
                        </a>
                        <a href="usuario.php?accion=eliminar&id=<?php echo $usuario->getIdUsuario()?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete product">
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