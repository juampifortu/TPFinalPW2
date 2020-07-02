<?php


class InicioInternoController
{

    public function __construct()
    {
        include_once "model/VerModel.php";
    }

    public function execute($rol)
    {
        switch ($rol){
            case 1:
                include_once("view/inicioInternoViewAdmin.php");
            break;
            case 2:
                include_once("view/inicioInternoViewConten.php");
            break;
            case 3:
                $modelo= new VerModel();
                $noticias= $modelo->obtenerNoticias();
                include_once("view/inicioInternoViewSuscriptor.php");
            break;
        }

    }
}