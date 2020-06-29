<?php
//include_once ('../helper/Database.php');
include_once ('helper/Database.php');

class validarModel{

    private $conexion;

    public function __construct()
    {
        $this->conexion= new Database();
    }

    public function obtenerNoticiasPendientes(){
        $noticias = $this->conexion->query("SELECT * FROM noticia WHERE estado=0");
        return $noticias;
    }
    public function obtenerSeccionesPendientes(){
        $secciones = $this->conexion->query("SELECT * FROM seccion WHERE estado=0");
        return $secciones;
    }
    public function obtenerEdicionesPendientes(){
        $ediciones = $this->conexion->query("SELECT * FROM edicion WHERE estado=0");
        return $ediciones;
    }
    public function obtenerDiariosPendientes(){
        $diarios = $this->conexion->query("SELECT * FROM diario WHERE estado=0");
        return $diarios;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }

}