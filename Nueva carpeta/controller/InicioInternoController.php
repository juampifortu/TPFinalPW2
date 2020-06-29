<?php


class InicioInternoController
{

    public function __construct()
    {
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
                include_once("view/inicioInternoViewSuscriptor.php");
            break;
        }

    }
}