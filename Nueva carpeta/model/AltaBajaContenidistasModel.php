<?php
include_once ('helper/Database.php');

class AltaBajaContenidistasModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion= new Database();
    }

    public function obtenerUsuarios(){
        $usuarios = $this->conexion->query("select us.id_usuario, us.nombre,us.id_grupo , gr.nombre_grupo 
                                                from usuario as us 
                                                join grupo as gr where
                                                gr.id_grupo=us.id_grupo and 
                                                us.id_grupo!=1");
        return $usuarios;
    }

}