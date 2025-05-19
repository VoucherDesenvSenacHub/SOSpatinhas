<?php
require_once 'app/models/AdmModel.php';

class AdmController {

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['EMAIL'] ?? '');
            $senha = trim($_POST['SENHA'] ?? '');

            $data = ['ACAO' => 'R', 'EMAIL' => $email];
    
            $jsonData = json_encode($data);
    
            $adm = new AdmModel();
            $resultado = $adm->CRUD($jsonData);

            if ($resultado) {
                if ($resultado[0]['EMAIL'] === $email && $resultado[0]['SENHA'] === $senha) {
                    $_SESSION['idAdm'] = $resultado['ID_ADM'];
                    $_SESSION['taLogado'] = true;
                    header("Location: perfil/" . $resultado[0]['ID_ADM']);
                    exit();
                } else {
                    $_SESSION['erroLogin'] = "Email ou senha inválidos.";
                    header('Location: login');
                    exit();
                }
            } else {
                $_SESSION['erroLogin'] = "Usuário não encontrado.";
                header('Location: login');
                exit();
            }
        }
    }

    public function perfil($id){
        $frmName = 'ADM';
        // $id = $id;
        include('app/views/compartilhada/perfil.php');
    }

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_adm = $_POST['ID_ADM'] ?? null;
            $acao = $_POST['ACAO'] ?? null;
            $nome = isset($_POST['NOME']) ? trim($_POST['NOME']) : null;
            $email = isset($_POST['EMAIL']) ? trim($_POST['EMAIL']) : null;
            $telefone = isset($_POST['TELEFONE']) ? trim($_POST['TELEFONE']) : null;
            $senha = isset($_POST['SENHA']) ? trim($_POST['SENHA']) : null;
    
            $data = [
            'ID_ADM' => $id_adm,
            'NOME' => $nome,
            'EMAIL' => $email,
            'TELEFONE' => $telefone,
            'SENHA' => $senha,
            'ACAO' => $acao
            ];
    
            $jsonData = json_encode($data);
    
            $adm = new AdmModel();
            $resultado = $adm->CRUD($jsonData);
        }
    }
}
?>