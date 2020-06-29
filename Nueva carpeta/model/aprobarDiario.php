<?php
include_once '../helper/Database.php';
session_start();
$conexion = new Database();

$id=$_POST['id'];

$sql="UPDATE diario SET estado=1 WHERE id_diario='$id';";
$sqlconsul="SELECT * FROM diario WHERE id_diario='$id' AND estado=1";
$conexion->query($sql);

if($conexion->query($sqlconsul)){
    echo "Diario aprobado";
    echo "<a href='../indexInterno.php?page=validarDiarios'>Volver</a>";
}else{
    echo "Error";
    echo "<a href='../indexInterno.php?page=validarDiarios'>Volver</a>";
}

