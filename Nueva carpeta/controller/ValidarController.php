<?php
class ValidarController{

    public function __construct(){
        include_once("model/validarModel.php");
    }

    public function execute(){
        $modelo= new validarModel();
        $noticias = $modelo->obtenerNoticiasPendientes();
        $secciones = $modelo->obtenerSeccionesPendientes();
        $ediciones = $modelo->obtenerEdicionesPendientes();
        $diarios = $modelo->obtenerDiariosPendientes();
        include_once("view/validarView.php");
    }

}