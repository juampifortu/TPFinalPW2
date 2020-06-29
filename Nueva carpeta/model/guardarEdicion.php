<?php

include_once '../helper/Database.php';
session_start();

$conexion = new Database();
$rol = $_SESSION['rol'];

if (!isset($_POST["titulo"])) {
    header("Location: ../indexInterno.php");
    exit();
}

$titulo = $_POST['titulo'];
$diario= $_POST['id'];

if ($rol == 1) {
    $estado = 1;
} else {
    $estado = 0;
}

$sql = "INSERT INTO edicion(descripcion,estado,id_diario) VALUES ('$titulo','$estado','$diario')";
$sqlconsul = "SELECT ed.descripcion FROM edicion AS ed WHERE ed.descripcion='$titulo';";


if ($conexion->query($sqlconsul)) {
    echo "<p>Edicion existente</p>";
    echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
} else {
    $conexion->query($sql);
    if ($conexion->query($sqlconsul)) {
        echo "<p>Se cargó la edición correctamente</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    } else {
        echo "<p>Error</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    }


}
