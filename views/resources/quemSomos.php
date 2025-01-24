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
                <button class="carousel-button next" onclick="moveTeamSlide(1)">❯</button>
            </div>
        </div>

        <div class="title-container">
            <h2>Nossos Parceiros</h2>
        </div>

        <div class="carousel-container">
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
                <button class="carousel-button next" onclick="movePartnerSlide(1)">❯</button>
            </div>
        </div>
    </section>

    <?php include('../templates/footerUser.php'); ?>

    <script>
        let currentIndexTeam = 0;
        const teamSlides = document.querySelectorAll('#team-carousel .card');
        const totalTeamSlides = teamSlides.length;
        const teamWrapper = document.querySelector('#team-carousel');

        let currentIndexPartner = 0;
        const partnerSlides = document.querySelectorAll('#partner-carousel .partner-card');
        const totalPartnerSlides = partnerSlides.length;
        const partnerWrapper = document.querySelector('#partner-carousel');

        function moveTeamSlide(direction) {
            currentIndexTeam += direction;
            if (currentIndexTeam >= totalTeamSlides) {
                currentIndexTeam = 0;
            } else if (currentIndexTeam < 0) {
                currentIndexTeam = totalTeamSlides - 1;
            }
            teamWrapper.style.transform = `translateX(-${currentIndexTeam * 100}%)`;
        }

        function movePartnerSlide(direction) {
            currentIndexPartner += direction;
            if (currentIndexPartner >= totalPartnerSlides) {
                currentIndexPartner = 0;
            } else if (currentIndexPartner < 0) {
                currentIndexPartner = totalPartnerSlides - 1;
            }
            partnerWrapper.style.transform = `translateX(-${currentIndexPartner * 100}%)`;
        }
    </script>
</body>
</html>