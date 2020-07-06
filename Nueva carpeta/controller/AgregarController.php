<?php

class AgregarController
{

    public function __construct()
    {
        include_once("model/AgregarModel.php");
    }

    public function executeNoticias()
    {
        $modelo = new AgregarModel();
        $diarios = $modelo->obtenerDiariosExistentes();
        $ediciones = $modelo->obtenerEdicionesExistentes();
        $secciones = $modelo->obtenerSeccionesExistentes();
        $opciones = $modelo->obtenerOpciones();
        include_once("view/agregarNoticiasView.php");
    }

    public function executePublicaciones()
    {
        $modelo = new AgregarModel();
        $diarios = $modelo->obtenerDiariosExistentes();
        $ediciones = $modelo->obtenerEdicionesExistentes();
        include_once("view/agregarPublicacionView.php");
    }


}