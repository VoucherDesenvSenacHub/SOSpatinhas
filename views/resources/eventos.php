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
            <div class="wrapper">
                    <i id="left">l</i>
                    <ul id="imgAnimal" class="carousel">
                        <li class="card">
                            <img src="../images/eventosImg/eventos2.png" class="animal" alt="">
                            <h3 class="texto-overlay">Ajude o Freguês</h3>
                            <div class="box-anim"></div>
                            <div class="box-saibamais"><h1>Saiba mais</h1></div>
                        </li>
                        <li class="card">
                            <img src="../images/eventosImg/eventos6.png" class="animal" alt="">
                            <h3 class="texto-overlay">Ajude a Nina</h3>
                            <div class="box-anim">
                                <div class="box-anim2"></div>
                            </div>
                            <div class="box-saibamais"><h1>Saiba mais</h1></div>
                        </li>
                        <li class="card">
                            <img src="../images/eventosImg/eventos3.png" class="animal" alt="">
                            <h3 class="texto-overlay">Ajude o Cascudo</h3>
                            <div class="box-anim"></div>
                            <div class="box-saibamais"><h2>Saiba mais</h2></div>
                        </li>
                    </ul>
                    <i id="right">r</i>  
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

<script>
    const carousel = document.querySelector(".carousel");
const arrows = document.querySelectorAll(".wrapper i");
const firstCard = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children];


/// carrosselll


let cardPerView = Math.round(carousel.offsetWidth / firstCard);

carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

arrows.forEach(btn => {
    btn.addEventListener("click", () =>{
        carousel.scrollLeft += btn.id === "left" ? -firstCard : firstCard;
    });
});



// scrolll
let isDragging = false , startX , startScrollLeft;

const dragStart = (e) =>{
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}


const dragging = (e) => {
    if(!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () =>{
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () =>{
    if(carousel.scrollLeft === 0 ){
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth );
        carousel.classList.remove("no-transition");

    } else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth){
        carousel.classList.add("no-transition");
        carousel.scrollLeft =  carousel.offsetWidth;
        carousel.classList.remove("no-transition");

    }
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);



</script>

</body>

</html>