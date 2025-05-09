<?php
require_once 'app/models/ArrecadacaoModel.php';

class ArrecadacaoController {

    public function CRUD() {

        $jsonData = json_encode($data);
        
        $animal = new ArrecadacaoModel();
        $resultado = $animal->CRUD($jsonData);
    }

}

?>