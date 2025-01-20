<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/eventos.css">
</head>
<body>
<?php
@include('../templates/navbarUser.php');
?>

    <section class="container">

            <h1 class="texto">Arrecadações</h1>
            <div id="imgAnimal">
                    <div class="item">
                        <img src="../images/eventosImg/eventos2.png" class="animal"alt="">
                        <h3 class="texto-overlay">Ajude o Freguês</h3>
                        <div class="box-anim"></div>
                        <div class="box-saibamais">Saiba Mais</div>
                    </div>
                    <div class="item">
                        <img src="../images/eventosImg/eventos6.png" class="animal"alt="">
                        <h3 class="texto-overlay">Ajude a Nina</h3>
                        <div class="box-anim"></div>
                        <div class="box-saibamais">saiba mais</div>
                    </div>
                    <div class="item">
                        <img src="../images/eventosImg/eventos3.png" class="animal"alt="">
                        <h3 class="texto-overlay">Ajude o Cascudo</h3>
                        <div class="box-anim"></div>
                        <div class="box-saibamais">saibamais</div>
                    </div>
                    
            </div>

            <h1 class="texto">Eventos</h1>
            <div id="imgEventos">
                <div class="item">
                    <img src="../images/eventosImg/eventos1.png" class="eventos"alt="">
                    <div class="box-event">
                        <h1>Feira do AuAu</h1>                
                    </div>
                </div>
                <div class="item">
                    <img src="../images/eventosImg/eventos4.png" class="eventos"alt="">
                    <div class="box-event"></div>
                </div>
                <div class="item">
                    <img src="../images/eventosImg/eventos5.png" class="eventos"alt="">
                    <div class="box-event"></div>   
                </div>
            </div>

    </section>
    
    
<?php
@include('../templates/footerUser.php');
?>
</body>
</html>