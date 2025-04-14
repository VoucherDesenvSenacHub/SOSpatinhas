<?php

    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true) {
        header("Location: login.php");
        exit();
    }
    session_start();
    $taLogado = isset($_SESSION['taLogado']) && $_SESSION['taLogado'] === true; 
    $isAdm = isset($_SESSION['id']) && $_SESSION['id'] === "Admin";

     if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
         echo '<script type="text/javascript">
                alert("Você precisa estar logado para prosseguir.");
                window.location.href = "../../login.php";
               </script>';
        exit();
     }

    $cssLink  = '../../public/componentes/css/perfilUsuario.css';
    $tipo = 'User';
    include('../../public/componentes/default/topHTML.php');

    $emailLogado = $_SESSION['email'];

    $usersFile = '../../public/componentes/script/userData.json';
    $users = json_decode(file_get_contents($usersFile), true);

    $usuarioAtual = null;
    foreach ($users as $user) {
        if ($user['email'] === $emailLogado) {
            $usuarioAtual = $user;
            break;
        }
    }
?>


<div id="perfil">
    <div id="contentFotoMembro">
        <img id="fotoMembro" src="../../public/componentes/images/icons/iconUser.png" alt="icone foto do Usuário">
        <p id="nomeMembro"><?=$usuarioAtual['nome']; ?></p>
        <?php
            $funcaoClick = "sair()";
            $titulo = "Sair";
            include('../../public/componentes/componenteButton.php');
        ?>
</div>

<div id="iconscontainers">
        <div id="contentInfosMembro">
            <div class="contentItensPerfil">
                <img class="icones" src="../../public/componentes/images/icons/iconUser_2.png" alt="icone telefone">
                <div class="contentItens">
                    <p class="titulos">Nome:</p>
                    <p class="conteudoTitulos"><?=$usuarioAtual['nome']; ?></p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../../public/componentes/images/icons/data.png" alt="icone data de nascimento">
                <div class="contentItens">
                    <p class="titulos">Data Nascimento:</p>
                    <p class="conteudoTitulos">
                        <?=($usuarioAtual['dtNasc']) ? $usuarioAtual['dtNasc'] : 'Não informado'; ?>
                    </p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../../public/componentes/images/icons/Telefone.png" alt="icone telefone">
                <div class="contentItens">
                    <p class="titulos">Telefone:</p>
                    <p class="conteudoTitulos">
                        <?=($usuarioAtual['telefone']) ? $usuarioAtual['telefone'] : 'Não informado'; ?>
                    </p>
                </div>
            </div>
        </div>

        <div id="contentInfosMembro2">
            <div class="contentItensPerfil">
                <img class="icones" src="../../public/componentes/images/icons/email.png" alt="icone email">
                <div class="contentItens">
                    <p class="titulos">Email:</p>
                    <p class="conteudoTitulos"><?=$usuarioAtual['email']; ?></p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../../public/componentes/images/icons/rg.png" alt="icone cpf">
                <div class="contentItens">
                    <p class="titulos">CPF:</p>
                    <p class="conteudoTitulos">
                        <?=$usuarioAtual['cpf'] ? $usuarioAtual['cpf'] : 'Não informado'; ?>
                    </p>
                </div>
            </div>
            
            
            <div class="contentItensPerfil" id="rg">
                <img class="icones" src="../images/icons/rg.png" alt="icone rg">
                <div class="contentItens">
                    <p class="titulos">RG:</p>
                    <p class="conteudoTitulos">
                        <?=($usuarioAtual['rg']) ? $usuarioAtual['rg'] : 'Não informado'; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    
</div>
        
<?php
    include('../../public/componentes/default/bottomHTML.php');
?>