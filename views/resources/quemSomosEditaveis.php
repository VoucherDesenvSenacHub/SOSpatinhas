<?php
  $cssLink  = '../css/quemSomos.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
?>
<section class="carroseis">
  <div class="carouselEquipe">
    <div class="imagemEquipe">
      <img src="../images/grupo.png" alt="Imagem da nossa equipe completa">
    </div>
      <h1 class="titulo">Nossa Equipe</h1>
      <div id="carouselEquipe">
        <?php
          $cardComponentEquipe = array();

            for ($i = 0; $i < 3; $i++) {
              ob_start();
              include('../templates/equipeCardEdit.php');
              $cardComponentEquipe[] = ob_get_clean();
            }

            $cardComponents = $cardComponentEquipe;
            $carouselId = 'carouselEquipe';
            @include('../templates/carossel.php');
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
            include('../templates/parceirosCardEdit.php');
            $cardComponentParceiros[] = ob_get_clean(); 
        }

        $cardComponents = $cardComponentParceiros;
        $carouselId = 'carouselParceiros';
        @include('../templates/carossel.php');
        ?>
    </div>
  </div>
</section>

<?php
    include('../templates/default/bottomHTML.php');
?>