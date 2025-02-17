<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Membro</title>
    <link rel="stylesheet" href="../css/perfilMembro.css">
</head>
<body>
    <?php include('../templates/navbarAdm.php'); ?>

    <section id="corpocontainer">

        <div id="perfil">
            <div id="contentFotoMembro">
                <img id="fotoMembro" src="../images/fotoPerfilMembro.png" alt="icone foto do Membro">
                <p id="nomeMembro">Felipe Paes</p>
            </div>

            <div id="contentInfosMembro">
                <div class="contentItensPerfil">
                    <img class="icones" src="../images/telefonePerfilMembro.png" alt="icone telefone">
                    <div class="contentItens">
                        <p class="titulos">Telefone</p>
                        <p class="conteudoTitulos">+12 3456 7892</p>
                    </div>
                </div>

                <div class="contentItensPerfil">
                    <img class="icones" src="../images/emailPerfilMembro.png" alt="icone email">
                    <div class="contentItens">
                        <p class="titulos">E-mail</p>
                        <p class="conteudoTitulos">example@gmail.com</p>
                    </div>
                </div>

                <button id="buttonEditarPerfil">Editar Perfil</button>
            </div>
        </div>
    </section>

    <?php include('../templates/footerUser.php'); ?>   
</body>
</html>