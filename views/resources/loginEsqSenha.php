<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/loginEsqSenha.css">
</head>

<body>
    <?php include('../templates/navbarUser.php')?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="esqSenha">
                <h2>Esqueci a senha</h2>
                <p>Não se preocupe! Um link será enviado na sua caixa de entrada.</p>
                <form>
                    <input type="email" placeholder="Email">
                    <button type="submit" value="enviar"><a href="./confirmacaoEmail.php">Enviar</a></button>
                </form>
            </div>
        </section>

    </section>

    <?php include('../templates/footerUser.php')?>
</body>
</html>