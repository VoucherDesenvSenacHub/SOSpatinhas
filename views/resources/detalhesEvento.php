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
        
    <div class="slideshow-container">

      <img class= "EventoSlides" src="../images/horto-florestal.png" alt="Horto Florestal 1">
      <img class= "EventoSlides" src="../images/horto-florestal.png" alt="Horto Florestal 2">
      <img class= "EventoSlides" src="../images/horto-florestal.png" alt="Horto Florestal 3">

      <div class="btn-white">
      <span class="botao" onclick="SlideAtual(1)" > </span>
      <span class="botao" onclick="SlideAtual(2)" > </span>
      <span class="botao" onclick="SlideAtual(3)" > </span>
      </div>
      
      
      <div class="event-details">
          <h1>Feira do Auau</h1>
          <p>Feira arrecadativa de moda no Horto Florestal, venha comprar roupas para você ou para seu pet! Todos os lucros da feira serão direcionados ao SOS Patinhas.</p>
          <button>Compartilhar</button>
      </div>
      
    </div>




    <div class="carousel-container">
  <h2>Outros eventos...</h2>
  <div class="carousel">
    <button class="carousel-btn prev">&#10094;</button>
    <div class="carousel-track">
      <div class="card">
        <img src="../images/horto-florestal.png" alt="Feira do Auau">
        <div class="card-info">
          <h3>Feira do Auau</h3>
          <p>Feira arrecadativa de moda.</p>
          <div class="local">
          <img src="../images/pin_info.png"></img> Campo Grande MS, Horto Florestal
          </div>
        </div>
      </div>
      <div class="card">
        <img src="../images/parque-dos-poderes.png" alt="Adote um Amigo">
        <div class="card-info">
          <h3>Adote um Amigo</h3>
          <p>Feira de adoção.</p>
          <div class="local">
            <img src="../images/pin_info.png"></img> Campo Grande MS, Parque dos Poderes
          </div>
        </div>
      </div>
      <div class="card">
        <img src="../images/bosque.png" alt="Junto por eles">
        <div class="card-info">
          <h3>Junto por eles</h3>
          <p>Passeata pelos direitos dos animais.</p>
          <div class="local">
          <img src="../images/pin_info.png"></img> Campo Grande MS, Bosque dos Ipês
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-btn next">&#10095;</button>
  </div>
</div>

    <script> 
    var PrimeiroSlide = 1;
    mostrarSlide (PrimeiroSlide);

    function OutroSlide(n){
        mostrarSlide(PrimeiroSlide += n);
    }

    function SlideAtual(n){
        mostrarSlide(PrimeiroSlide = n);
    }

    function mostrarSlide(n){
        var i;
        var slides = document.getElementsByClassName("EventoSlides");
        var botao = document.getElementsByClassName("botao");
        if (n > slides.length) {PrimeiroSlide = 1}
        if (n < 1) {PrimeiroSlide = slides.length}
        for (i = 0; i < slides.length; i++){
          slides[i].style.display = "none";
        }
        for (i = 0; i < botao.length; i++) {
          botao[i].classList.remove("active");
      }
        slides[PrimeiroSlide-1].style.display = "block";
        botao[PrimeiroSlide - 1].classList.add("active");
    }

    // const track = document.querySelector('.carousel-track');
    // const prevButton = document.querySelector('.carousel-btn.prev');
    // const nextButton = document.querySelector('.carousel-btn.next');
    
    // let currentIndex = 0;
    
    // function updateCarousel() {
    //   const cardWidth = document.querySelector('.card').offsetWidth;
    //   track.style.transform = `translateX(-${currentIndex * (cardWidth + 10)}px)`;
    // }
    
    
    // prevButton.addEventListener('click', () => {
    //   currentIndex = Math.max(currentIndex - 1, 0);
    //   updateCarousel();
    // });
    
    // nextButton.addEventListener('click', () => {
    //   const cardCount = document.querySelectorAll('.card').length;
    //   const visibleCards = Math.floor(track.offsetWidth / (document.querySelector('.card').offsetWidth + 10));
    //   currentIndex = Math.min(currentIndex + 1, cardCount - visibleCards);
    //   updateCarousel();
    // });
    // window.addEventListener('resize', updateCarousel);



    </script>

    <?php include('../templates/footerUser.php')?>
</body>
</html>