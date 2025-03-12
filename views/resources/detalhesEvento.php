<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/detalhesEvento.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
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
            <button onclick="compartilhar()">Compartilhar</button>
          </div>
          
        </div>
          
        <div class="carrossel-container">
          <h1 class="titulo">Outros Eventos</h1>
          <div id="eventosCarrosel">
            <?php
            $cardComponents2 = array();

            for ($i = 0; $i < 5; $i++) {
                ob_start(); 
                include('../templates/eventosCard.php');
                $cardComponents2[] = ob_get_clean();
            }
    
            $cardComponents = $cardComponents2;
            $carouselId = 'carousel2';
            @include('../templates/carossel.php');
            ?>
          </div>
        </div>
      </div>

    </section>

    <script> 
    function compartilhar() {
        if (navigator.share) {
            navigator.share({ url: window.location.href }).catch((error) => console.log("Erro de Compartilhamento:", error));
        } else {
            alert("Sharing not supported on this browser.");
        }
    }
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

    </script>

<?php include('../templates/footerUser.php')?>
</body>
</html>