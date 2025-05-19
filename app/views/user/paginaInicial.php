<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/paginaInicial.css">
    <title>Pagina Inicio </title>
</head>
<body>
    <section class="carrossel-section">
        <div class="carrosel-container">
            <button class="seta-esquerda" onclick="mudarSlide(-1)">&#10094;</button>

            <img class="slide ativo" src="../../../public/images/default/cachorro1.png" alt="Cachorro machucado 1" >
            <img class="slide" src="../../../public/images/default/cachorro2.png" alt="Cachorro machucado 2">

            <button class="seta-direita" onclick="mudarSlide(1)">&#10095;</button>
        </div>

        <div class="texto-doe">
            <h2>Doe e mude destinos!</h2>
            <P>
            Aqui, cada vaquinha é criada por alguém que luta<br>
            para salvar seu melhor amigo de quatro patas.<br>
            Você pode fazer parte dessa rede do bem<br>
            ajudando como e com o que puder.<br>
            Juntos, levamos esperança pra quem mais precisa.
            </P>
            <a href="" class="botao">CONTRIBUA COM A ONG</a>
        </div>



    </section>

    <script>
        let slideAtual = 0;
        const slides = document.querySelectorAll('.slide');
        
        function mudarSlide(direcao) {
            slides[slideAtual].classList.remove('ativo');
            slideAtual = (slideAtual + direcao + slides.length) % slides.length;
            slides[slideAtual].classList.add('ativo');
        }
    </script>
</body>
</html>