<?php
require_once 'app/models/AnimalModel.php';

class AnimalController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
                'ACAO' => $acao,
                'ID_ANIMAL' => $id,
                'NOME' => $nome,
                'TIPO_ANIMAL' => $tipoAnimal,
                'RACA' => $raca,
                'PORTE' => $porte,
                'IDADE' => $idade,
                'DESCRICAO' => $descricao,
                'SEXO' => $sexo
            ];
    
            $jsonData = json_encode($data);
    
            $animal = new AnimalModel();
            $resultado = $animal->CRUD($jsonData);
        }
    }

    // public function adocao() {
    //      $animalModel = new AnimalModel();

    //     // Coleta filtros da URL (GET)
    //     $filtros = [];
    //     if (isset($_GET['tipo'])) {
    //         $filtros['tipo'] = $_GET['tipo'];
    //     }
    //     if (isset($_GET['porte'])) {
    //         $filtros['porte'] = $_GET['porte'];
    //     }

    //     // Busca os animais filtrados
    //     $animais = $animalModel->buscarTodos($filtros);
    // }
}
?>