<?php
require_once '../models/ArrecadacaoModel.php';

class ArrecadacaoController {

    public function CRUD() {

        $jsonData = json_encode($data);
        
        $animal = new ArrecadacaoModel();
        $resultado = $animal->CRUD($jsonData);
    }

}

?>