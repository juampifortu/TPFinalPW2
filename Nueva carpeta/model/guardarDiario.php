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

if ($rol == 1) {
    $estado = 1;
} else {
    $estado = 0;
}

$sql = "INSERT INTO diario(nombre,estado) VALUES ('$titulo','$estado')";
$sqlconsul = "SELECT dia.nombre FROM diario AS dia WHERE dia.nombre='$titulo';";


if ($conexion->query($sqlconsul)) {
    echo "<p>Diario existente</p>";
    echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
} else {
    $conexion->query($sql);
    if ($conexion->query($sqlconsul)) {
        echo "<p>Se cargó el diario correctamente</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    } else {
        echo "<p>Error</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    }


}
