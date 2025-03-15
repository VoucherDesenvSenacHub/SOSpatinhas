<?php
    $cssLink  = '../css/perfilUsuario.css';
    $tipo = 'User';
    include('../templates/default/topHTML.php');
?>

<div id="perfil">
    <div id="contentFotoMembro">
        <img id="fotoMembro" src="../images/icons/iconUser.png" alt="icone foto do Usuário">
        <p id="nomeMembro">Will Smith</p>
    </div>

    <div id="iconscontainers">
        <div id="contentInfosMembro">
            <div class="contentItensPerfil">
                <img class="icones" src="../images/icons/iconUser_2.png" alt="icone telefone">
                <div class="contentItens">
                    <p class="titulos">Nome:</p>
                    <p class="conteudoTitulos">Will Smith</p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../images/icons/data.png" alt="icone email">
                <div class="contentItens">
                    <p class="titulos">Data Nascimento:</p>
                    <p class="conteudoTitulos">16/05/1999</p>
                </div>
            </div>

            <div class="contentItensPerfil">
                <img class="icones" src="../images/icons/Telefone.png" alt="icone email">
                <div class="contentItens">
                    <p class="titulos">Telefone:</p>
                    <p class="conteudoTitulos">+55 67 99999-9999</p>
                </div>
            </div>
        </div>




        <div id="contentInfosMembro2">

        <div class="contentItensPerfil">
            <img class="icones" src="../images/icons/email.png" alt="icone email">
            <div class="contentItens">
                <p class="titulos">Email:</p>
                <p class="conteudoTitulos">exemplo@exemplo.com.br</p>
            </div>
        </div>
        <div class="contentItensPerfil">
            <img class="icones" src="../images/icons/rg.png" alt="icone email">
            <div class="contentItens">
                <p class="titulos">CPF:</p>
                <p class="conteudoTitulos">123.456.789.01</p>
            </div>
        </div>
        <div class="contentItensPerfil">
            <img class="icones" src="../images/icons/rg.png" alt="icone email">
            <div class="contentItens">
                <p class="titulos">RG:</p>
                <p class="conteudoTitulos">12.123.123-12</p>
            </div>
        </div>
        </div>
    </div>


    
</div>
        
<?php
    include('../templates/default/bottomHTML.php');
?>