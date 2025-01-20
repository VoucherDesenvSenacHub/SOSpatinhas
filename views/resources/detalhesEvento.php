<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Evento</title>
    <link rel="stylesheet" href="../css/detalhesEvento.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <div class="container">
        
    <div id="slideshow-container">

        <div class="Slides-fade">
            <img src="../images/horto-florestal.png" alt="Horto Florestal 1" >
        </div> 

        <div class="Slides-fade">
            <img src="../images/horto-florestal.png" alt="Horto Florestal 2" >
        </div>

        <div class="Slides-fade">
            <img src="../images/horto-florestal.png" alt="Horto Florestal 3" >
        </div>

        <div>
            <span class="botao" onclick="currentSlide(1)"></span>
            <span class="botao" onclick="currentSlide(2)"></span>
            <span class="botao" onclick="currentSlide(3)"></span>
        </div>
        <div class="event-details">
            <h1>Feira do Auau</h1>
            <p>Feira arrecadativa de moda no Horto Florestal, venha comprar roupas para você ou para seu pet! Todos os lucros da feira serão direcionados ao SOS Patinhas.</p>
            <button>Compartilhar</button>
        </div>
        
    </div>


    <div class="carousel">

        <div class="card">
        <img src="../images/horto-florestal.png" alt="Adote um Amigo">
            <div class="card-info">
                <h3>Adote um Amigo</h3>
                <p>Feira de adoção.</p>
                <div class="local">
                    <span>📍</span> Campo Grande MS, Horto florestal
                </div>
            </div>
        </div>

        <div class="card">
            <img src="../images/parque-dos-poderes.png" alt="Adote um Amigo">
            <div class="card-info">
                <h3>Adote um Amigo</h3>
                <p>Feira de adoção.</p>
                <div class="local">
                    <span>📍</span> Campo Grande MS, Parque dos Poderes
                </div>
            </div>
        </div>

        <div class="card">
            <img src="../images/bosque.png" alt="Junto por eles">
            <div class="card-info">
                <h3>Junto por eles</h3>
                <p>Passeata pelos direitos dos animais.</p>
                <div class="local">
                    <span>📍</span> Campo Grande MS, Bosque dos Ipês
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
    let PrimeiroSlide = 1;
    mostrarSlide (PrimeiroSlide);

    funcion OutroSlide(n){
        mostrarSlide(PrimeiroSlide += n);
    }

    function SlideAtual(n){
        mostrarSlide(PrimeiroSlide = n);
    }

    function mostrarSlide(n){
        let i;
        let slides = document.getElementsByClassName("Slides-fade");
        let botao = document.getElementsByClassName("botao");
        if (n > slides.length) {PrimeiroSlide = 1}
        if (n < 1) {PrimeiroSlide = slides.length}
        for (i = 0; i < slides.length; i++){
            slides[i].style.display = "none";
        }
        for (i = 0; i < botao.length; i++){
            botao[i].className = botao[i].className.replace(" active", "");
        }
        slides[PrimeiroSlide-1].style.display = "block";
        botao[PrimeiroSlide-1].className += " active";
    }

    


    </script>

    <?php include('../templates/footerUser.php')?>
</body>
</html>