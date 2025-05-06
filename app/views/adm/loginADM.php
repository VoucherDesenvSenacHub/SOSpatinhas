<?php
  session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $id = trim($_POST['id']);
        $password = trim($_POST['password']);

        $adminsFile = '../../public/script/adminData.json';
        $admins = [];

        if (file_exists($adminsFile))
        {
            $jsonData = file_get_contents($adminsFile);
            $admins = json_decode($jsonData, true);
        }

        foreach ($admins as $admin)
        {
            if ($admin['id'] === $id && $admin['password'] === $password)
            {
                $_SESSION['id'] = "Admin";
                $_SESSION['taLogado'] = true;
                header('Location: ../views/compartilhada/editarPaginaInicio.php');
                exit();
            }
        }
    }
?> 

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/loginADM.css">
    <link rel="stylesheet" href="../../public/css/default.css">
</head>

<body>
    <?php include('../../componentes/navbar.php')?>  
    <section class="secaoLogin">
        <div class="login">
            <h2>Login</h2>
            <form method="POST" id="frmLoginADM">
                <input type="text" placeholder="ID" name="id">
                <input type="password" placeholder="Senha" name="password" id="password">
                <?php
                    $idBtn = "btnEntrarAdm";
                    $funcaoClick = "submitComValidacao('frmLoginADM')";
                    $funcaoLoad = "mudarTamanho('btnEntrarAdm', '188px', '50px', '20px',  )";
                    $titulo = "Entrar";
                    include('../../componentes/componenteButton.php');
                ?>
            </form>
        </div>
    </section>
    <?php include('../../componentes/footer.php'); ?>
</body>
</html>