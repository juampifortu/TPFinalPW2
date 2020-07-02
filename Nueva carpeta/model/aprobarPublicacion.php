<?php
include_once '../helper/Database.php';
session_start();
$conexion = new Database();

$id=$_GET['id'];
$tipo=$_GET['tipo'];
$eliminar=$_GET['el'];

if($eliminar==0){
    switch ($tipo){
        case 1:
            $sql="UPDATE diario SET estado=1 WHERE id_diario='$id';";
            break;

        case 2:
            $sql="UPDATE edicion SET estado=1 WHERE id_edicion='$id';";
            break;

        case 3:
            $sql="UPDATE seccion SET estado=1 WHERE id_seccion='$id';";
            break;

        case 4:
            $sql="UPDATE noticia SET estado=1 WHERE id_noticia='$id';";
            break;
    }
}else if($eliminar==1) {
    switch ($tipo) {
        case 1:
            $sql = "DELETE FROM diario WHERE id_diario='$id';";
            break;

        case 2:
            $sql = "DELETE FROM edicion  WHERE id_edicion='$id';";
            break;

        case 3:
            $sql = "DELETE FROM seccion  WHERE id_seccion='$id';";
            break;

        case 4:
            $sql = "DELETE FROM noticia WHERE id_noticia='$id';";
            break;
    }
}


$conexion->execute($sql);
header("location:../indexInterno.php?page=validarPublicacion");