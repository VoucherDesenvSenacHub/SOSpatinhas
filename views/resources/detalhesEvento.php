<?php
  $cssLink  = '../css/detalhesEvento.css';
  $tipo = 'User';
  include('../templates/default/topHTML.php');
?>

<div class="conteudo">

  <div class="slideshow-container">
    <div class="slider">

      <div class="slide fade">
        <img class= "EventoSlides" src="../images/horto-florestal.png" alt="Horto Florestal 1">
      </div>

      <div class="slide fade">
        <img class= "EventoSlides" src="../images/eventosImg/feira.jpeg" alt="Horto Florestal 2">
      </div>

      <div class="slide fade">
        <img class= "EventoSlides" src="../images/eventosImg/feira1.jpg" alt="Horto Florestal 3">
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
      <?php
        // btn Compartilhar
        $funcaoClick = "compartilhar()";
        $titulo = "Compartilhar";
        include('../templates/componenteButton.php');
      ?>
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
    if (n > slides.length) {PrimeiroSlide = 1}
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

<?php
    include('../templates/default/bottomHTML.php');
?>