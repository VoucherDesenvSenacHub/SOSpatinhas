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
        <div class="conteiner swiper">
            <div class="carousel">
                    <ul id="imgAnimal" class="card-list swiper-wrapper">
                        <li class="item">
                            <img src="../images/eventosImg/eventos2.png" class="animal" alt="">
                            <h3 class="texto-overlay">Ajude o Freguês</h3>
                            <div class="box-anim"></div>
                            <div class="box-saibamais"><h1>Saiba mais</h1></div>
                        </li>
                        <li class="item">
                            <img src="../images/eventosImg/eventos6.png" class="animal" alt="">
                            <h3 class="texto-overlay">Ajude a Nina</h3>
                            <div class="box-anim">
                                <div class="box-anim2"></div>
                            </div>
                            <div class="box-saibamais"><h1>Saiba mais</h1></div>
                        </li>
                        <li class="item">
                            <img src="../images/eventosImg/eventos3.png" class="animal" alt="">
                            <h3 class="texto-overlay">Ajude o Cascudo</h3>
                            <div class="box-anim"></div>
                            <div class="box-saibamais"><h2>Saiba mais</h2></div>
                        </li>
                    </ul>  
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
            </div>
        </div>
        <h1 class="texto">Eventos</h1>
        <div id="imgEventos">
            <div class="item" id="item-carousel">
                <img src="../images/eventosImg/eventos1.png" class="eventos" alt="">
                <div class="box-event">
                    <h2>Feira do AuAu</h2>
                    <h1>Feira arrecadativa de moda.</h1>
                    <div class="imgtext">
                        <img src="../images/eventosImg/pin.png" alt="" class="event-img">
                        <h2 class="textEvent">Campo Grande MS, Horto Florestal</h2>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../images/eventosImg/eventos4.png" class="eventos" alt="">
                <div class="box-event">
                    <h2>Adote um Amigo</h2>
                    <h1>Feira de adoção.</h1>
                    <div class="imgtext">
                        <img src="../images/eventosImg/pin.png" alt="" class="event-img">
                        <h2 class="textEvent">Campo Grande MS, Parque dos Poderes</h2>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../images/eventosImg/eventos5.png" class="eventos" alt=""> 
                <div class="box-event">
                    <h2>Juntos por Eles</h2>
                    <h1>Passeata pelos direitos dos animais.</h1>
                    <div class="imgtext">
                        <img src="../images/eventosImg/pin.png" alt="" class="event-img">
                        <h2 class="textEvent">Campo Grande MS, Parque dos Poderes</h2>
                    </div>
                </div>   
            </div>
        </div>
</section>


<?php
@include('../templates/footerUser.php');
?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper('.carousel', {
  
  loop: true,
  spaceBetween:30,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints:{
      0:{
          slidesPerView: 1
      },
      768:{
          slidesPerView: 2
      },
      1024:{
          slidesPerView: 3
      }
  }


});
</script>

</body>

</html>