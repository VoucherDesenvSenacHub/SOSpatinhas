<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/paginaInicial.css">
    <title>Pagina Inicio </title>
</head>
<body>



    <section>
        <div class="teste"><p>a</p></div>
    </section>

    
    <section class="carrossel-section">
        <div class="carrossel-wrap">
            <div class="carrossel-track">
                
                <div class="slide"><img id = "img1" src="public/images/default/cachorro1.png" alt="Cachorro machucado 1" ></div>
                <div class="slide"><img id = "img2" src="public/images/default/cachorro2.png" alt="Cachorro machucado 2"></div>

            </div>
            <div class="buttons">
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
            </div>
        </div>



        <div class="texto-doe">
            <h2>Doe e mude destinos!</h2>
            <p>
            Aqui, cada vaquinha é criada por alguém que luta<br>
            para salvar seu melhor amigo de quatro patas.<br>
            Você pode fazer parte dessa rede do bem<br>
            ajudando como e com o que puder.<br>
            Juntos, levamos esperança pra quem mais precisa.
            </p>
            <a href="" class="botao">CONTRIBUA COM A ONG</a>
        </div>



    </section>

    <img class= "pataverde"src="public/images/icons/iconPata.png" alt="Pata_Inicial">

    <section class="faixaMain">
        <div class="bolasCtn">
            <div class="bolas">
                <img src="public/images/icons/iconBoloAniversario.png" alt="">
                <div class="textosBola">
                    <h3>5</h3>
                    <p>ANOS</p>
                </div>
            </div>
            <div class="bolas">
                <img src="public/images/icons/iconMao.png" alt="">
                
                <div class="textosBola">
                    <h3>+1000</h3>
                    <p>RESGATES</p>
                </div>
            </div>
            <div class="bolas">
                <img src="public/images/icons/iconPataLaranja.png" alt="">
                <div class="textosBola">
                    <h3>+100</h3>
                    <p>ANIMAIS</p>
                </div>
            </div>
            <div class="bolas">
                <img src="public/images/icons/iconLocal.png" alt="">
                <div class="textosBola">
                    <h3>2</h3>
                    <p>ABRIGOS</p>
                </div>
                
            </div>
        </div>
        <h1>Por cada vida que merece uma segunda chance.</h1>
    </section>



    <script>
        
        document.addEventListener('DOMContentLoaded', () =>{
            const imagens = [
                ["public/images/default/cachorro1.png", "public/images/default/cachorro2.png"],
                ["public/images/default/cachorro2.png", "public/images/default/cachorro1.png"]
            ];
            
            let index = 0;
            
            const img1 = document.getElementById('img1');
            const img2 = document.getElementById('img2');
            const nextBtn = document.querySelector('.next');
            const prevBtn = document.querySelector('.prev');

            function atualizarImagens() {
                img1.src = imagens[index][0];
                img2.src = imagens[index][1];
            }

            nextBtn.addEventListener('click', () =>{
                if (index < imagens.length -1) {
                    index++;
                    atualizarImagens();
                }
            });

            prevBtn.addEventListener('click', () =>{
                if (index > 0) {
                    index--;
                    atualizarImagens();
                }
            });

            atualizarImagens();

        });


        

    </script>
</body>
</html>