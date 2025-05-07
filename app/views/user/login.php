<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'], $_POST['senha'])) {
        $tentouLogar = true;

        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        $usersFile = '../script/userData.json';
        $users = [];

        if (file_exists($usersFile)) {
            $jsonData = file_get_contents($usersFile);
            $users = json_decode($jsonData, true);
        }

        foreach ($users as $user) {
            if ($user['email'] === $email && password_verify($senha, $user['senha'])) {
                $_SESSION['email'] = $email;
                $_SESSION['taLogado'] = true;
                header('Location: perfilUsuario.php');
                exit();
            }
        }

        $_SESSION['erroLogin'] = "Email ou senha inválidos.";
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    
    <link rel="stylesheet" href="../public/css/default.css">
    <link rel="stylesheet" href="../public/css/login.css">
</head>

<body>
<?php include('../../app/componentes/default/topHTML.php'); ?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="login">
                <h2>Login</h2>
                <form action="" method="POST" id="formLogin">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="senha" placeholder="Senha">
                    <a href="./loginEsqSenha.php" class="esc_senha">Esqueci a senha</a>
                    <?php if (isset($_SESSION['erroLogin'])): ?>
                        <p style="color:red;"><?php echo htmlspecialchars($_SESSION['erroLogin']); ?></p>
                        <?php unset($_SESSION['erroLogin']); ?>
                    <?php endif; ?>
                    <?php
                        $funcaoClick = "submitComValidacao('formLogin')";
                        $titulo = "Entrar";
                        include('../../componentes/componenteButton.php');
                    ?>
                </form>
                <p>Não tem uma conta? <a href="cadastroUsuario.php"> Cadastrar</a></p>
                <div class="login-adm">
                    <a href="./loginADM.php">
                        <img src="../../images/iconeAdm.png" alt="acesso-adm">
                    </a>
                </div>
            </div>
        </section>
    </section>
    <?php include('../app/componentes/default/bottomHTML.php'); ?>
</body>
</html>