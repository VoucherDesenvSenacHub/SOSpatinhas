<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <?php include('app/componentes/navbar.php')?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="login">
                <h2>Login</h2>
                <form action="login" method="POST" id="formLogin">
                    <input type="email" name="EMAIL" placeholder="Email">
                    <input type="password" name="SENHA" placeholder="Senha">
                    <a href="login/esquecisenha" class="esc_senha">Esqueci a senha</a>
                    <?php if (isset($_SESSION['erroLogin'])): ?>
                        <p style="color:red;"><?php echo htmlspecialchars($_SESSION['erroLogin']); ?></p>
                        <?php unset($_SESSION['erroLogin']); ?>
                    <?php endif; ?>
                    <?php
                        $funcaoClick = "submitComValidacao('formLogin')";
                        $titulo = "Entrar";
                        include('app/componentes/componenteButton.php');
                    ?>
                </form>
                <p>Não tem uma conta? <a href="cadastro"> Cadastrar</a></p>
                <div class="login-adm">
                    <a href="loginADM">
                        <img src="public/images/iconeAdm.png" alt="acesso-adm">
                    </a>
                </div>
            </div>
        </section>
    </section>
    <?php include('app/componentes/footer.php'); ?>
</body>
</html>