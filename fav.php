<?php
include_once "propelinit.php";
$clave = $_GET['id'];
$productos = ProductoQuery::create()->findByIdProducto($clave);

$favoritos = FavoritosQuery::create()->find();


$accion=@$_GET["accion"];
$idu = 0;
$idp = 0;
$click = 0;

if($accion=="agregar")
{
    echo "agregado";
    $idu = $_POST["idu"];
    $idp = $_POST["idp"];
    $click = $_POST["click"];
    
    $fav = new Favoritos();
    $fav->setIdUsuario($_POST["idu"]);
    $fav->setIdProducto($_POST["idp"]);
    $fav->setIsClicked($_POST["click"]);
    
    
    $mensaje ="";

    if($fav->validate())
    {
        $fav->save();
        $mensaje="Se guardó";
        $message = "siu";
        echo "<script type='text/javascript'>alert('$message');</script>";
        #sleep(3);
        header("Location: comprar.php?id=".$idp.'');
    }
    else{
        foreach($fav->getValidationFailures() as $error){
            $mensaje.="<br>".$error->getMessage();
        }
    }
    
}
?>

<!--

<div class="form-check form-switch text-center me-4">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">Fav </label>
</div>


<button type="button" class="btn btn-outline-light">Light</button>
-->

<!-- Button trigger modal 
<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">
  <img src="img/heart.png" width="35" height="30" style="vertical-align: middle">
</button> -->

<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Se ha agregado a Favoritos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Listo</button>
      </div>
    </div>
  </div>
</div>-->

<form action="fav.php?accion=agregar" method="POST">
    <input type="hidden" value="1" id="idu" name="idu" placeholder="Pon tu nombre"><br>

    <input type="hidden" value="<?php echo $producto->getIdProducto(); ?>" id="idp" name="idp"><br>

    <input type="hidden" value="1" id="IsClicked" name="click"><br>

    <button type="submit" class="btn btn-outline-light">
        <img src="img/heart.png" width="35" height="30" style="vertical-align: middle">
    </button>
</form>