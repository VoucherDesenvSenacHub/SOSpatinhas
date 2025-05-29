<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/paginaInicial.css">
    <title>Pagina Inicio </title>
</head>
<body>



    <section class="eventos">

        <h2>Alguns de nossos eventos</h2>

        <div class="carrossel-eventos">
            <button class="seta prev1">&#x276C;</button>

            <div class="carrossel-trak2">

                <div class="evento-card">
                    <img src="public/images/default/evento1.png" alt="Evento 1">
                    <p>Feira de Adoção</p>
                </div>

                <div class="evento-card destaque">
                    <img src="public/images/default/evento2.png" alt="Evento 2">
                    <p>Feirão do Bazar + Feira do Auau</p>
                </div>

                <div class="evento-card">
                    <img src="public/images/default/evento3.png" alt="Evento 3">
                    <p>Adoção com Carinho</p>
                </div>
            </div>

            <button class="seta next1">&#x276D;</button>
        </div>

        <a href="#eventos" class="botao-eventos">VEJA FUTUROS EVENTOS</a>
    </section>

    <img class= "pataInvertida"src="public/images/icons/iconPataVerde.png" alt="Pata_Inicial1">

    <section class="carrossel-section">

        <div class="carrossel-wrap">
            <img id = "elemento1" src="public/images/default/efeitocarrossel.png" alt="Elemento Carrossel">

            <div class="carrossel-track">
                <img id = "img1" src="" alt="imagem 1">
                <img id = "img2" src="" alt="imagem 2">
            </div>

            <div class="buttons">
                <button class="prev">&#x276C;</button>
                <button class="next">&#x276D;</button>
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

    <img class= "pataverde"src="public/images/icons/iconPataVerde1.png" alt="Pata_Inicial">

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
                ['cachorro2.png', 'cachorro1.png'],
                ['cachorro1.png', 'cachorro2.png'],
                ['cachorro2.png', 'teste.jpg'],
                ['teste.jpg', 'teste2.jpg']
            ];
            
            const img1 = document.getElementById('img1');
            const img2 = document.getElementById('img2');
            const nextBtn = document.querySelector('.next');
            const prevBtn = document.querySelector('.prev');
            
            let index = 0;

            function fadeTroca(img, novoSrc) {
                img.classList.remove('mostrar');

                setTimeout(() => {
                    img.src = `public/images/default/${novoSrc}`;
                }, 20);

                setTimeout(() => {
                    img.classList.add('mostrar');
                }, 10); 
            }

            function atualizarImagens() {
                fadeTroca(img1, imagens[index][0]);
                fadeTroca(img2, imagens[index][1]);
            }

            nextBtn.addEventListener('click', () =>{
                index = (index + 1 ) % imagens.length;
                atualizarImagens();
            });

            prevBtn.addEventListener('click', () =>{
                index = (index - 1 + imagens.length) % imagens.length;
                atualizarImagens();
            });

            atualizarImagens();

        });


        

    </script>
</body>
</html>