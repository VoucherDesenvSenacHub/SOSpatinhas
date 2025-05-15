<?php
  $cssLink  = 'public/css/eventos.css';
  include('app/componentes/default/topHTML.php');
?>

<section class="content">
    <div class="row">
        <h1 class="titulo">Arrecadações</h1>
        <div id="arrecadacaoCarrosel">
            <?php
                $cardComponents1 = array();

                for ($i = 0; $i < 5; $i++) {    
                    ob_start(); 
                    include('app/componentes/arrecadacaoCard.php'); 
                    $cardComponents1[] = ob_get_clean();
                }

                $cardComponents = $cardComponents1;
                $carouselId = 'carousel1';
                @include('app/componentes/carossel.php');
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
                include('app/componentes/eventosCard.php');
                $cardComponents2[] = ob_get_clean();
            }
    
            $cardComponents = $cardComponents2;
            $carouselId = 'carousel2';
            @include('app/componentes/carossel.php');
            ?>
        </div>
    </div>
</section>

<?php
    include('app/componentes/default/bottomHTML.php');
?>