<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/eventos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
</head>
<body>
<?php
@include('../templates/navbarUser.php');
?>

<section class="corpo container">   
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
</section>

<?php @include('../templates/footerUser.php'); ?>

</body>
</html>