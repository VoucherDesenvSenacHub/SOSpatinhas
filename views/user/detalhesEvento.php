<?php
  $cssLink  = '../../public/css/detalhesEvento.css';
  $tipo = 'User';
  include('../../componentes/default/topHTML.php');
?>

<section class="conteudo">
  <div class="imgEDetalhesEvento">
    <div class="slider">
      <div class="slide fade">
        <img class= "eventoSlides" src="../../public/images/horto-florestal.png" alt="Horto Florestal 1">
      </div>

      <div class="slide fade">
        <img class= "eventoSlides" src="../../public/images/horto-florestal.png" alt="Horto Florestal 2">
      </div>

      <div class="slide fade">
        <img class= "eventoSlides" src="../../public/images/horto-florestal.png" alt="Horto Florestal 3">
      </div>

      <div class="btnSlide">
        <span class="botao" onclick="OutroSlide(1)" > </span>
        <span class="botao" onclick="OutroSlide(2)" > </span>
        <span class="botao" onclick="OutroSlide(3)" > </span>
      </div>

      <div class="localEvento">
        <img src="../../public/images/marcador_1.png" alt="Icone de local">
        <p>Campo Grande MS, Horto Florestal</p>
      </div>
    </div>

    <div class="detalhesEvento">
      <h1>Feira do Auau</h1>
      <p>Feira arrecadativa de moda no Horto Florestal, venha comprar roupas para você ou para seu pet! Todos os lucros da feira serão direcionados ao SOS Patinhas.</p>
      <?php
        $funcaoClick = "compartilhar()";
        $titulo = "Compartilhar";
        include('../../componentes/componenteButton.php');
      ?>
    </div>
  </div>
    
  <div class="carrosselContainer">
    <h1 class="titulo">Outros Eventos</h1>
    <div id="eventosCarrosel">
      <?php
      $cardComponents2 = array();
      for ($i = 0; $i < 5; $i++) {
          ob_start(); 
          include('../../componentes/eventosCard.php');
          $cardComponents2[] = ob_get_clean();
      }

      $cardComponents = $cardComponents2;
      $carouselId = 'carousel2';
      include('../../componentes/carossel.php');
      ?>
    </div>
  </div>
</section>

<script> 
  let PrimeiroSlide = 1;
  mostrarSlide (PrimeiroSlide);

  function OutroSlide(n) {
    mostrarSlide(PrimeiroSlide = n);
  }

  function mostrarSlide(n) {
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
</script>

<?php include('../../componentes/default/bottomHTML.php'); ?>