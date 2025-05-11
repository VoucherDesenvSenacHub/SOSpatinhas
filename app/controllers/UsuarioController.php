<?php
require_once 'app/models/UsuarioModel.php';

class UsuarioController {

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['EMAIL'] ?? '');
            $senha = trim($_POST['SENHA'] ?? '');

            $data = ['ACAO' => 'R', 'EMAIL' => $email];
    
            $jsonData = json_encode($data);
    
            $usuario = new UsuarioModel();
            $resultado = $usuario->CRUD($jsonData);
            var_dump($resultado);

            if ($resultado) {
                if ($resultado[0]['EMAIL'] === $email && password_verify($senha, $resultado[0]['SENHA'])) {
                    $_SESSION['idUser'] = $resultado['ID_USUARIO'];
                    $_SESSION['taLogado'] = true;
                    header("Location: perfil/user/" . $resultado[0]['ID_USUARIO']);
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
            $id_usuario = $_POST['ID_USUARIO'] ?? null;
            $acao = $_POST['ACAO'] ?? null;
            $nome = trim($_POST['NOME'] ?? '');
            $cpf = trim($_POST['CPF'] ?? '');
            $rg = trim($_POST['RG'] ?? '');
            $email = trim($_POST['EMAIL'] ?? '');
            $data_nascimento = trim($_POST['DATA_NASCIMENTO'] ?? '');
            $telefone = trim($_POST['TELEFONE'] ?? '');
            $senha = $_POST['SENHA'] ?? '';
            $senhaEscondida = password_hash($senha, PASSWORD_DEFAULT);
    
            $usuario = new UsuarioModel();
    
            $checaEmail = json_encode([
                'ACAO' => 'R',
                'EMAIL' => $email
            ]);
            $usuarioExiste = $usuario->CRUD($checaEmail);
    
            if (!empty($usuarioExiste)) {
                $_SESSION['erroCadastro'] = "Este email já está cadastrado.";
                header('Location: cadastro'); 
                exit();
            }
    
            $data = [
                'ID_USUARIO' => $id_usuario,
                'ACAO' => $acao,
                'NOME' => $nome,
                'CPF' => $cpf,
                'RG' => $rg,
                'EMAIL' => $email,
                'DATA_NASCIMENTO' => $data_nascimento,
                'TELEFONE' => $telefone,
                'SENHA' => $senhaEscondida
            ];
    
            $jsonData = json_encode($data);
            $resultado = $usuario->CRUD($jsonData);
    
            if ($acao == 'C') {
                header('Location: login');
                exit();
            }
    
            return $resultado;
        }
    }
}
?>