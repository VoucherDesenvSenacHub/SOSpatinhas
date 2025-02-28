    <html lang="pt-BR">
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
          <button class="carousel-button prev" id="team-prev">❮</button>
          <div class="card-container" id="team-carousel">
          <!-- Slides da equipe -->
            <div class="card">
              <img src="../images/emanuel.png" alt="Emanuel Barros">
              <div class="card-content">
                <div class="card-title">Emanuel Barros</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/lobortis.png" alt="Lobortis Mattis">
              <div class="card-content">
                <div class="card-title">Lobortis Mattis</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/marlene.png" alt="Marlene Pinho">
              <div class="card-content">
                <div class="card-title">Marlene Pinho</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/niter.png" alt="Niter Salomão">
              <div class="card-content">
                <div class="card-title">Niter Salomão</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/emanuelle.png" alt="Emanuelle Nascimento">
              <div class="card-content">
                <div class="card-title">Emanuelle Nascimento</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/sophia.png" alt="Sophia Silva">
              <div class="card-content">
                <div class="card-title">Sophia Silva</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/anna.png" alt="Anna Coelho">
              <div class="card-content">
                <div class="card-title">Anna Coelho</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/gabriel.png" alt="Gabriel Coelho">
              <div class="card-content">
                <div class="card-title">Gabriel Coelho</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/jessica.avif" alt="Jessica Torres">
              <div class="card-content">
                <div class="card-title">Jessica Torres</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/junio.jpg" alt="Junio Matos">
              <div class="card-content">
                <div class="card-title">Junio Matos</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/monica.jpg" alt="Monica Carvalho">
              <div class="card-content">
                <div class="card-title">Monica Carvalho</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/david.jpg" alt="David Santana">
              <div class="card-content">
                <div class="card-title">David Santana</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/jasmine.jpg" alt="Jasmine Flores">
              <div class="card-content">
                <div class="card-title">Jasmine Flores</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/leandro.jpg" alt="Leandro Miano">
              <div class="card-content">
                <div class="card-title">Leandro Miano</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/jose.avif" alt="José Santos">
              <div class="card-content">
                <div class="card-title">José Santos</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/lucas.avif" alt="Lucas Vieira">
              <div class="card-content">
                <div class="card-title">Lucas Vieira</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/sara.jpg" alt="Sara Santos">
              <div class="card-content">
                <div class="card-title">Sara Santos</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/jorge.jpg" alt="Jorge Lucas">
              <div class="card-content">
                <div class="card-title">Jorge Lucas</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/pricila.jpg" alt="Pricila Da Silva">
              <div class="card-content">
                <div class="card-title">Pricila Da Silva</div>
              </div>
            </div>
            <div class="card">
              <img src="../images/douglas.jpg" alt="Douglas Tangiro">
              <div class="card-content">
                <div class="card-title">Douglas Tangiro</div>
              </div>
            </div>
          </div>
          <button class="carousel-button next" id="team-next">❯</button>
        </div>

    <!-- Seção de Parceiros -->
        <div class="title-container">
          <h1>Nossos Parceiros</h1>
        </div>
        <div class="carousel-container">
          <button class="carousel-button prev" id="partner-prev">❮</button>
          <div class="partner-cards" id="partner-carousel">
            <!-- Slides dos parceiros -->
            <div class="partner-card">
              <img src="../images/Abrigo dos Bichos.png" alt="Parceiro 1">
              <div class="partner-content"></div>
            </div>
            <div class="partner-card">
              <img src="../images/amigo.png" alt="Parceiro 2">
              <div class="partner-content"></div>
            </div>
            <div class="partner-card">
              <img src="../images/cão.png" alt="Parceiro 3">
              <div class="partner-content"></div>
            </div>
          </div>
          <button class="carousel-button next" id="partner-next">❯</button>
        </div>
      </section>

      <?php include('../templates/footerUser.php'); ?>

        <script>
    /**
     * Função para inicializar um carrossel infinito e responsivo.
     * @param {string} carouselId - ID do container do carrossel.
     * @param {string} slideSelector - Seletor dos slides (cards) dentro do container.
     * @param {string} prevBtnId - ID do botão de anterior.
     * @param {string} nextBtnId - ID do botão de próximo.
     */
    function initCarousel(carouselId, slideSelector, prevBtnId, nextBtnId) {
      const carousel = document.getElementById(carouselId);
      let slides = Array.from(carousel.querySelectorAll(slideSelector));
      let currentIndex = 1; // iniciamos com o primeiro slide real

      // Clonar primeiro e último slide para efeito infinito
      const firstClone = slides[0].cloneNode(true);
      const lastClone = slides[slides.length - 1].cloneNode(true);
      firstClone.id = 'first-clone';
      lastClone.id = 'last-clone';
      carousel.appendChild(firstClone);
      carousel.insertBefore(lastClone, slides[0]);

      // Atualiza a lista de slides (incluindo os clones)
      slides = Array.from(carousel.querySelectorAll(slideSelector));

      // Função para obter a largura atual do slide
      function getSlideWidth() {
        return slides[0].offsetWidth;
      }

      // Posiciona o carrossel de forma inicial
      function setInitialPosition() {
        carousel.style.transition = 'none';
        carousel.style.transform = `translateX(-${getSlideWidth() * currentIndex}px)`;
      }
      setInitialPosition();

      // Função que move o carrossel
      function moveSlide(step) {
        const slideWidth = getSlideWidth();
        carousel.style.transition = 'transform 0.5s ease-in-out';
        currentIndex += step;
        carousel.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
      }

      // Ao terminar a transição, ajusta se estiver em um clone
      carousel.addEventListener('transitionend', () => {
        if (slides[currentIndex].id === 'first-clone') {
          carousel.style.transition = 'none';
          currentIndex = 1;
          carousel.style.transform = `translateX(-${getSlideWidth() * currentIndex}px)`;
        }
        if (slides[currentIndex].id === 'last-clone') {
          carousel.style.transition = 'none';
          currentIndex = slides.length - 2;
          carousel.style.transform = `translateX(-${getSlideWidth() * currentIndex}px)`;
        }
      });

      // Eventos dos botões
      document.getElementById(prevBtnId).addEventListener('click', () => {
        moveSlide(-1);
      });
      document.getElementById(nextBtnId).addEventListener('click', () => {
        moveSlide(1);
      });

      // Ajusta a posição se a janela for redimensionada
      window.addEventListener('resize', () => {
        setInitialPosition();
      });
    }

    // Inicializa o carrossel da equipe
    initCarousel('team-carousel', '.card', 'team-prev', 'team-next');
    // Inicializa o carrossel dos parceiros
    initCarousel('partner-carousel', '.partner-card', 'partner-prev', 'partner-next');
        </script>
    </body>
    </html>