<?php
//include_once 'guardarUsuario.php';
include_once 'Database.php';
session_start();
if(isset($_SESSION['id_grupo'])){
    switch($_SESSION['id_grupo']){
            case 1:
                header("Location: ../indexAdmin.php?page=inicioAdmin");
                break;
            case 2:
                header("Location: ../indexLector.php?page=inicioLector");
                break;
            case 3:
                header("Location: ../indexSuscriptor?page=inicioSuscriptor");
                break;
            case 4:
                header("Location: ../indexContenidista?page=inicioContenidista");
                break;
            default:
                header("Location: ../index.php");
                break;
}
}

if(isset($_POST['usuario']) && isset($_POST['clave'])){
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    $db=new Database();
    $query=$db->connect()->prepare('SELECT * FROM usuario WHERE nombre= :usuario AND contraseña= :clave');

    $query->execute(['usuario' => $usuario,'clave'=>$clave]);

    $row=$query->fetch(PDO::FETCH_NUM);
    if($row==true){
    $id_grupo=$row[4];
    $_SESSION['id_grupo']=$id_grupo;
        switch($_SESSION['id_grupo']){
            case 1:
                header("Location: ../indexAdmin.php?page=inicioAdmin");
                break;
            case 2:
                header("Location: ../indexLector.php?page=inicioLector");
                break;
            case 3:
                header("Location: ../indexSuscriptor.php?page=inicioSuscriptor");
                break;
            case 4:
                header("Location: ../indexContenidista.php?page=inicioContenidista");
                break;
            default:
                header("Location: ../index.php");
                break;
        }
    }else{
    echo("El usuario o contraseña son incorrectas");
    }
}
/*$link = new mysqli("localhost:3306", "root", "", "tpfinal");


if (mysqli_connect_errno()) {
    printf("Fallo conexion: %s\n", mysqli_connect_error());
    exit();
}

if (mysqli_connect_errno()) {
    printf("Fallo conexion: %s\n", mysqli_connect_error());
    exit();
}

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];


if ($stmt = mysqli_prepare($link, "SELECT * FROM usuario WHERE nombre = ? and contraseña = ?")) {


    mysqli_stmt_bind_param($stmt, "ss", $usuario, $clave);


    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_fetch($stmt)) {
        if($id_grupo==1){
            header("Location: ../indexAdmin.php?page=inicioAdmin");
        }
        switch($id_grupo){
            case 1:
                header("Location: ../indexAdmin.php?page=inicioAdmin");
                break;
            case 2:
                header("Location: ../indexLector.php?page=inicioLector");
                break;
            case 3:
                header("Location: ../indexSuscriptor?page=inicioSuscriptor");
                break;
            case 4:
                header("Location: ../indexContenidista?page=inicioContenidista");
                break;
            case 5:
                header("Location: ../index.php");
        }

    } else {
        echo "Login Incorrecto";
    };


    mysqli_stmt_close($stmt);
}
//

mysqli_close($link);
*/
?>
