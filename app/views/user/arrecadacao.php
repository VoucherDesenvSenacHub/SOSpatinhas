<?php
    $cssLink  = '../../public/css/arrecadacao.css';
    $tipo = 'User';
    include('../../componentes/default/topHTML.php');
?>

<div id="section">
    <section id="sectionfotoEpix">
        <div id="titulo">
            <h2 class="Titulo">Ajude o Frêgues</h2>
            <div id="slider">
                <div class="slide fade">             
                    <img class="fotoArrecadacao" src="../../public/images/listaArrecadacoes-ADM/fregues.png" alt="">
                </div>
                <div class="slide fade">
                    <img class="fotoArrecadacao" src="../../public/images/listaArrecadacoes-ADM/fregues.png" alt="">
                </div>
                <div class="slide fade">
                    <img class="fotoArrecadacao" src="../../public/images/listaArrecadacoes-ADM/fregues.png" alt="">
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
                        <img class="iconeInfo" src="../../public/images/loc.png" alt="Icone de Localização">
                        <p class="textoLocalUsuario">Campo Grande / MS</p>
                    </div>
                    <div id="divLocalUsuario">
                        <img class="iconeInfo" src="../../public/images/user.png" alt="Icone de Usuario">
                        <p class="textoLocalUsuario">Felipe Paes</p>
                    </div>
                </div>
            </div>
            
            <div id="pix">
                <div id="banco">
                    <img id="qrcode" src="../../public/images/pix.png" alt="QRCode da Conta">
                    <div id="infos">
                        <div id="infosConta">
                            <p id="nomeConta">SOS Patinhas</p>
                            <div id="numeroBanco">
                                <p class="informacoesPix">Conta: 198655-4</p>
                                <img id="imagemBanco" src="../../public/images/banco.png" alt="">
                            </div>
                            <p class="informacoesPix">Agência: 1193</p>
                        </div>
                    </div>
                    <div id="barraArrecadacao">
                        <img src="../../public/images/barraArrecadacao.png" alt="Barra de Arrecadação">
                        <p id="textoBarra">R$500,00 reais arrecadados de R$1.000,00</p>
                    </div>
                </div>
            </div>
        

            <div id="botaoCompartilhar">
                <?php
                    
                    $funcaoClick = "compartilhar()";
                    $titulo = "Compartilhar";
                    include('../../componentes/componenteButton.php');
                ?>
                <p id="textoCompartilhar">Verificado e autenticado pelo SOS Patinhas</p>
            </div>
        </div>
    </section>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

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
<?php
    include('../../componentes/default/bottomHTML.php');
?>