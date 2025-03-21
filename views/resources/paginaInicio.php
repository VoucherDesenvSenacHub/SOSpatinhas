<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="<?php echo $cssLink; ?>">
    <link rel="icon" type="image/png" href="../images/icons/favicon.png">
</head>
<body>
<?php include('../templates/navbar'.$tipo.'.php'); ?>
<div class="row" id="cima">
    <div class="containerCarrossel">
        <div id="homeCarrosel">
            <?php
                $cardComponents1 = array();

                for ($i = 0; $i < 5; $i++) {
                    ob_start(); 
                    include('../templates/homeCard.php'); 
                    $cardComponents1[] = ob_get_clean();
                }

                $cardComponents = $cardComponents1;
                $carouselId = 'homeCarrosel1';
                @include('../templates/carossel.php');
            ?>
        </div> 
    </div>
</div>
</div>

<div class="row" id="meio">
    <div class="texto">
        <h1></h1>
        <p></p>
    </div>
    <div class="imgBtn">
        <div class="divImgMeio">
            <img src="" alt="">
        </div>
        <div class="divBtnMeio">
            <!-- componente do btn -->
        </div>
    </div>
</div>

<div class="row" id="baixo">
    <div class="cardSaibaMais">
        <p class="titulo"></p>
        <div class="divImgBaixo">
            <!-- componete do btn -->
        </div>
        <div class="divBtnBaixo">
            <!-- componete do btn -->
        </div> 
    </div>

    <div class="cardSaibaMais">
        <p class="titulo"></p>
        <div class="divImgBaixo">
            <!-- componete do btn -->
        </div>
        <div class="divBtnBaixo">
            <!-- componete do btn -->
        </div> 
    </div>

    <div class="cardSaibaMais">
        <p class="titulo"></p>
        <div class="divImgBaixo">
            <!-- componete do btn -->
        </div>
        <div class="divBtnBaixo">
            <!-- componete do btn -->
        </div> 
    </div>
</div>
    
</body>
</html>




<!-- <section id="bannerMobas">
            <div class="imgBanner">
                <img src="../images/inicial/Telinha1.png" alt="Cachorros Felizes">
            </div>
        </section>

        <section id="secslider" >
            <div id="divslider">
                <ul id="slider">
                    <li>
                        <img src="../images/fotoinicio1.png" alt="Foto do Carrosel">
                    </li>
                    <li>
                        <img src="../images/fotoinicio2.png" alt="Foto do Carrosel">
                    </li>
                    <li>
                        <img src="../images/fotoinicio3.png" alt="Foto do Carrosel">
                    </li>
                </ul>
            </div>
            <button class="buttonslider" id="esquerda"></button>
            <button class="buttonslider" id="direita"><img src="../images/icons/btn_direito.png" alt=""></button>
        </section>

        <section id="seccards">
            <div class="card">
                <img src="../images/imgcard1.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input 
                            type="button" 
                            value="Saiba Mais!" 
                            scr="" 
                            class="buttoncard" 
                            onclick="window.location.href = 'comoAjudar.php'">
                    </div>
            </div>
            <div class="card">
                <img src="../images/imgcard2.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Participe dos nossos eventos!</p>
                        <input 
                            type="button" 
                            value="Saiba Mais!" 
                            scr="" 
                            class="buttoncard" 
                            onclick="window.location.href = 'eventos.php'">
                    </div>
            </div>
            <div class="card">
                <img src="../images/imgcard3.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Adote um amigo!</p>
                        <input 
                            type="button" 
                            value="Saiba Mais!" 
                            scr="" 
                            class="buttoncard" 
                            onclick="window.location.href = 'adocao.php'">
                </div>
            </div>
        </section>

        <section id="sliderDoacao">
            <div class="cardDoacao">
                <div class="divImg">
                    <img src="../images/inicial/slider1.png" alt="Foto Animal">
                </div>
                <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                </div>
            </div>
            <div class="cardDoacao">
                <div class="divImg">
                    <img src="../images/inicial/slider2.png" alt="Foto Animal">
                </div>
                <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                </div>
            </div>
            <div class="cardDoacao">
                <div class="divImg">
                    <img src="../images/inicial/slider3.png" alt="Foto Animal">
                </div>
                <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                </div>
            </div>
        </section>
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


    </script> -->