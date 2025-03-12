<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/arrecadacao.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <section class="corpo container">

        <div id="section">
            <section id="sectionfotoEpix">
                <div id="titulo">
                    <h2 class="Titulo">Ajude o Frêgues</h2>

                        <div id="slider">
                            <div class="slide fade">             
                                <img class="fotoArrecadacao" src="../images/fregues.png" alt="">
                            </div>
                            <div class="slide fade">
                                <img class="fotoArrecadacao" src="../images/fregues.png" alt="">
                            </div>
                            <div class="slide fade">
                                <img class="fotoArrecadacao" src="../images/fregues.png" alt="">
                            </div>
                            <div id="botoesSlider">
                                <div class="botaoTrocarFoto" onclick="currentSlide(1)"></div>
                                <div class="botaoTrocarFoto" onclick="currentSlide(2)"></div>
                                <div class="botaoTrocarFoto" onclick="currentSlide(3)"></div>
                            </div>
                            <div id="descricaoArrecadacao">
                                <p id="descricao">Conheça Freguês, um adorável cachorro de rua com uma pata quebrada e um coração de ouro. Ele foi resgatado por uma equipe de voluntários apaixonados por animais que estão dedicados a ajudá-lo a se recuperar. No entanto, para que Freguês possa receber o tratamento adequado e voltar a correr livremente, é necessário levantar fundos para cobrir as despesas médicas. Cada contribuição, por menor que seja, faz a diferença na vida deste amigo de quatro patas. Vamos unir nossas forças e dar a Freguês a chance de uma vida melhor!</p>

                            </div>
                           
                        </div>

                </div>

                    <div id="sectionPix">
                        <div id="localEusuario">
                            <p id="nomeAnimal">Frêgues</p>
                            <div id="userElocal">
                                <div id="divLocalUsuario">
                                    <img class="iconeInfo" src="../images/loc.png" alt="Icone de Localização">
                                    <p class="textoLocalUsuario">Campo Grande / MS</p>
                                </div>
                                <div id="divLocalUsuario">
                                    <img class="iconeInfo" src="../images/user.png" alt="Icone de Usuario">
                                    <p class="textoLocalUsuario">Felipe Paes</p>
                                </div>
                            </div>
                        </div>
                        
                        <div id="pix">
                            <div id="banco">
                                <img id="qrcode" src="../images/pix.png" alt="QRCode da Conta">
                                <div id="infos">
                                    <div id="infosConta">
                                        <p id="nomeConta">SOS Patinhas</p>
                                        <div id="numeroBanco">
                                            <p class="informacoesPix">Conta: 198655-4</p>
                                            <img id="imagemBanco" src="../images/banco.png" alt="">
                                        </div>
                                        <p class="informacoesPix">Agência: 1193</p>
                                    </div>
                                </div>
                                <div id="barraArrecadacao">
                                    <img src="../images/barraArrecadacao.png" alt="Barra de Arrecadação">
                                    <!-- A imagem sera trocada por uma barra verdadeira com um código funcional!  -->
                                    <p id="textoBarra">R$500,00 reais arrecadados de R$1.000,00</p>
                                </div>
                            </div>
                        </div>
                    

                        <div id="botaoCompartilhar">
                            <button id="compartilharArrecadacao" onclick="compartilhar()">Compartilhar</button>
                            <p id="textoCompartilhar">Verificado e autenticado pelo SOS Patinhas</p>
                        </div>
                    </div>
           
              
            </section>
        </div>
    </section>

    <?php include('../templates/footerUser.php')?>
</body>
<script>
    function compartilhar() {
        if (navigator.share) {
            navigator.share({ url: window.location.href }).catch((error) => console.log("Erro de Compartilhamento:", error));
        } else {
            alert("Sharing not supported on this browser.");
        }
    }

    let slideIndex = 1;
    showSlides(slideIndex);

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("botaoTrocarFoto");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }
    
</script>
</html>