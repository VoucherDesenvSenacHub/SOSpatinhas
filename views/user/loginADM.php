<?php
    // session_start();

    // if ($_SERVER['REQUEST_METHOD'] == 'POST')
    // {
    //     $id = trim($_POST['id']);
    //     $password = trim($_POST['password']);

    //     $adminsFile = '../../public/script/adminData.json';
    //     $admins = [];

    //     if (file_exists($adminsFile))
    //     {
    //         $jsonData = file_get_contents($adminsFile);
    //         $admins = json_decode($jsonData, true);
    //     }

    //     foreach ($admins as $admin)
    //     {
    //         if ($admin['id'] === $id && $admin['password'] === $password)
    //         {
    //             $_SESSION['id'] = "Admin";
    //             $_SESSION['taLogado'] = true;
    //             header('Location: ../../editarPaginaInicio.php');
    //             exit();
    //         }
    //     }
    // }
    $cssLink= "../../public/css/loginADM.css";
    $tipo = 'Adm'; 
    include('../../public/componentes/default/topHTML.php');
?>

        <div class="login">
            <h2>Login</h2>
            <form method="POST" id="frmLoginADM">
                <input type="text" placeholder="ID" name="id">
                <input type="password" placeholder="Senha" name="password">
                <?php
                    $idBtn = "btnEntrarAdm";
                    $funcaoClick = "submitComValidacao('frmLoginADM')";
                    $funcaoLoad = "mudarTamanho('btnEntrarAdm', '188px', '50px', '20px' )";
                    $titulo = "Entrar";
                    include('../../public/componentes/componenteButton.php');
                ?>
            </form>
        </div>

    <?php
        include('../../public/componentes/default/bottomHTML.php');
    ?>