<?php
include_once("view/partial/headerInterno.php");

$page = isset($_GET[ "page" ]) ? $_GET[ "page" ] : "inicioInterno";

switch ($page){
    case "inicioInterno":
        include_once ("controller/InicioInternoController.php");
        $controller = new InicioInternoController();
        $controller->execute();
        break;

    case "agregarNoticias":
        include_once("controller/AgregarNoticiasController.php");
        $controller = new AgregarNoticiasController();
        $controller->execute();
        break;

   /* case "iniciarSesion":
        include_once("controller/IniciarSesionController.php");
        $controller = new IniciarSesionController();
        $controller->execute();
        break;

    case "contacto":
    default:
        include_once("controller/ContactoController.php");
        $controller = new ContactoController();
        $controller->execute();
        break;*/
}

//include_once("view/partial/footer.php");

?>


