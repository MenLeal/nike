<?php
session_start();
include_once 'propelinit.php';
$usr = $_POST["txtEmail"];
$pas = $_POST["txtPassword"];

$usuario = UsuarioQuery::create()->filterByCorreo($usr)->findOne();

if ($usuario != "") {
    if ($usuario->getContrasena() == $pas) {
        $_SESSION["id"] = $usuario->getIdUsuario();
        $_SESSION["tipo"] = $usuario->getTipo();
        $_SESSION["correo"] = $usuario->getCorreo();
        $_SESSION["nombres"] = $usuario->getNombres();
        $_SESSION["apellidop"] = $usuario->getApellidoPaterno();
        $_SESSION["apellidom"] = $usuario->getApellidoMaterno();
        if ($usuario->getTipo() == "Admin") {
            header("Location: Fuser02.php");
        } else {
            header("Location: index.php");
        }
    } else {
        header("Location: login.php?error=2");
    }
} else {
    header("Location: login.php?error=1");
}
