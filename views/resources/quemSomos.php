    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Conheça nossa equipe e nossos parceiros. Somos uma equipe dedicada a fornecer soluções inovadoras para nossos clientes.">
        <title>Quem Somos</title>
        <link rel="stylesheet" href="../css/quemSomos.css">
    </head>
    <body>
        <?php include('../templates/navbarUser.php'); ?>

        <section class="corpo container">
            <div class="imagem_grupo">
                <img src="../images/grupo.png" alt="Foto da nossa equipe trabalhando em grupo">
                <div class="title-container">
                    <h1>Nossa Equipe</h1>
                </div>
            </div>
            
            <div class="carousel-container">
            <button class="carousel-button prev" onclick="moveTeamSlide(-1)">❮</button>
                <div class="card-container" id="team-carousel">
                    <div class="card">
                        <img src="../images/emanuel.png" alt="Emanuel Barros - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Emanuel Barros</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/lobortis.png" alt="Lobortis Mattis - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Lobortis Mattis</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/marlene.png" alt="Marlene Pinho - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Marlene Pinho</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/niter.png" alt="Niter Salomão - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Niter Salomão</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/emanuelle.png" alt="Emanuelle Nascimento - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Emanuelle Nascimento</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/sophia.png" alt="Sophia Silva - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Sophia Silva</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/anna.png" alt="Anna Coelho - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Anna Coelho</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/gabriel.png" alt="Gabriel Coelho - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Gabriel Coelho</div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../images/jessica.avif" alt="Jessica Torres - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Jessica Torres</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/junio.jpg" alt="Junio Matos - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Junio Matos</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/monica.jpg" alt="Monica Carvalho - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Monica Carvalho</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/david.jpg" alt="David Santana - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">David Santana</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/jasmine.jpg" alt="Jasmine Flores - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Jasmine Flores</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/leandro.jpg" alt="Leandro Miano- Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Leandro Miano</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/jose.avif" alt="José Santos - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">José Santos</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/lucas.avif" alt="Lucas Vieira - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Lucas Vieira</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/sara.jpg" alt="sara - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Sara Santos</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/jorge.jpg" alt="jorge - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Jorge Lucas</div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/pricila.jpg" alt="pricila silva - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Pricila Da Silva </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../images/douglas.jpg" alt="douglas - Foto do membro da equipe">
                        <div class="card-content">
                            <div class="card-title">Douglas Tangiro</div>
                        </div>
                    </div>
                </div>
                <button class="carousel-button next" onclick="moveTeamSlide(1)">❯</button>
            </div>

            <div class="title-container">
                <h2>Nossos Parceiros</h2>
            </div>
            <div class="carousel-container">
             <button class="carousel-button prev" onclick="moveTeamSlide(-1)">❮</button>
                <div class="partner-cards" id="partner-carousel">
                    <div class="partner-card">
                        <img src="../images/Abrigo dos Bichos.png" alt="Parceiro 1">
                        <div class="partner-content">
                            <div class="partner-title"></div>
                        </div>
                    </div>
                    <div class="partner-card">
                        <img src="../images/amigo.png" alt="Parceiro 2">
                        <div class="partner-content">
                            <div class="partner-title"></div>
                        </div>
                    </div>
                    <div class="partner-card">
                        <img src="../images/cão.png" alt="Parceiro 3">
                        <div class="partner-content">
                            <div class="partner-title"></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-button next" onclick="movePartnerSlide(1)">❯</button>
            </div>
        </section>

        <?php include('../templates/footerUser.php'); ?>

        <script>
           
    let currentSlide = 0;
    const teamItems = document.querySelectorAll('.card');  
    const totalTeamItems = teamItems.length;

    function moveTeamSlide(step) {
        currentSlide += step;
        if (currentSlide >= totalTeamItems) {
            currentSlide = 0;
        } else if (currentSlide < 0) {
            currentSlide = totalTeamItems - 1;
        }
        updateTeamCarousel();
    }

    function updateTeamCarousel() {
        const carousel = document.querySelector('#team-carousel');
        const offset = -currentSlide * (teamItems[0].offsetWidth + 30);  
        carousel.style.transform = `translateX(${offset}px)`;
    }

   
    let currentSlidePartners = 0;
    const partnerItems = document.querySelectorAll('.partner-card');  
    const totalPartnerItems = partnerItems.length;

    function movePartnerSlide(step) {
        currentSlidePartners += step;
        if (currentSlidePartners >= totalPartnerItems) {
            currentSlidePartners = 0;
        } else if (currentSlidePartners < 0) {
            currentSlidePartners = totalPartnerItems - 1;
        }
        updatePartnerCarousel();
    }

    function updatePartnerCarousel() {
        const carousel = document.querySelector('#partner-carousel');
        const offset = -currentSlidePartners * (partnerItems[0].offsetWidth + 30);  
        carousel.style.transform = `translateX(${offset}px)`;
    }
        
    //função para clonar os cards
    const primeiroClone = slides[0].cloneNode(true);
    const ultimoClone = slides[totalSlides - 1].cloneNode(true);
    carousel.appendChild(firstClone);
    carousel.insertBefore(lastClone, slides[0]);

    // Atualiza a lista de slides (agora com os clones)
    slides = carousel.querySelectorAll(slideSelector);

    
    const prevButtons = document.querySelectorAll('.carousel-button.prev');
    const nextButtons = document.querySelectorAll('.carousel-button.next');

    prevButtons.forEach(button => {
        button.addEventListener('click', () => moveTeamSlide(-1));  
        
    });

    nextButtons.forEach(button => {
        button.addEventListener('click', () => moveTeamlide(1));  
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', () => movePartnerSlide(-1));  
        
    });

    nextButtons.forEach(button => {
        button.addEventListener('click', () => movePartnerSlide(1));
    });  
        </script>
    </body>
    </html>