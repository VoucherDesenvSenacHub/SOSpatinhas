<?php
require_once 'app/models/UsuarioModel.php';
require_once 'app/models/AdminModel.php';

class PerfilController {

    public function index($tipo, $id) {
        $tipoUser = ucfirst($tipo) . 'Model';

        $data = ['ACAO' => 'R', 'ID_'. strtoupper($tipo) => $id];
        $jsonData = json_encode($data);

        $model = new $tipoUser();
        $resultado = $model->CRUD($jsonData);
    }
}
?>