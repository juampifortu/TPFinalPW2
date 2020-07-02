<?php
include_once '../helper/Database.php';
session_start();
$conexion = new Database();

$id=$_GET['id'];
$id_grupo=$_GET['grupo'];
$eliminar=$_GET['el'];

$sqlcon="UPDATE usuario SET id_grupo=2 WHERE id_usuario='$id' ";
$sqlsus="UPDATE usuario SET id_grupo=3 WHERE id_usuario='$id'";
$sqlelim="DELETE FROM usuario WHERE id_usuario='$id'";

if($eliminar==0){
    if($id_grupo==3){
        $conexion->execute($sqlcon);
        header("location: ../indexInterno.php?page=abmContenidistas");
    }elseif ($id_grupo==2){
        $conexion->execute($sqlsus);
        header("location: ../indexInterno.php?page=abmContenidistas");
    }
}elseif($eliminar==1){
    $conexion->execute($sqlelim);
    header("location: ../indexInterno.php?page=abmContenidistas");
}



