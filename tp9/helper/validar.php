<?php
$link = new mysqli("localhost:3306", "root", "", "tpfinal");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Fallo conexion: %s\n", mysqli_connect_error());
    exit();
}

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Fallo conexion: %s\n", mysqli_connect_error());
    exit();
}

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

/* crear una sentencia preparada */
if ($stmt = mysqli_prepare($link, "SELECT * FROM usuario WHERE nombre = ? and contraseña = ?")) {

    /* ligar parámetros para marcadores */
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $clave);

    /* ejecutar la consulta */
    mysqli_stmt_execute($stmt);
    /* obtener valor */
    if(mysqli_stmt_fetch($stmt)) {
        header("Location: ../indexInterno.php?page=inicioInterno");

    } else {
        echo "Login Incorrecto";
    };

    /* cerrar sentencia */
    mysqli_stmt_close($stmt);
}
//
/* cerrar conexión */
mysqli_close($link);
?>
