<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SOS Patinhas</title>
        <link rel="stylesheet" href="../../public/css/editarPaginaInicio.css">
        <link rel="stylesheet" href="../../public/css/default.css">
    </head>
    <body>
        <?php 
            include('../../public/componentes/navbarAdm.php');
            include('../../public/componentes/modalEditar.php')
         ?>

        <section id="bannerMobas">
            <div class="imgBanner">
                <img src="../../public/images/inicial/Telinha1.png" alt="Cachorros Felizes">
            </div>
        </section>

        <section id="secslider" >
            <div id="divslider">
                <ul id="slider">
                    <li>
                        <img src="../../public/images/btnEditar.png" alt="btnEditar" class="btnEditar">
                        <img src="../../public/images/fotoinicio1.png" alt="Foto do Carrosel">
                    </li>
                    <li>
                        <img src="../../public/images/btnEditar.png" alt="btnEditar" class="btnEditar">
                        <img src="../../public/images/fotoinicio2.png" alt="Foto do Carrosel">
                    </li>
                    <li>
                        <img src=".../../public/images/btnEditar.png" alt="btnEditar" class="btnEditar">
                        <img src="../../public/images/fotoinicio3.png" alt="Foto do Carrosel">
                    </li>
                </ul>
            </div>
            <button class="buttonslider" id="esquerda"><</button>
            <button class="buttonslider" id="direita">></button>
        </section>

        <section id="seccards">
            <div class="card">
                <img src="../../public/images/btnEditar.png" alt="btnEditar" class="btnEditar">
                <img src="../../public/images/imgcard1.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                    </div>
            </div>
            <div class="card">
                <img src="../../public/images/btnEditar.png" alt="btnEditar" class="btnEditar">   
                <img src="../../public/images/imgcard2.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Participe dos nossos eventos!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                    </div>
            </div>
            <div class="card">
                <img src="../../public/images/imgcard3.png" alt="Imagem Card">
                <img src="../../public/images/btnEditar.png" alt="btnEditar" class="btnEditar">
                    <div class="ctdcard">
                        <p class="textcard">Adote um amigo!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                    </div>
            </div>
        </section>

        <section id="sliderDoacao">
            <div class="cardDoacao">
                <div class="divImg">
                    <img src="../../public/images/inicial/slider1.png" alt="Foto Animal">
                </div>
                <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                </div>
            </div>
            <div class="cardDoacao">
                <div class="divImg">
                    <img src="../../public/images/inicial/slider2.png" alt="Foto Animal">
                </div>
                <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                </div>
            </div>
            <div class="cardDoacao">
                <div class="divImg">
                    <img src="../../public/images/inicial/slider3.png" alt="Foto Animal">
                </div>
                <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                </div>
            </div>
        </section>



        <?php include('../../public/componentes/footer.php') ?>
    </body>

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

        // script popup
        const btn_popup1 = document.querySelectorAll('.btnEditar');
        btn_popup1.forEach(button =>
        {
        button.onclick = function()
        {
            chamar_popup('upload');
        };
        });
    </script>
</html>