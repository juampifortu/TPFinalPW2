<?php
include_once 'conectarDatabase.php';


if(!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
    header("Location: ../index.php");
    exit();
}

$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['usuario'];
$email=$_POST['mail'];
$clave=md5($_POST['clave']);
$id_grupo=$_POST['id'];

    $sql = "INSERT INTO usuario(id_usuario,nombre,mail,contraseña,id_grupo) VALUES ('$id_usuario','$nombre','$email','$clave','$id_grupo')";
    $resultado=mysqli_query($conne,$sql);


    if(!$resultado){
        echo("Error al registrarse");
    }

    header("Location: ../index.php?page=iniciarSesion");
    exit();



