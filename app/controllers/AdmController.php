<?php
require_once 'app/models/AdmModel.php';

class AdmController {

    private $model;
    
    public function __construct(){
        $this->model = new AdmModel();
    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['EMAIL'] ?? '');
            $senha = trim($_POST['SENHA'] ?? '');

            $data = ['ACAO' => 'R', 'EMAIL' => $email];
            $jsonData = json_encode($data);
            
            // try{
                $resultado = $this->model->CRUD($jsonData);
            // } catch (Exception $e) {
            //     setModal('erro', 'Erro encontrado!', $e->getMessage());
            // }

            if ($resultado) {
                if ($resultado[0]['EMAIL'] === $email && $resultado[0]['SENHA'] === $senha) {
                    $_SESSION['idAdm'] = $resultado['ID_ADM'];
                    $_SESSION['taLogado'] = true;
                    header("Location: lista/Animal");
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

    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_adm = $_POST['ID_ADM'] ?? null;
            $acao = $_POST['ACAO'] ?? null;
            $nome = isset($_POST['NOME']) ? trim($_POST['NOME']) : null;
            $email = isset($_POST['EMAIL']) ? trim($_POST['EMAIL']) : null;
            $telefone = isset($_POST['TELEFONE']) ? trim($_POST['TELEFONE']) : null;
            $senha = isset($_POST['SENHA']) ? trim($_POST['SENHA']) : null;

            if (in_array($acao, ['C', 'U']) && !empty($senha)) {
                $senha = password_hash($senha, PASSWORD_DEFAULT);
            }

            $data = [
                'ID_ADM' => $id_adm,
                'NOME' => $nome,
                'EMAIL' => $email,
                'TELEFONE' => $telefone,
                'SENHA' => $senha,
                'ACAO' => $acao
            ];

            try {
                $jsonData = json_encode($data);
                $resultado = $this->model->CRUD($jsonData);
            } catch (Exception $e) {
                setModal('erro', 'Erro encontrado!', $e->getMessage());
            }
        }
    }
}
?>