<?php
require_once 'app/models/PermissaoModel.php';

class PermissaoController {
    private $model;
    public function __construct(){
        $this->model = new PermissaoModel();
    }
    public function checarPermissao(){
        return $this->model->checar($_SESSION['idAdm']);
    }
    
}
?>