<?php
include_once '../helper/Database.php';
session_start();

$conexion = new Database();
$rol=$_SESSION['rol'];

if(!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
    header("Location: ../index.php");
    exit();
}
$nombre = $_POST['usuario'];
$mail = $_POST['mail'];
$password = md5($_POST['clave']);

if($rol==1){
    $sql = "INSERT INTO usuario(nombre, mail, contraseña, id_grupo) VALUES ('$nombre', '$mail', '$password', 2);";
    $sqlconsul = "SELECT us.nombre FROM usuario AS us WHERE us.nombre='$nombre';";


    if($conexion->query($sqlconsul)){
        echo "<p>El usuario ya existe</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>volver</a>";
    }else{
        $conexion->query($sql);

        if($conexion->query($sqlconsul)){
            echo "<p>Registro exitoso</p>";
            echo "<a href='../indexInterno.php?page=inicioInterno'>Inicio</a>";
        }else{
            echo "Error";
            echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";

        }
        $conexion->close();
    }
}else{
    $sql = "INSERT INTO usuario(nombre, mail, contraseña, id_grupo) VALUES ('$nombre', '$mail', '$password', 3);";
    $sqlconsul = "SELECT us.nombre FROM usuario AS us WHERE us.nombre='$nombre';";


    if($conexion->query($sqlconsul)){
        echo "<p>El usuario ya existe</p>";
        echo "<a href='../index.php?page=registrarse'>volver</a>";
    }else{
        $conexion->query($sql);

        if($conexion->query($sqlconsul)){
            echo "<p>Registro exitoso</p>";
            echo "<a href='../index.php?page=inicio'>Inicio</a>";
        }else{
            echo "Error";
            echo "<a href='../index.php?page=registrarse'>Volver</a>";

        }
        $conexion->close();
    }
}




