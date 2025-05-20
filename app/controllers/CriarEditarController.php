<?php
require_once 'app/models/AnimalModel.php';
require_once 'app/models/ArrecadacaoModel.php';
require_once 'app/models/AdmModel.php';
require_once 'app/models/EventoModel.php';
require_once 'app/models/MembroAdmModel.php';
require_once 'app/models/FrmDevModel.php';


class CriarEditarController {
    public function CRUD($obj){
        $controllerName = $obj . "Controller.php";
        $controller = new $controllerName();
        $controller->CRUD();

        header("Location: lista/" . $obj);
        exit();
    }   
}
?>