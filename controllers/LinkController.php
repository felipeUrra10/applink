<?php

namespace controllers;

use models\LinkModel as LinkModel;;

require_once("../models/LinkModel.php");

class LinkController{
    public $nombre;
    public $link;

    public function __construct()
    {
        $this->nombre = $_POST['nombre'];
        $this->link = $_POST['link'];
    }

    public function crear(){
        session_start();
        if($this->nombre=="" || $this->link==""){
            $_SESSION['error']="ERROR, Completa los campos";
            header("Location:../views/nuevolink.php");
            return;
        }
        $model = new LinkModel();
        $user = $_SESSION['usuario'];
        $data = ['nombre'=>$this->nombre,'link'=>$this->link,'email'=>$user['email']];   
        $count = $model->insertarLink($data);
        
        if($count==1){
            $_SESSION['respuesta']="Link agregado !!";
        }else{
            $_SESSION['error']="Hubo un problema en la base de datos";
        }
        header("Location:../views/nuevolink.php");
    }
}

$obj = new LinkController();
$obj->crear();