<?php
  $cssLink  = '/sospatinhas/public/css/quemSomos.css';
  $tipo = 'User';
  include('app/componentes/default/topHTML.php');
?>

<section class="carroseis">
  <div class="carouselEquipe">
    <div class="imagemEquipe">
      <img src="/sospatinhas/public/images/default/grupo.png" alt="Imagem da nossa equipe completa">
    </div>
      <h1 class="titulo">Nossa Equipe</h1>
      <div id="carouselEquipe">
        <?php
          $cardComponentEquipe = array();

            for ($i = 0; $i < 3; $i++) {
              ob_start();
              include('app/componentes/equipeCard.php');
              $cardComponentEquipe[] = ob_get_clean();
            }

            $cardComponents = $cardComponentEquipe;
            $carouselId = 'carouselEquipe';
            @include('app/componentes/carossel.php');
        ?>
      </div>
  </div>
  
  <div class="carouselParceiros">
    <h1 class="titulo">Nossos Parceiros</h1>
    <div id="carouselParceiros">
        <?php
        $cardComponentParceiros = array();

        for ($i = 0; $i < 3; $i++) {
            ob_start(); 
            include('app/componentes/parceirosCard.php');
            $cardComponentParceiros[] = ob_get_clean(); 
        }

        $cardComponents = $cardComponentParceiros;
        $carouselId = 'carouselParceiros';
        @include('app/componentes/carossel.php');
        ?>
    </div>
  </div>
</section>

<?php
  include('app/componentes/default/bottomHTML.php');
?>