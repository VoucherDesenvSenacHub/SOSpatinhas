<?php
require_once 'app/models/AnimalModel.php';

class AnimalController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['ACAO'];
            $id = $_POST['ID_ANIMAL'];
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

        public function adocao() {
        require_once 'app/models/AnimalModel.php';
        $model = new AnimalModel();

        $animais = $model->buscarTodos();

        require 'app/views/user/adocao.php';
    }   

    public function detalhesAnimal($id) {
        require_once 'app/models/AnimalModel.php';
        $model = new AnimalModel();


        
        $animal = $model->buscarAnimal($id);

        if ($animal) {
            require 'app/views/user/infoAnimal.php';
        } else {
            // Tratar o caso em que o animal não é encontrado
            echo "Animal nao encontrado.";
        }
    }
    
    public function detalhesAnimalForm($idAnimal) {
        require_once 'app/models/AnimalModel.php';
        $model = new AnimalModel();

        $animal = $model->buscarAnimal($idAnimal);

        if ($animal) {
            require 'app/views/compartilhada/frmAdocao.php';
        } else {
            // Tratar o caso em que o animal não é encontrado
            echo "Animal não encontrado.";
        }
    }
}
?>