<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    
    <link rel="stylesheet" href="../../public/css/default.css">
    <link rel="stylesheet" href="../../public/css/login.css">
</head>

<body>
    <?php include('../../componentes/navbar.php')?>
    
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
    <?php include('../../componentes/footer.php'); ?>
</body>
</html>