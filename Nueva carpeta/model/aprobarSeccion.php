<?php
include_once '../helper/Database.php';
session_start();
$conexion = new Database();

$id=$_POST['id'];

$sql="UPDATE seccion SET estado=1 WHERE id_seccion='$id';";
$sqlconsul="SELECT * FROM seccion WHERE id_seccion='$id' AND estado=1";
$conexion->query($sql);

if($conexion->query($sqlconsul)){
    echo "Sección aprobada";
    echo "<a href='../indexInterno.php?page=validarSecciones'>Volver</a>";
}else{
    echo "Error";
    echo "<a href='../indexInterno.php?page=validarSecciones'>Volver</a>";
}

