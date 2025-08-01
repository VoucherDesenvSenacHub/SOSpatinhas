<?php
/*
    if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    echo '<script type="text/javascript">
            alert("Você precisa estar logado como administrador para acessar esta página.");
            window.location.href = "loginADM.php";
          </script>';
    exit();
    }     */

  $cssLink  = '../../public/css/quemSomos.css';
  $tipo = 'Adm';
  include('app/componentes/default/topHTML.php');
?>
<body>
<section class="carroseis">
  <div class="carouselEquipe">
    <div class="imagemEquipe">
      <img src="../../public/images/grupo.png" alt="Imagem da nossa equipe completa">
    </div>
      <h1 class="titulo">Nossa Equipe</h1>
      <div id="carouselEquipe">
        <?php
          $cardComponentEquipe = array();

            for ($i = 0; $i < 3; $i++) {
              ob_start();
              include('../../componentes/equipeCardEdit.php');
              $cardComponentEquipe[] = ob_get_clean();
            }

            $cardComponents = $cardComponentEquipe;
            $carouselId = 'carouselEquipe';
            @include_once('../../componentes/carossel.php');
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
            include('../../componentes/parceirosCardEdit.php');
            $cardComponentParceiros[] = ob_get_clean(); 
        }

        $cardComponents = $cardComponentParceiros;
        $carouselId = 'carouselParceiros';
        @include('../../componentes/carossel.php');
        ?>
    </div>
  </div>
</section>

<script> 
    // popup do layout input para apenas nome
    const btn_popup1 = document.querySelectorAll('.btn-card-equipe');
    btn_popup1.forEach(button =>
    {
      button.onclick = function()
      {
        chamar_popup('input_name');
      };
    });
    // popup do layout upload img
    const btn_popup2 = document.querySelectorAll('.btn-card-parceiro');
    btn_popup2.forEach(button =>
    {
      button.onclick = function()
      {
        chamar_popup('upload');
      };
    });
</script>

<?php
  include('../../componentes/default/bottomHTML.php');
?>