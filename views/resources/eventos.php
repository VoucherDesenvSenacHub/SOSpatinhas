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
        <div class="carousel">
            <div class="carousel-container" id="carouselContainer">
                <div id="imgAnimal">
                    <div class="item">
                        <img src="../images/eventosImg/eventos2.png" class="animal" alt="">
                        <h3 class="texto-overlay">Ajude o Freguês</h3>
                        <div class="box-anim"></div>
                        <div class="box-saibamais"><h1>Saiba mais</h1></div>
                    </div>
                    <div class="item">
                        <img src="../images/eventosImg/eventos6.png" class="animal" alt="">
                        <h3 class="texto-overlay">Ajude a Nina</h3>
                        <div class="box-anim">
                            <div class="box-anim2"></div>
                        </div>
                        <div class="box-saibamais"><h1>Saiba mais</h1></div>
                    </div>
                    <div class="item">
                        <img src="../images/eventosImg/eventos3.png" class="animal" alt="">
                        <h3 class="texto-overlay">Ajude o Cascudo</h3>
                        <div class="box-anim"></div>
                        <div class="box-saibamais"><h2>Saiba mais</h2></div>
                    </div>
                </div>
            </div>
            <button class="carousel-button next" onclick="moveSlide(1)">❯</button>
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
</body>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const carouselContainer = document.getElementById('carouselContainer');
    const items = document.querySelectorAll('#carouselContainer .item'); // Seleciona todos os itens
    const nextButton = document.querySelector('.carousel-button.next'); // Seleciona o botão de próxima

    // Função para mover a primeira imagem para o final
    function moveSlide() {
        // Move o primeiro item para o final
        const firstItem = items[0];
        carouselContainer.appendChild(firstItem); // Adiciona o primeiro item ao final

        // Ajusta a posição do carrossel para exibir as imagens corretamente
        carouselContainer.style.transition = 'none'; // Remove a transição para não ter movimento abrupto
        carouselContainer.style.transform = 'translateX(0)'; // Reseta o deslocamento

        // Força o navegador a renderizar a mudança
        setTimeout(() => {
            // Adiciona uma transição suave e move o carrossel para o próximo item
            carouselContainer.style.transition = 'transform 0.5s ease';
            carouselContainer.style.transform = `translateX(-420px)`; // Move para a esquerda
        }, 10);
    }

    // Adiciona o evento de clique ao botão
    nextButton.addEventListener('click', moveSlide);
});

</script>
</html>