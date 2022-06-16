<?php
session_start();
$_SESSION["nombres"] = "";
$_SESSION["correo"] = "";
$_SESSION["apellidop"] = "";
$_SESSION["apellidom"] = "";
header("Location: index.php"); 
session_destroy();
?>