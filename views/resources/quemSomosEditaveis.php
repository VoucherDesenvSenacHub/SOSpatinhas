<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça nossa equipe e nossos parceiros. Somos uma equipe dedicada a fornecer soluções inovadoras para nossos clientes.">
    <title>Quem Somos</title>
    <link rel="stylesheet" href="../css/quemSomos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
</head>
<body>
  <?php include('../templates/navbarUser.php'); ?>
  
<section class="corpo container">
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
</section> 

<?php include('../templates/footerUser.php'); ?>

</body>
</html>