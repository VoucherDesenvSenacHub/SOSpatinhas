<!DOCTYPE html>
 <html lang="pt-br">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>SOS Patinhas</title>
     <link rel="stylesheet" href="/sospatinhas/public/css/esqueciSenha.css">
     <link rel="stylesheet" href="/sospatinhas/public/css/default.css">
 </head>
<body>
    <?php include('../../componentes/navbar.php'); ?>
    <section class="corpoContainer">
        <section class="secaoLogin">
            <div class="esqSenha">
                <h2>Esqueci a senha</h2>
                <p>Não se preocupe! Um link será enviado na sua caixa de entrada.</p>
                <form>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <?php
        $idBtn = "btnEnviar";
        $funcaoClick = "redirecionar('confirmacaoEmail.php')";                             
        $funcaoLoad = "mudarTamanho('btnEnviar','80%', '80%')";                                                                     
        $titulo = "Enviar";                                           
        include('../../componentes/componenteButton.php');
    ?>
                </form>
            </div>
        </section>
    </section>

    <?php include('../../componentes/default/bottomHTML.php'); ?>
</body>
</html>