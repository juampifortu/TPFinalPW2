<?php
include_once ('helper/Database.php');

class AgregarModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion= new Database();
    }

    public function obtenerNoticiasExistentes(){
        $noticias = $this->conexion->query("SELECT * FROM noticia WHERE estado=1");
        return $noticias;
    }
    public function obtenerSeccionesExistentes(){
        $secciones = $this->conexion->query("SELECT * FROM seccion WHERE estado=1");
        return $secciones;
    }
    public function obtenerEdicionesExistentes(){
        $ediciones = $this->conexion->query("SELECT * FROM edicion WHERE estado=1");
        return $ediciones;
    }
    public function obtenerDiariosExistentes(){
        $diarios = $this->conexion->query("SELECT * FROM diario WHERE estado=1");
        return $diarios;
    }

    public function __destruct()
    {
        $this->conexion->close();
    }

}