<!DOCTYPE html>
 <html lang="pt-br">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SOS Patinhas</title>
     <link rel="stylesheet" href="../../public/css/novaSenha.css">
     <link rel="stylesheet" href="../../public/css/default.css">
 </head>

<body>
    <?php include('../../public/componentes/navbar.php'); ?>
    <section class="corpo-container">
        <section class="secao-login">
            <div class="login">
                <h2>Nova Senha</h2>
                <form>
                    <input type="password" placeholder="Digitar nova senha">
                    <input type="password" placeholder="Confirmar senha">
                    <?php
        $idBtn = "btnEnviar";
        $funcaoClick = "adicionarComValidacao('Enviado com sucesso')";                             
        $funcaoLoad = "mudarTamanho('btnEnviar','188px', '50px', '20px')";                                                                     
        $titulo = "Enviar";                                           
        include('../../public/componentes/componenteButton.php');
    ?>
                </form>
            </div>
        </section>
    </section>

    <?php include('../../public/componentes/footer.php'); ?>
</body>
</html>