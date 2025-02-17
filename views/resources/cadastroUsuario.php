<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/cadastroUsuario.css">
</head>

<body>
    <?php include('../templates/navbarUser.php')?>
    
    <section class="corpo-container">
        <h1>Cadastro</h1>
            <form method="POST" action="" class="form">
            
                <div class="width60">
                    <input type="date" name="data_nascimento" placeholder="Data de Nascimento*" required>
                    <input type="email" name="email" placeholder="Email*" required>
                    <input type="text" name="ddd" placeholder="DDD*" required>
                </div>
                
                <div class="width30">
                    <input type="text" name="cpf" placeholder="CPF*" required>           
                    <input type="text" name="rg" placeholder="RG*" required>
                    <input type="text" name="telefone" placeholder="Telefone*" required>
                </div>

                <input type="text" name="nome" placeholder="Nome Completo*" required>
                <input type="password" name="senha" placeholder="Senha:" required>
                <input type="password" name="confirma_senha" placeholder="Confirmar Senha:" required>
                <button type="submit" name="cadastrar">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <span>Login</span></p>

            <p class="borda-verde">Ou entre usando</p>

            <div class="img-container">
                <div class="icons">
                    <img src="../images/google.png">
                    <img src="../images/facebook_azul.png">
                    <img src="../images/apple.png">
                </div>
            </div>
            
            
    </section>
        
    <?php include('../templates/footerUser.php')?>
</body>
</html> 