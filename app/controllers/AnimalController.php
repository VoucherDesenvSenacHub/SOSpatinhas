<?php
require_once 'app/models/AnimalModel.php';

class AnimalController {
    private $model;
    
    public function __construct(){
        $this->model = new AnimalModel();
    }

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['ACAO'] ?? null;
            $id = $_POST['ID_ANIMAL'] ?? null;
            $nome = isset($_POST['NOME']) ? trim($_POST['NOME']) : null;
            $tipoAnimal = isset($_POST['TIPO_ANIMAL']) ? trim($_POST['TIPO_ANIMAL']) : null;
            $raca = isset($_POST['RACA']) ? trim($_POST['RACA']) : null;
            $porte = isset($_POST['PORTE']) ? trim($_POST['PORTE']) : null;
            $idade = isset($_POST['IDADE']) ? trim($_POST['IDADE']) : null;
            $descricao = isset($_POST['DESCRICAO']) ? trim($_POST['DESCRICAO']) : null;
            $sexo = isset($_POST['SEXO']) ? trim($_POST['SEXO']) : null;
            $fotos = $_FILES['CAMINHO_FOTO'] ?? null;
            
            $caminhoFts = $fotos ? imageUpload($fotos) : null;

            var_dump($caminhoFts);
    
            $data = [
                'ACAO' => $acao,
                'ID_ANIMAL' => $id,
                'NOME' => $nome,
                'TIPO_ANIMAL' => $tipoAnimal,
                'RACA' => $raca,
                'PORTE' => $porte,
                'IDADE' => $idade,
                'DESCRICAO' => $descricao,
                'SEXO' => $sexo,
                'CAMINHO_FOTO' => $caminhoFts
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