<?php
include_once("view/partial/headerAdministrador.php");

$page = isset($_GET[ "page" ]) ? $_GET[ "page" ] : "inicioAdmin";

switch ($page){
    case "inicioAdmin":
        include_once ("controller/InicioAdminController.php");
        $controller = new InicioAdminController();
        $controller->execute();
        break;

    case "aceptarNoticias":
        include_once("controller/AceptarNoticiasController.php");
        $controller = new AceptarNoticiasController();
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


