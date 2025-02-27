<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/pagNovasenha.css">
</head>

<body>
    <?php include('../templates/navbarUser.php')?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="login">
                <h2>Login</h2>
                <form>
                    <input type="email" placeholder="Digitar nova senha">
                    <input type="password" placeholder="Confirmar senha">
                    <button type="submit" value="login"><a href="./login.php">Enviar</a></button>
                </form>
                <p>Não tem uma conta?<a href="cadastrar_conta">  Cadastrar</a></p>
            </div>
        </section>
    </section>
        
    <?php include('../templates/footerUser.php')?>
</body>
</html>