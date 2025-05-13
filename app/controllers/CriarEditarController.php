<?php
require_once 'app/models/AnimalModel.php';
require_once 'app/models/ArrecadacaoModel.php';
require_once 'app/models/UsuarioModel.php';
require_once 'app/models/EventoModel.php';
require_once 'app/models/MembroAdmModel.php';
require_once 'app/models/FrmDevModel.php';

class CriarEditarController {

    public function index($obj, $id = null) {
        $tabela = strtoupper($obj);
        $model = new FormularioDev();

        $fields = $model->pegaCampos($tabela);

        $formData = null;
        if (!empty($id)) {
            $formData = $model->pegaCamposComResultado($tabela, $id);
        }
    }
    
    public function CRUD($obj){
        $controllerName = $obj . "Controller.php";
        $controller = new $controllerName();
        $controller->CRUD();
    }   
}
?>