<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = trim($_POST['id']);
        $password = trim($_POST['password']);

        $adminsFile = '../script/adminData.json';
        $admins = [];

        if (file_exists($adminsFile)) {
            $jsonData = file_get_contents($adminsFile);
            $admins = json_decode($jsonData, true);
        }

        foreach ($admins as $admin) {
            if ($admin['id'] === $id && $admin['password'] === $password) {
                $_SESSION['id'] = "Admin";
                $_SESSION['taLogado'] = true;
                header('Location: editarPaginaInicio.php');
                exit();
            }
        }

        echo "ID ou senha inválidos.";
    }
?>
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
                <form method="POST" id="frmLoginADM">
                    <input type="text" placeholder="ID" name="id">
                    <input type="password" placeholder="Senha" name="password">
                    <?php
                        $funcaoClick = "submitComValidacao('frmLoginADM')";
                        $titulo = "Entrar";
                        include('../templates/componenteButton.php');
                    ?>
                </form>
            </div>
        </section>
    </section>
        
    <?php include('../templates/footerUser.php')?>
</body>
</html>