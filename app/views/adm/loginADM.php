<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/loginADM.css">
    <link rel="stylesheet" href="public/css/default.css">
</head>

<body>
    <?php include('app/componentes/navbar.php')?>  
    <section class="secaoLogin">
        <div class="login">
            <h2>Login</h2>
            <form action="login" method="POST" id="frmLoginADM">
                <input type="text" placeholder="Email:" name="EMAIL">
                <input type="password" placeholder="Senha:" name="SENHA" id="password">
                <?php
                    $idBtn = "btnEntrarAdm";
                    $funcaoClick = "submitComValidacao('frmLoginADM')";
                    $funcaoLoad = "mudarTamanho('btnEntrarAdm', '188px', '50px', '20px',  )";
                    $titulo = "Entrar";
                    include('app/componentes/componenteButton.php');
                ?>
            </form>
        </div>
    </section>
    <?php include('app/componentes/footer.php'); ?>
</body>
</html>