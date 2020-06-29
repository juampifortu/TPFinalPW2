<?php
include_once '../helper/Database.php';
session_start();

$conexion= new Database();
$rol=$_SESSION['rol'];

if(!isset($_POST["titulo"]) || !isset($_POST["cuerpo"])) {
    header("Location: ../indexInterno.php");
    exit();
}

$titulo=$_POST['titulo'];
$cuerpo=$_POST['cuerpo'];
$diario=$_POST['id_diario'];
$seccion=$_POST['id_seccion'];
$edicion=$_POST['id_edicion'];

if($rol==1){
    $estado=1;
}else{
    $estado=0;
}

$sql = "INSERT INTO noticia(titulo,cuerpo,estado,id_seccion,id_edicion,id_diario) 
        VALUES ('$titulo','$cuerpo','$estado','$seccion','$edicion','$diario')";
$sqlconsul = "SELECT noti.titulo FROM noticia AS noti WHERE noti.titulo='$titulo';";


if($conexion->query($sqlconsul)){
    echo "<p>Título existente</p>";
    echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
}else{
    $conexion->query($sql);
    if($conexion->query($sqlconsul)){
        echo "<p>Se cargó la noticia correctamente</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    }else{
        echo "<p>Error</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    }


}

