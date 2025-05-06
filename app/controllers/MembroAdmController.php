<?php
require_once '../models/MembroAdmModel.php';

class MembroAdmController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_membro_adm = $_POST['ID_MEMBRO_ADM'];
            $acao = $_POST['ACAO'];
            $nome = $_POST['NOME'];
            $email = $_POST['EMAIL'];
            $telefone = $_POST['TELEFONE'];
            $senha = $_POST['SENHA'];
    
            $data = [
            'ID_MEMBRO_ADM' => $id_membro_adm,
            'NOME' => $nome,
            'EMAIL' => $email,
            'TELEFONE' => $telefone,
            'SENHA' => $senha,
            'ACAO' => $acao,
           

                
            ];
    
            $jsonData = json_encode($data);
    
            $membroAdm = new MembroAdmModel();
            $resultado = $membroAdm->CRUD($jsonData);
        }
    }
}
?>