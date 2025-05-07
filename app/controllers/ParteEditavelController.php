<?php
require_once '../models/ParteEditavelModel.php';

class ParteEditavelController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['ID_PARTE_EDITAVEL'];
            $acao = $_POST['INPUT_SIMPLES'];
            $titulo = $_POST['TEXTAREA'];
            $descricao = $_POST['CAMINHO_IMAGEM'];

    
            $data = [
                'ID_PARTE_EDITAVEL' => $id,
                'INPUT_SIMPLES' => $input_simples,
                'TEXTAREA' => $textarea,   
                'CAMINHO_IMAGEM' => $caminho_imagem,
            ];
    
            $jsonData = json_encode($data);
    
            $evento = new ParteEditavelModel();
            $resultado = $parteEditavel->CRUD($jsonData);
        }
    }
}
?>