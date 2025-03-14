<?php
  $cssLink  = '../css/eventos.css';
  $tipo = 'User';
  include('../templates/default/topHTML.php');
?>

<section class="content">
    <div class="row">
        <h1 class="titulo">Arrecadações</h1>
        <div id="arrecadacaoCarrosel">
            <?php
                $cardComponents1 = array();

                for ($i = 0; $i < 5; $i++) {
                    ob_start(); 
                    include('../templates/arrecadacaoCard.php'); 
                    $cardComponents1[] = ob_get_clean();
                }

                $cardComponents = $cardComponents1;
                $carouselId = 'carousel1';
                @include('../templates/carossel.php');
            ?>
        </div> 
    </div>
        
    <div class="row">
        <h1 class="titulo">Eventos</h1>
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
</section>

<?php
    include('../templates/default/bottomHTML.php');
?>