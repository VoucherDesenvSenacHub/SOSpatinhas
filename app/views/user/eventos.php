<?php
  $cssLink  = '/sospatinhas/public/css/eventos.css';
  include('../../componentes/default/topHTML.php');
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
            require_once('../../models/EventoModel.php');
            $eventoModel = new EventoModel();

            $acao = ['ACAO' => "R"];
            $jsonData = json_encode($acao);
            $resultado = $eventoModel->CRUD($jsonData);

            $cardComponents2 = array();
            foreach ($resultado as $evento) {
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