<?php
require_once 'app/models/PermisaoModel.php';

class PermisaoController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['ACAO'];
            $id = $_POST['ID'];
            $id = $_POST['PAGINA'];

    
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