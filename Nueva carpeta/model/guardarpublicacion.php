<?php

include_once '../helper/Database.php';
session_start();

$conexion = new Database();
$rol = $_SESSION['rol'];

$titulo = $_POST['titulo'];
$tipo = $_POST['tipo'];
$id_diario= $_POST['id_diario'];
$id_edicion= $_POST['id_edicion'];
$id_seccion= $_POST['id_seccion'];
$cuerpo= $_POST['cuerpo'];

$imagen=$_FILES['imagen']['name'];
$imagentmp=$_FILES['imagen']['tmp_name'];
$ruta= './images/' . $imagen;
move_uploaded_file($imagentmp,$ruta);

if($rol == 1){
    $estado = 1;
}else{
    $estado = 0;
}

switch ($tipo) {
    case 1:
        $sql = "INSERT INTO diario(nombre,estado, id_tipo) VALUES ('$titulo','$estado','$tipo')";
        $sqlconsul = "SELECT dia.nombre FROM diario AS dia WHERE dia.nombre='$titulo';";
        break;

    case 2:
        $sql = "INSERT INTO edicion(descripcion,estado,id_diario, id_tipo) VALUES ('$titulo','$estado','$id_diario','$tipo')";
        $sqlconsul = "SELECT ed.descripcion FROM edicion AS ed WHERE ed.descripcion='$titulo';";
        break;

    case 3:
        $sql = "INSERT INTO seccion(nombre,estado, id_edicion, id_tipo) VALUES ('$titulo','$estado','$id_edicion', '$tipo')";
        $sqlconsul = "SELECT se.nombre FROM seccion AS se WHERE se.nombre='$titulo';";
        break;

    case 4:
        $sql = "INSERT INTO noticia(titulo,cuerpo,url_imagen,estado,id_seccion,id_edicion,id_diario) VALUES ('$titulo','$cuerpo','$ruta','$estado','$id_seccion','$id_edicion','$id_diario')";
        $sqlconsul = "SELECT noti.titulo FROM noticia AS noti WHERE noti.titulo='$titulo';";

}


if($conexion->query($sqlconsul)){
    echo "<p>Título existente</p>";
    echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
}else{
    $conexion->execute($sql);
    if($conexion->query($sqlconsul)){
        header("location: ../indexInterno.php?page=inicioInterno");
    }else{
        echo "<p>Error</p>";
        echo "<a href='../indexInterno.php?page=inicioInterno'>Volver</a>";
    }
}