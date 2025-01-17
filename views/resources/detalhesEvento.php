<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Evento</title>
    <link rel="stylesheet" href="../css/detalhesEvento.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <div class="container">

    <section id="slider">
        <div id="slides">
            <ul id="slide">
                <li>
                    <img src="../images/horto-florestal.png" alt="Horto Florestal 1">
                </li>
                <li>
                    <img src="../images/horto-florestal.png" alt="Horto Florestal 2">
                </li>
                <li>
                    <img src="../images/horto-florestal.png" alt="Horto Florestal 3">
                </li>
            </ul>
        </div>
        <button class="buttonslider" id="esquerda">&lt;</button>
        <button class="buttonslider" id="direita">&gt;</button>
    </section>

    <div class="event-details">
        <h1>Feira do Auau</h1>
        <p>Feira arrecadativa de moda no Horto Florestal, venha comprar roupas para você ou para seu pet! Todos os lucros da feira serão direcionados ao SOS Patinhas.</p>
        <button>Compartilhar</button>
    </div>

    <div class="carousel">

        <div class="card">
        <img src="../images/horto-florestal.png" alt="Adote um Amigo">
            <div class="card-info">
                <h3>Adote um Amigo</h3>
                <p>Feira de adoção.</p>
                <div class="local">
                    <span>📍</span> Campo Grande MS, Horto florestal
                </div>
            </div>
        </div>

        <div class="card">
            <img src="../images/parque-dos-poderes.png" alt="Adote um Amigo">
            <div class="card-info">
                <h3>Adote um Amigo</h3>
                <p>Feira de adoção.</p>
                <div class="local">
                    <span>📍</span> Campo Grande MS, Parque dos Poderes
                </div>
            </div>
        </div>

        <div class="card">
            <img src="../images/bosque.png" alt="Junto por eles">
            <div class="card-info">
                <h3>Junto por eles</h3>
                <p>Passeata pelos direitos dos animais.</p>
                <div class="local">
                    <span>📍</span> Campo Grande MS, Bosque dos Ipês
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slideList = document.querySelector('#slide');
        const totalSlides = document.querySelectorAll('#slide li').length;
        currentSlide = (index + totalSlides) % totalSlides;
        slideList.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    document.getElementById('esquerda').addEventListener('click', prevSlide);
    document.getElementById('direita').addEventListener('click', nextSlide);
  </script>

    <?php include('../templates/footerUser.php')?>
</body>
</html>