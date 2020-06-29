<?php
class AgregarController{

    public function __construct(){
        include_once ("model/AgregarModel.php");
    }

    public function executeNoticias(){
        $modelo= new AgregarModel();
        $diarios = $modelo->obtenerDiariosExistentes();
        $ediciones = $modelo->obtenerEdicionesExistentes();
        $secciones = $modelo->obtenerSeccionesExistentes();
        include_once("view/agregarNoticiasView.php");
    }

    public function executeDiarios(){
        $modelo= new AgregarModel();
        $diarios = $modelo->obtenerDiariosExistentes();
        include_once("view/agregarDiarioView.php");
    }

    public function executeEdiciones(){
        $modelo= new AgregarModel();
        $diarios = $modelo->obtenerDiariosExistentes();
        include_once("view/agregarEdicionView.php");
    }

    public function executeSecciones(){
        $modelo= new AgregarModel();
        $ediciones = $modelo->obtenerEdicionesExistentes();
        include_once("view/agregarSeccionView.php");
    }


}