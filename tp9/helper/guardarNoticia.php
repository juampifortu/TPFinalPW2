<?php
include_once 'conectarDatabase.php';


if(!isset($_POST["titulo"]) || !isset($_POST["cuerpo"])) {
    header("Location: ../indexContenidista.php");
    exit();
}

$titulo=$_POST['titulo'];
$cuerpo=$_POST['cuerpo'];

$sql = "INSERT INTO noticia(titulo,cuerpo) VALUES ('$titulo','$cuerpo')";
$resultado=mysqli_query($conne,$sql);

if(!$resultado){
    echo("Error al agregar noticia");
}

header("Location: ../indexContenidista.php?page=inicioInterno");
exit();



