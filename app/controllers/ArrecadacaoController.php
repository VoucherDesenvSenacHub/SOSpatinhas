<?php
require_once '../models/ArrecadacaoModel.php';

class ArrecadacaoController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $acao = $_POST['ACAO'];
            $id_arrecadacao = $_POST['ID_ARRECADACAO'];
            $titulo = $_POST['TITULO'];
            $nome_animal = $_POST['NOME_ANIMAL'];
            $descricao = $_POST['DESCRICAO'];
            $nome_usuario = $_POST['NOME_USUARIO'];
            $vl_arrecadacao = $_POST['VALOR_ARRECADACAO'];
            $vl_arrecadado = $_POST['VALOR_ARRECADADO'];
            $nm_conta = $_POST['NM_CONTA'];
            $nu_conta = $_POST['NU_CONTA'];
            $nu_agencia = $_POST['NU_AGENCIA'];
            $qr_code = $_POST['QR_CODE'];
    
            $data = [
                'ACAO' => $acao,
                'ID_ARRECADACAO' => $id_arrecadacao,
                'TITULO' => $titulo,
                'NOME_ANIMAL' => $nome_animal,
                'DESCRICAO' => $descricao,
                'NOME_USUARIO' => $nome_usuario,
                'VALOR_ARRECADACAO' => $vl_arrecadacao,
                'VALOR_ARRECADADO' => $vl_arrecadado,
                'NM_CONTA' => $nm_conta,
                'NU_CONTA' => $nu_conta,
                'NU_AGENCIA' => $nu_agencia,
                'QR_CODE' => $qr_code

            ];
    
            $jsonData = json_encode($data);
    
            $arrecadacao = new ArrecadcaoModel();
            $resultado = $arrecadacao->CRUD($jsonData);
        }
    }
}
?>