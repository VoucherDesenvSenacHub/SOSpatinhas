<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php include('../templates/navbarUser.php')?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="login">
                <h2>Login</h2>
                <form action="./paginaInicio.php">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Senha">
                    <a href="./loginEsqSenha.php" class="esc_senha">Esqueci a senha</a>
                    <button type="submit" value="login"><a href="./perfilUsuario.php">Login</a></button>
                </form>
                <p>Não tem uma conta? <a href="cadastroUsuario.php"> Cadastrar</a></p>
                <div class="login-social">
                    <div id="divSpan">
                        <hr>
                        <span>Ou entre usando</span>
                        <hr>
                    </div>

                    <div class="rede-social">
                        <img src="../images/google.png" alt="Google">
                        <img src="../images/facebook_azul.png" alt="Facebook">
                        <img src="../images/apple.png" alt="apple">
                    </div>
                </div>
                <a href="./loginADM.php" id="acesso-adm">Acesso Admin</a>
            </div>
        </section>
    </section>
        
    <?php include('../templates/footerUser.php')?>
</body>
</html>