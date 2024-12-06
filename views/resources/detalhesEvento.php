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
   
    <div class="slider">
      <div class="slides">
        <div class="slide">
          <img src="../images/horto-florestal.png" alt="Horto Florestal 1">
        </div>
        <div class="slide">
          <img src="../images/horto-florestal.png" alt="Horto Florestal 2">
        </div>
        <div class="slide">
          <img src="../images/horto-florestal.png" alt="Horto Florestal 3">
        </div>
      </div>
      <div class="slider-nav">
        <button onclick="prevSlide()">
          <img src="../images/Ellipse-9.png" alt="botão anterior">
        </button>
        <button onclick="nextSlide()">
          <img src="../images/Ellipse-9.png" alt="botão próximo">
        </button>
      </div>
    </div>

    <div class="event-details">
      <h1>Feira do Auau</h1>
      <p>Feira arrecadativa de moda no Horto Florestal, venha comprar roupas para você ou para seu pet! Todos os lucros da feira serão direcionados ao SOS Patinhas.</p>
      <button>Compartilhar</button>
    </div>
    
    <div class="carousel">
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
      const slides = document.querySelector('.slides');
      const totalSlides = document.querySelectorAll('.slide').length;
      currentSlide = (index + totalSlides) % totalSlides;
      slides.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }
  </script>

    <?php include('../templates/footerUser.php')?>
</body>
</html>