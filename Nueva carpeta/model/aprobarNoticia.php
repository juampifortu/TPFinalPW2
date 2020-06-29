<?php
include_once '../helper/Database.php';
session_start();
$conexion = new Database();

$id=$_POST['id'];

$sql="UPDATE noticia SET estado=1 WHERE id_noticia='$id';";
$sqlconsul="SELECT * FROM noticia WHERE id_noticia='$id' AND estado=1";
$conexion->query($sql);

if($conexion->query($sqlconsul)){
    echo "Noticia aprobada";
    echo "<a href='../indexInterno.php?page=validarNoticias'>Volver</a>";
}else{
    echo "Error";
    echo "<a href='../indexInterno.php?page=validarNoticias'>Volver</a>";
}

