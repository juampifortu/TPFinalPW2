<?php
require 'conectarDatabase.php';


if(!isset($_POST["usuario"]) || !isset($_POST["clave"])) {
    header("Location: ../index.php");
    exit();
}
    $sql = "INSERT INTO usuario(id_usuario,nombre,mail,contraseña,id_grupo) VALUES (:id_usuario,:nombre,:mail,:contraseña,:id_grupo)";
    $stmt=$conne->prepare($sql);
    $stmt->bindParam(':id_usuario',$_POST['id_usuario']);
    $stmt->bindParam(':nombre',$_POST['usuario']);
    $stmt->bindParam(':mail',$_POST['mail']);
    $password=password_hash($_POST['clave'],PASSWORD_BCRYPT);
    $stmt->bindParam(':contraseña',$password);
    $stmt->bindParam(':id_grupo',$_POST['id']);

    header("Location: ../index.php?page=iniciarSesion");
    exit();



