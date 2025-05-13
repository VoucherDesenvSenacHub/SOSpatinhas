<?php
require_once 'app/models/PermisaoModel.php';

class PermisaoController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['ACAO'];
            $id = $_POST['ID'];
            $nome = $_POST['NOME'];
            $tipoPErmisaao = $_POST['TIPO_PErmisaao'];
            $raca = $_POST['RACA'];
            $porte = $_POST['PORTE'];
            $idade = $_POST['IDADE'];
            $descricao = $_POST['DESCRICAO'];
            $sexo = $_POST['SEXO'];
    
            $data = [
                'ACAO' => $acao,
                'ID_PErmisaao' => $id,
                'NOME' => $nome,
                'TIPO_PErmisaao' => $tipoPErmisaao,
                'RACA' => $raca,
                'PORTE' => $porte,
                'IDADE' => $idade,
                'DESCRICAO' => $descricao,
                'SEXO' => $sexo
            ];
    
            $jsonData = json_encode($data);
    
            $permisao = new PermisaoModel();
            $resultado = $permisao->CRUD($jsonData);
        }
    }
}
?>