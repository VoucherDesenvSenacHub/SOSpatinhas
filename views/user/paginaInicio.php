<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS Patinhas</title>
        <link rel="stylesheet" href="../../public/css/paginaInicio.css">
        <link rel="stylesheet" href="../../public/css/default.css">
        <link rel="icon" type="image/png" href="../../public/images/icons/favicon.png">
    </head>
    <body>
    <?php include('../../public/componentes/navbarUser.php'); ?>

    <div class="row" id="cima">
        <div class="containerCarrossel">
            <section id="secslider" >
                <div id="divslider">
                    <ul id="slider">
                        <li>
                            <img src="../../public/images/fotoinicio1.png" alt="Foto do Carrosel">
                        </li>
                        <li>
                            <img src="../../public/images/fotoinicio2.png" alt="Foto do Carrosel">
                        </li>
                        <li>
                            <img src="../../public/images/fotoinicio3.png" alt="Foto do Carrosel">
                        </li>
                    </ul>
                </div>
                <img src="../../public/images/icons/btn_esquerdo.png" alt="" class="buttonslider" id="esquerda">
                <img src="../../public/images/icons/btn_direito.png" alt="" class="buttonslider" id="direita">
            </section>
        </div>
    </div>

    <div class="row" id="meio">
        <div class="texto">
            <h1>Sobre Nós</h1>
            <p>A SOS Patinhas nasceu do amor e compromisso com os animais em situação de vulnerabilidade. Nossa missão é resgatar, cuidar e encontrar lares amorosos para cães e gatos abandonados, oferecendo a eles uma nova chance de vida.
                Com o apoio de voluntários e doações, realizamos resgates, tratamentos veterinários, castrações e campanhas de adoção. Além disso, trabalhamos para conscientizar a sociedade sobre a importância do respeito e proteção aos animais.
                Junte-se a nós e faça parte dessa corrente do bem. Juntos, podemos mudar vidas – uma patinha de cada vez!
            </p>
        </div>
        <div class="imgBtn">
            <div class="divImgMeio">
                <img src="../../public/images/imgcard1.png" alt="">
            </div>
            <div class="divBtnMeio">
                <?php
                    $idBtn = "btnEquipe";
                    $funcaoClick = "redirecionar('quemSomos.php')";
                    $funcaoLoad = "mudarTamanho('btnEquipe')";
                    $titulo = "Conheça nossa equipe!";
                    include("../../public/componentes/componenteButton.php");
                ?>
            </div>
        </div>
    </div>

    <div class="row" id="baixo">
        <div class="cardSaibaMais">
            <p class="titulo">Faça uma doação!</p>
            <div class="divImgBaixo">
                <img src="../../public/images/imgcard1.png" alt="">
            </div>
            <div class="divBtnBaixo">
                <?php
                    $idBtn = "btnDoacao";
                    $funcaoClick = "redirecionar('comoAjudar.php')";
                    $funcaoLoad = "mudarTamanho('btnDoacao')";
                    $titulo = "Saiba Mais!";
                    include("../../public/componentes/componenteButton.php");
                ?>
            </div> 
        </div>

        <div class="cardSaibaMais">
            <p class="titulo">Participe de nossos eventos!</p>
            <div class="divImgBaixo">
                <img src="../../public/images/imgcard2.png" alt="">
            </div>
            <div class="divBtnBaixo">
                <?php
                    $idBtn = "btnEventos";
                    $funcaoClick = "redirecionar('eventos.php')";
                    $funcaoLoad = "mudarTamanho('btnEventos')";
                    $titulo = "Saiba Mais!";
                    include("../../public/componentes/componenteButton.php");
                ?>
            </div> 
        </div>

        <div class="cardSaibaMais">
            <p class="titulo">Adote um amigo!</p>
            <div class="divImgBaixo">
                <img src="../../public/images/imgcard3.png" alt="">
            </div>
            <div class="divBtnBaixo">
                <?php
                    $idBtn = "btnAdocao";
                    $funcaoClick = "redirecionar('adocao.php')";
                    $funcaoLoad = "mudarTamanho('btnAdocao')";
                    $titulo = "Saiba Mais!";
                    include("../../public/componentes/componenteButton.php");
                ?>
            </div> 
        </div>
    </div>

    <script>
        /* -- Slider -- */
        let currentIndex = 0;
        const slides = document.querySelectorAll('#slider li');

        const totalSlides = slides.length;

        document.getElementById('direita').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        });
        document.getElementById('esquerda').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlider();
        });

        function updateSlider() {
            const slider = document.getElementById('slider');
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }


    </script>
        
    <?php include('../../public/componentes/footer.php'); ?>
    </body>
</html>
