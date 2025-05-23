<?php
require_once 'app/controllers/FrmDevController.php';

class CriarEditarController {
    public function CRUD($obj){
        $controllerName = $obj . "Controller";
        require_once 'app/controllers/'.$controllerName.'.php';
        $controller = new $controllerName();
        $controller->CRUD();

        header("Location: /SOSPatinhas/adm/lista/" . $obj);
        exit();
    }   
}
?>