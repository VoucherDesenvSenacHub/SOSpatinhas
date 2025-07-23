<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="/SOSpatinhas/public/css/cadastroUsuario.css">
    <link rel="stylesheet" href="/SOSpatinhas/public/css/default.css">
    
</head>

<body>
    <?php include('app/componentes/navbar.php')?>
    
    <section class="corpo-container">
        <h1>Cadastro</h1>
        <form method="POST" action="cadastro" class="form" id="formCadastro">
            <input type="hidden" name="ACAO" value="C">

            <input type="text" name="NOME" placeholder="Nome Completo*" required>
            
            <div class="divInputs">
                <input type="text" name="CPF" placeholder="CPF*" required>           
                <input type="text" name="RG" placeholder="RG*" required>
            </div>
            
            <div class="divInputs">
                <input type="email" name="EMAIL" placeholder="Email*" required>
                <input type="date" name="DATA_NASCIMENTO" placeholder="Data de Nascimento*" required>
            </div>
            
            <div id="divTelefone">
                <input id="inputTelefone" type="text" name="TELEFONE" placeholder="Telefone*" required>
            </div>
            
            <input type="password" name="SENHA" placeholder="Senha:" required>

            <button type="submit" id="btnSalvar">Cadastrar</button>
        </form>
        <p>Já tem uma conta? <a href="login">Login</a></p>
   
    </section>
</body>
<?php include('../../componentes/footer.php');  ?>
</html> 
