<?php
class ValidarController{

    public function __construct(){
        include_once("model/validarModel.php");
    }

    public function executenoticias(){
        $modelo= new validarModel();
        $noticias = $modelo->obtenerNoticiasPendientes();
        include_once("view/ValidarNoticiasView.php");
    }

    public function executesecciones(){
        $modelo= new validarModel();
        $secciones = $modelo->obtenerSeccionesPendientes();
        include_once("view/ValidarSeccionesView.php");
    }

    public function executeediciones(){
        $modelo= new validarModel();
        $ediciones = $modelo->obtenerEdicionesPendientes();
        include_once("view/ValidarEdicionesView.php");
    }

    public function executediarios(){
        $modelo= new validarModel();
        $diarios = $modelo->obtenerDiariosPendientes();
        include_once("view/ValidarDiariosView.php");
    }


}