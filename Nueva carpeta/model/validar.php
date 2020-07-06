<?php
include_once '../helper/Database.php';
$conexion = new Database();

if(!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
    header("Location: ../index.php");
    exit();
}

$usuario= $_POST['usuario'];
$clave = $_POST['clave'];
$clave = md5($clave);

$sql = "SELECT * FROM usuario WHERE nombre='$usuario' AND contrasena='$clave';";
$resul = $conexion->query($sql);

$arrayusuario = $resul[0];
$rol= $arrayusuario['id_grupo'];



if(sizeof($resul) > 0){
    session_start();
    $_SESSION["usuario"]= $usuario;
    $_SESSION["rol"]= $rol;

    header("location: ../indexInterno.php?page=inicioInterno");
}else{
   
    echo "<p>login incorrecto</p>";
    echo "<a href='../index?page=iniciarSesion'>Reintentar</a>";
}
