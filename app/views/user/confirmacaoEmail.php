<!DOCTYPE html>
<html lang="pt-br" style="overflow-x: hidden;"> <!-- <- Adicionado aqui -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="public/css/confirmacaoEmail.css">
    <link rel="stylesheet" href="public/css/default.css">
</head>

<body>
    <?php include('app/componentes/navbar.php')?>
    
    <section class="corpo-container">
        <section class="secaoEmailEnviado">
            <div class="bloco">
                <h2>E-mail enviado!</h2>
                <p>Verifique sua caixa de entrada e clique no link para alterar a senha!</p>
                <img src="public/images/animais.png" alt="Animais">
            </div>
        </section>
    </section>
        
    <?php include('app/componentes/footer.php')?>
</body>
</html>
