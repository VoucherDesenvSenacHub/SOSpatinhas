<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Inicio</title>
        <link rel="stylesheet" href="../css/paginaInicio.css">
    </head>
    <body class ="pagina-inicio">
        <!-- <?php include('../templates/navbarUser.php'); ?> -->

        <header id="header">
            <nav class="navbar">
                <a class="navbar-logo" href="./paginaInicio.php">
                    <img src="../images/Logo_Footer.png" alt="Logo">
                </a>

                <ul class="nav-links">
                    <a href="./blog.php">Blog</a>
                    <a href="./quemSomos.php">Quem Somos</a>
                    <a href="./comoAjudar.php">Como Ajudar</a>
                    <a href="./eventos.php">Eventos</a>
                    <a href="./adocao.php">Adoção</a>
                </ul>

                <div class="nav-right">
                    <div class="hamburger" onclick="toggleMenu()">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </nav>

            <div class="mobile-menu">
                <a href="./blog.php">Blog</a>
                <a href="./quemSomos.php">Quem Somos</a>
                <a href="./comoAjudar.php">Como Ajudar</a>
                <a href="./adocao.php">Adoção</a>
                <a href="./eventos.php">Eventos</a>
            </div>

            <script>
                function toggleMenu() {
                    const mobileMenu = document.querySelector('.mobile-menu');
                    mobileMenu.classList.toggle('show');
                }
            </script>
        </header>

        <section id="bannerMobas">
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
            <button class="buttonslider" id="esquerda"><</button>
            <button class="buttonslider" id="direita">></button>
        </section>

        <section id="seccards">
            <div class="card">
                <img src="../images/imgcard1.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Faça uma doação!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                    </div>
            </div>
            <div class="card">
                <img src="../images/imgcard2.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Participe dos nossos eventos!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
                    </div>
            </div>
            <div class="card">
                <img src="../images/imgcard3.png" alt="Imagem Card">
                    <div class="ctdcard">
                        <p class="textcard">Adote um amigo!</p>
                        <input type="button" value="Saiba Mais!" scr="" class="buttoncard">
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



        <?php include('../templates/footerUser.php') ?>
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


    </script>
</html>