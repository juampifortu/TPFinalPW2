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
$edicion= $_POST['id'];

if ($rol == 1) {
    $estado = 1;
} else {
    $estado = 0;
}

$sql = "INSERT INTO seccion(nombre,estado, id_edicion) VALUES ('$titulo','$estado','$edicion')";
$sqlconsul = "SELECT se.nombre FROM seccion AS se WHERE se.nombre='$titulo';";


if ($conexion->query($sqlconsul)) {
    echo "<p>Sección existente</p>";
    echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
} else {
    $conexion->query($sql);
    if ($conexion->query($sqlconsul)) {
        echo "<p>Se cargó la sección correctamente</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    } else {
        echo "<p>Error</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    }


}
