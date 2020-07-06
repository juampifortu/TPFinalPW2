<?php
include_once('helper/Database.php');

class AgregarModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Database();
    }

    public function obtenerOpciones()
    {
        $opciones = $this->conexion->query("
                SELECT diario.id_diario, edicion.id_edicion, seccion.id_seccion, diario.nombre as diario_nombre, descripcion, seccion.nombre as seccion_nombre
                FROM diario
                JOIN edicion ON edicion.id_diario = diario.id_diario
                JOIN seccion ON seccion.id_edicion = edicion.id_edicion    
        ");
        return $opciones;
    }

    public function obtenerNoticiasExistentes()
    {
        $noticias = $this->conexion->query("SELECT * FROM noticia WHERE estado=1");
        return $noticias;
    }

    public function obtenerSeccionesExistentes()
    {
        $secciones = $this->conexion->query("SELECT * FROM seccion WHERE estado=1");
        return $secciones;
    }

    public function obtenerEdicionesExistentes()
    {
        $ediciones = $this->conexion->query("SELECT * FROM edicion WHERE estado=1");
        return $ediciones;
    }

    public function obtenerDiariosExistentes()
    {
        $diarios = $this->conexion->query("SELECT * FROM diario WHERE estado=1");
        return $diarios;
    }

    public function obtenerEdicionesSegunDiario()
    {
        //??????????????????????????????????????????????????????
    }

    public function __destruct()
    {
        $this->conexion->close();
    }

}