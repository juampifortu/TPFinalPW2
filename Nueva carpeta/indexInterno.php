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

    case "validarNoticias":
        include_once("controller/ValidarController.php");
        $controller = new ValidarController();
        $controller->executenoticias();
        break;

    case "validarEdiciones":
        include_once("controller/ValidarController.php");
        $controller = new ValidarController();
        $controller->executeediciones();
        break;

    case "validarSecciones":
        include_once("controller/ValidarController.php");
        $controller = new ValidarController();
        $controller->executesecciones();
        break;

    case "validarDiarios":
        include_once("controller/ValidarController.php");
        $controller = new ValidarController();
        $controller->executediarios();
        break;

    case "agregarSeccion":
        include_once("controller/AgregarController.php");
        $controller = new AgregarController();
        $controller->executeSecciones();
        break;

    case "agregarEdicion":
        include_once("controller/AgregarController.php");
        $controller = new AgregarController();
        $controller->executeEdiciones();
        break;

    case "agregarDiario":
        include_once("controller/AgregarController.php");
        $controller = new AgregarController();
        $controller->executeDiarios();
        break;
}

//include_once("view/partial/footer.php");

?>


