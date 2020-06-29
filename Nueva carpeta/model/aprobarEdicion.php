<?php
include_once '../helper/Database.php';
session_start();
$conexion = new Database();

$id=$_POST['id'];

$sql="UPDATE edicion SET estado=1 WHERE id_edicion='$id';";
$sqlconsul="SELECT * FROM edicion WHERE id_edicion='$id' AND estado=1";
$conexion->query($sql);

if($conexion->query($sqlconsul)){
    echo "Edición aprobada";
    echo "<a href='../indexInterno.php?page=validarEdiciones'>Volver</a>";
}else{
    echo "Error";
    echo "<a href='../indexInterno.php?page=validarEdiciones'>Volver</a>";
}

