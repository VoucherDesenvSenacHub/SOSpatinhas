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

    <section class="corpo container" >
      <div class="conteudo">

        <div class="slideshow-container">
          <div class="slider">
    
            <div class="slide fade">
              <img class= "EventoSlides" src="../images/horto-florestal.png" alt="Horto Florestal 1">
            </div>
    
            <div class="slide fade">
              <img class= "EventoSlides" src="../images/slide1.png" alt="Horto Florestal 2">
            </div>
    
            <div class="slide fade">
              <img class= "EventoSlides" src="../images/slide2.png" alt="Horto Florestal 3">
            </div>
    
            <div class="btn-slide">
            <span class="botao" onclick="OutroSlide(1)" > </span>
            <span class="botao" onclick="OutroSlide(2)" > </span>
            <span class="botao" onclick="OutroSlide(3)" > </span>
            </div>

            <div class="localEvento">
              <img src="../images/marcador_1.png" alt="marcador_1">
              <p>Campo Grande MS, Horto Florestal</p>
            </div>

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
            <button id="carousel-prev">&#10094;</button>
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
            <button id="carousel-next">&#10095;</button>
          </div>
        </div>
      </div>
    </section>

    <script> 
    let PrimeiroSlide = 1;
    mostrarSlide (PrimeiroSlide);

    function OutroSlide(n){
      mostrarSlide(PrimeiroSlide = n);
    }

    function mostrarSlide(n){
      let i;
      let slides = document.getElementsByClassName("slide");
      let dots =  document.getElementsByClassName("botao");
      if (n > slides.length) {PrimeroSlide = 1}
      if (n < 1) {PrimeiroSlide = slides.length}
      for (i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[PrimeiroSlide-1].style.display = "block";
      dots[PrimeiroSlide-1].className += " active";
    }


    // outros eventos

    const carouselContainer = document.querySelector(".carousel-track");
    const carouselCards = document.querySelector(".carousel-track .card");

    const prevButton = document.getElementById("carousel-prev");
    const nextButton = document.getElementById("carousel-next");

    nextButton.addEventListener("click", () => {
      const carouselWidth = carouselCards[0].clientWidth;
      carouselContainer.scrollBy({ left: carouselWidth, behavior:"smooth"});
    });

    nextButton.addEventListener("click", () => {
      const carouselWidth = carouselCards[0].clientWidth;
      carouselContainer.scrollBy({ left: -carouselWidth, behavior: "smooth"});
    });





    </script>

<?php include('../templates/footerUser.php')?>
</body>
</html>