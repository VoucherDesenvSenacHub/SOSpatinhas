<?php
require_once '../models/AnimalModel.php';

class AnimalController {

    public function CRUD() {
        $acao = $_POST['ACAO'];
        $id = $_POST['ID'];
        $nome = $_POST['NOME'];
        $tipoAnimal = $_POST['TIPO_ANIMAL'];
        $raca = $_POST['RACA'];
        $porte = $_POST['PORTE'];
        $idade = $_POST['IDADE'];
        $descricao = $_POST['DESCRICAO'];
        $sexo = $_POST['SEXO'];

        $data = [
            'acao' => $acao,
            'idAnimal' => $id,
            'nome' => $nome,
            'tipoAnimal' => $tipoAnimal,
            'raca' => $raca,
            'porte' => $porte,
            'idade' => $idade,
            'descricao' => $descricao,
            'sexo' => $sexo
        ];

        $jsonData = json_encode($data);

        $animal = new AnimalModel();
        $resultado = $animal->CRUD($data);
    }
}
?>