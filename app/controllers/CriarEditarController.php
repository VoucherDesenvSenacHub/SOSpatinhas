<?php
require_once 'app/controllers/AnimalController.php';
require_once 'app/controllers/ArrecadacaoController.php';
require_once 'app/controllers/AdmController.php';
require_once 'app/controllers/EventoController.php';
require_once 'app/controllers/AdmController.php';
require_once 'app/controllers/FrmDevController.php';


class CriarEditarController {
    public function CRUD($obj){
        $controllerName = $obj . "Controller";
        $controller = new $controllerName();
        $controller->CRUD();
        echo $obj;

        header("Location: /SOSPatinhas/adm/lista/" . $obj);
        exit();
    }   
}
?>