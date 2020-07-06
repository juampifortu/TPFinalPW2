<?php

class NoticiaController{

    public function __construct()
    {
        include_once ("model/NoticiaModel.php");
    }

    public function execute($id){
        $modelo= new NoticiaModel();
        $noticia=$modelo->mostrarNoticia($id);
        include_once ("view/NoticiaView.php");


    }

}