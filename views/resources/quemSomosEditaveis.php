<?php
  $cssLink  = '../css/quemSomos.css';
  $tipo = 'Adm';
  include('../templates/default/topHTML.php');
  include('../templates/modalEditar.php')
?>
<body>
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
            @include_once('../templates/carossel.php');
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

<script> 
    // popup do layout input simples
    const btn_temp = document.querySelectorAll('.btn-card-equipe');
    btn_temp.forEach(button => {
        button.onclick = function()
        {
          chamar_popup('input');
        };
    });

    // popup do layout upload img
    const btn_no_input = document.querySelectorAll('.btn-card-parceiro');
    btn_no_input.forEach(button =>
    {
        button.onclick = function()
        {
          chamar_popup('textArea');
        };
    });
</script>

<?php
  include('../templates/modalEditar.php');
  include('../templates/default/bottomHTML.php');
?>