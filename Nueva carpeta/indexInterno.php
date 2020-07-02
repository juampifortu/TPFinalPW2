<?php
include_once("view/partial/headerInterno.php");
session_start();

$rol=$_SESSION['rol'];

$page = isset($_GET[ "page" ]) ? $_GET[ "page" ] : "inicioInterno";

switch ($page){
    case "inicioInterno":
        include_once ("controller/InicioInternoController.php");
        $controller = new InicioInternoController();
        $controller->execute($rol);
        break;

    case "agregarNoticias":
        include_once("controller/AgregarController.php");
        $controller = new AgregarController();
        $controller->executeNoticias();
        break;

    case "validarPublicacion":
        include_once("controller/ValidarController.php");
        $controller = new ValidarController();
        $controller->execute();
        break;


    case "agregarPublicacion":
        include_once("controller/AgregarController.php");
        $controller = new AgregarController();
        $controller->executePublicaciones();
        break;

    case "abmContenidistas":
        include_once ("controller/AltaBajaContenidistasController.php");
        $controller= new AltaBajaContenidistasController();
        $controller->execute();
        break;
}

//include_once("view/partial/footer.php");

?>


