<?php
require_once 'models/teste.php';

class TesteController {

    public function crud() {
        $data = file_get_contents("php://input");

        $teste = new TesteModel();
        $resultado = $teste->crud($data);

        echo json_encode($resultado);
    }
}
?>