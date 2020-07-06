<?php
include_once('helper/Database.php');

class NoticiaModel{
    private $conexion;

    public function __construct()
    {
        $this->conexion= new Database();
    }

    public function mostrarNoticia($id){
        $noticia= $this->conexion->query("SELECT * FROM noticia WHERE id_noticia=$id");
        return $noticia;
    }
}

