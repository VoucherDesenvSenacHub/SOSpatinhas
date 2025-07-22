<?php
  $cssLink  = '/sospatinhas/public/css/detalhesEvento.css';
  include('../../componentes/default/topHTML.php');
?>

<section class="conteudo">
  <div class="imgEDetalhesEvento">
    <div class="slider">
      <div class="slideFade">
        <img class= "eventoSlides" src="../../public/images/default/semfoto.png" alt="Horto Florestal 1">
      </div>

      <div class="btnSlide">
        <span class="botao" onclick="OutroSlide(1)" > </span>
        <span class="botao" onclick="OutroSlide(2)" > </span>
        <span class="botao" onclick="OutroSlide(3)" > </span>
      </div>

      <div class="localEvento">
        <img src="../../public/images/default/semfoto.png" alt="Icone de local">
        <p>
          <?= $evento[0]["CIDADE"].' '. $evento[0]["ESTADO"].', '. $evento[0]["LOCAL_EVENTO"]; ?>
        </p>
      </div>
    </div>

    <div class="detalhesEvento">
      <h1>
        <?= $evento[0]["TITULO"]?>
      </h1>
      <p>
        <?= $evento[0]["DESCRICAO"]?>
      </p>
      <div class="buttonComponente">
        <?php
          $funcaoClick = "compartilhar()";
          $titulo = "Compartilhar";
          include('app/componentes/componenteButton.php');
        ?>
      </div>
    </div>
  </div>
    
  <div class="carrosselContainer">
    <h1 class="titulo">Outros Eventos</h1>
    <div id="eventosCarrosel">
      <?php
      $cardComponents2 = array();
      
      foreach ($resultado as $evento) {
        ob_start();
        include('app/componentes/eventosCard.php');
        $cardComponents2[] = ob_get_clean();
      }

      $cardComponents = $cardComponents2;
      $carouselId = 'carousel2';
      include('app/componentes/carossel.php');
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

<?php include('app/componentes/default/bottomHTML.php'); ?>