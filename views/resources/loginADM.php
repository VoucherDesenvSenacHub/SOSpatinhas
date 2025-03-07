<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/loginADM.css">
</head>

<body>
    <?php include('../templates/navbarUser.php')?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="login">
                <h2>Login</h2>
                <form>
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Senha">
                    <button class="buttonLogin" type="button" onclick="window.location.href='./PerfilADM.php'">
                        Login
                    </button>
                    <!-- Depois iremos fazer o form funcionar de verdade -->
                </form>
            </div>
        </section>
    </section>
        
    <?php include('../templates/footerUser.php')?>
</body>
</html>