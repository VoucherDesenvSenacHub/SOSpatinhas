<?php
    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true) {
    //     header("Location: login.php");
    //     exit();
    // }
    // session_start();

    // if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    //     echo '<script type="text/javascript">
    //             alert("Você precisa estar logado para prosseguir.");
    //             window.location.href = "login.php";
    //           </script>';
    //     exit();
    // }

    $cssLink  = '../../public/css/perfilUsuarioAdm.css';
    $tipo = 'Adm';
    include('../../componentes/default/topHTML.php');

    // $emailLogado = $_SESSION['email'];

    // $usersFile = '../script/userData.json';
    // $users = json_decode(file_get_contents($usersFile), true);

    // $usuarioAtual = null;
    // foreach ($users as $user) {
    //     if ($user['email'] === $emailLogado) {
    //         $usuarioAtual = $user;
    //         break;
    //     }
    // }
?>


<div id="perfil">
    <div id="contentFotoMembro">
        <img id="fotoMembro" src="../../public/images/icons/iconUser.png" alt="icone foto do Usuário">
        <h1 id="nomeMembro">Betina de Souza Silva</h1>
    </div>

    <div id="iconsContainers">
        <div id="contentInfosMembro">
            <div class="contentItensPerfil">
                <img class="icones" src="../../public/images/icons/iconUser_2.png" alt="icone telefone">
                <div class="contentItens">
                    <p class="titulos">Nome:</p>
                    <p class="conteudoTitulos">Betina de Souza Silva</p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../../public/images/icons/data.png" alt="icone data de nascimento">
                <div class="contentItens">
                    <p class="titulos">Data Nascimento:</p>
                    <p class="conteudoTitulos">25/12/1981</p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../../public/images/icons/Telefone.png" alt="icone telefone">
                <div class="contentItens">
                    <p class="titulos">Telefone:</p>
                    <p class="conteudoTitulos">67 372422124</p>
                </div>
            </div>
        </div>

        <div id="contentInfosMembro2">
            <div class="contentItensPerfil">
                <img class="icones" src="../../public/images/icons/email.png" alt="icone email">
                <div class="contentItens">
                    <p class="titulos">Email:</p>
                    <p class="conteudoTitulos">teste@teste.com</p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../../public/images/icons/rg.png" alt="icone cpf">
                <div class="contentItens">
                    <p class="titulos">CPF:</p>
                    <p class="conteudoTitulos">368.148.968-04</p>
                </div>
            </div>
            
            
            <div class="contentItensPerfil" id="rg">
                <img class="icones" src="../../public/images/icons/rg.png" alt="icone rg">
                <div class="contentItens">
                    <p class="titulos">RG:</p>
                    <p class="conteudoTitulos">45.622.343-5</p>
                </div>
            </div>
        </div>
    </div>
</div>
        
<?php
    include('../../componentes/default/bottomHTML.php');
?>