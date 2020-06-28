<?php
include_once("view/partial/headerContenidista.php");

$page = isset($_GET[ "page" ]) ? $_GET[ "page" ] : "inicioContenidista";

switch ($page){
    case "inicioContenidista":
        include_once ("controller/ContenidistaController.php");
        $controller = new ContenidistaController();
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


