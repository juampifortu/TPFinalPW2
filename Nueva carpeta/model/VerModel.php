<?php
include_once ('helper/Database.php');

class VerModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion= new Database();
    }

    public function obtenerNoticias(){
        $noticias= $this->conexion->query("SELECT * FROM noticia WHERE estado=1");
        return $noticias;
    }

}