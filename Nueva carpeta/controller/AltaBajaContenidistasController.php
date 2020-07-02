<?php


class AltaBajaContenidistasController
{
    public function __construct()
    {
        include_once "model/AltaBajaContenidistasModel.php";
    }

    public function execute(){
        $modelo= new AltaBajaContenidistasModel();
        $usuarios = $modelo->obtenerUsuarios();
        include_once ("view/altabajacontenidistasview.php");
    }

}