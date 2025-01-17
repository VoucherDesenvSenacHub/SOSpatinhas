<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/arrecadacao.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <section class="corpo container"">
        <section id="sectionfotoEpix">
            <div id="titulo">
                <h2 class="Titulo">Ajude o Frêgues</h2>
                <img id="fotoArrecadacao" src="../images/fregues.png" alt="">
            </div>

            <div id="sectionPix">
                <p>Frêgues</p>
                <div id="localEusuario">
                    <div id="divLocalUsuario">
                        <img class="iconeInfo" src="../images/loc.png" alt="Icone de Localização">
                        <p class="textoLocalUsuario">Campo Grande / MS</p>
                    </div>
                    <div id="divLocalUsuario">
                        <img class="iconeInfo" src="../images/user.png" alt="Icone de Usuario">
                        <p class="textoLocalUsuario">Felipe Paes</p>
                    </div>
                </div>
                
                <div id="pix">
                    <img id="qrcode" src="../images/pix.png" alt="QRCode da Conta">
                    <p id="nomeConta">SOS Patinhas</p>
                    <div id="numeroEfoto">
                        <p class="informacoesPix">Conta: 198655-4</p>
                        <img id="imagemBanco" src="../images/banco.png" alt="">
                    </div>
                    <p class="informacoesPix">Agência: 1193</p>

                    <div id="barraArrecadacao">

                        <p id="textoArrecadacao">R$500,00 reais arrecadados de R$1.000,00</p>
                    </div>
                </div>

                <button id="compartilharArrecadacao">Compartilhar</button>
                <p id="textoCompartilhar">Verificado e autenticado pelo SOS Patinhas</p>

            </div>
        </section>

        <section id="descricaoArrecadacao" >
            <p id="descricao">Conheça Freguês, um adorável cachorro de rua com uma pata quebrada e um coração de ouro. Ele foi resgatado por uma equipe de voluntários apaixonados por animais que estão dedicados a ajudá-lo a se recuperar. No entanto, para que Freguês possa receber o tratamento adequado e voltar a correr livremente, é necessário levantar fundos para cobrir as despesas médicas. Cada contribuição, por menor que seja, faz a diferença na vida deste amigo de quatro patas. Vamos unir nossas forças e dar a Freguês a chance de uma vida melhor!</p>
        </section>

    </section>
    <?php include('../templates/footerUser.php')?>
</body>
</html>