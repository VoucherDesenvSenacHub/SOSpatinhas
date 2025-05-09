<?php
require_once 'app/models/UsuarioModel.php';

class UsuarioController {

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_usuario = $_POST['ID_USUARIO'];
            $acao = $_POST['ACAO'];
            $nome = $_POST['NOME'];
            $cpf = $_POST['CPF'];
            $rg = $_POST['RG'];
            $email = $_POST['EMAIL'];
            $data_nascimento = $_POST['DATA_NASCIMENTO'];
            $telefone = $_POST['TELEFONE'];
            $senha = $_POST['SENHA'];


    
            $data = [
                'ID_USUARIO' => $id_usuario,
                'ACAO' => $acao,
                'NOME' => $nome,
                'CPF' => $cpf,
                'RG' => $rg,
                'EMAIL' => $email,
                'DATA_NASCIMENTO' => $data_nascimento,
                'TELEFONE' => $telefone,
                'SENHA' => $senha,
                
            ];
    
            $jsonData = json_encode($data);
    
            $usuario = new UsuarioModel();
            $resultado = $usuario->CRUD($jsonData);
        }
    }
}
?>