<?php
require_once 'app/models/AnimalModel.php';

class AnimalController {
    private $model;
    
    public function __construct(){
        $this->model = new AnimalModel();
    }

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
            
            try{
                $jsonData = json_encode($data);
                $resultado = $this->model->CRUD($jsonData);
            } catch (Exception $e) {
                setModal('erro', 'Erro encontrado!', $e->getMessage());
            }
        }
    }

    public function adocao() {
        $data = ['ACAO' => 'R'];
        $jsonData = json_encode($data);
        try{
            $animais = $this->model->CRUD($jsonData);
        } catch (Exception $e) {
            setModal('erro', 'Erro encontrado!', $e->getMessage());
        }
        require 'app/views/user/adocao.php';
    }   

    public function detalhesAnimal($id) {
        $data = ['ACAO' => 'R', 'ID_ANIMAL' => $id];
        $jsonData = json_encode($data);

        try{
            $animal = $this->model->CRUD($jsonData);
        } catch (Exception $e) {
            setModal('erro', 'Erro encontrado!', $e->getMessage());
        }

        if (!empty($animal)) {
            require 'app/views/user/infoAnimal.php';
        } else {
            setModal('info', 'Info', 'Animal não encontrado.');
            redirect('adocao');
        }
    }
    
    public function detalhesAnimalForm($idAnimal) {
        $data = ['ACAO' => 'R', 'ID_ANIMAL' => $idAnimal];
        $jsonData = json_encode($data);
        $animal = $this->model->CRUD($jsonData);

        if ($animal) {
            require 'app/views/compartilhada/frmAdocao.php';
        } else {
            setModal('info', 'Info', 'Animal não encontrado.');
            redirect('adocao');
        }
    }
}
?>