<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/paginaInicial.css">
    <link rel="icon" href="/public/images/icons/favicon.png" type="image/png">
    <title>Pagina Inicio </title>
</head>
<body>
    <!-- Cabeçalho  -->
  <header class="navbar" id="home">
    <div class="container navbar-container">
      <h1 class="logo" aria-label="Logo SOS Patinhas">
        <i class="fa-solid fa-paw"></i> SOS Patinhas
      </h1>
      <button class="menu-toggle" aria-label="Abrir menu" id="menuToggle">
        <i class="fas fa-bars"></i>
      </button>
      <nav aria-label="Menu Principal">
        <ul class="menu" id="mainMenu">
          <li><a href="#home">Home</a></li>
          <li><a href="#adopt">Adote um Pet</a></li>
          <li><a href="#donate">Doe Agora</a></li>
          <li><a href="#events">Eventos</a></li>
          <li><a href="#about">Sobre Nós</a></li>
          <li class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Banner Carrossel -->
  <section class="banner efeito-fade" id="banner">
    <div class="carrossel" id="carrossel">
      <ul class="carrossel__lista" id="listaSlides">
        <li class="carrossel__item">
          <img src="public/images/default/racas.png" alt="Pets resgatados pela ONG">
          <div class="carrossel__legenda">
            <h2>Adote um Amigo</h2>
            <p>Animais resgatados em busca de um novo lar</p>
            <a href="#adopt" class="botao botao--primario">Conheça-os</a>
          </div>
        </li>

        <li class="carrossel__item">
          <img src="public/images/default/racas.png" alt="Voluntários cuidando dos animais">
          <div class="carrossel__legenda">
            <h2>Seja um Voluntário</h2>
            <p>Ajude a cuidar dos nossos animais</p>
            <a href="#volunteer" class="botao botao--primario">Saiba Mais</a>
          </div>
        </li>

        <li class="carrossel__item">
          <img src="public/images/default/racas.png" alt="Eventos de adoção realizados pela ONG">
          <div class="carrossel__legenda">
            <h2>Eventos de Adoção</h2>
            <p>Participe dos nossos eventos mensais</p>
            <a href="#events" class="botao botao--primario">Calendário</a>
          </div>
        </li>
      </ul>

      <div class="carrossel__indicadores" id="indicadores"></div>
      <button class="carrossel_controle carrossel_controle--anterior" id="anterior" aria-label="Slide anterior"><i class="fas fa-chevron-left"></i></button>
      <button class="carrossel_controle carrossel_controle--proximo" id="proximo" aria-label="Próximo slide"><i class="fas fa-chevron-right"></i></button>
    </div>
  </section>

  <!-- Conteúdo Principal -->
  <main>
    <!-- Seção de Adoção -->
    <section class="adocao efeito-fade" id="adopt">
      <div class="container adocao-container">
        <img src="public/images/default/Group_230.png" alt="" class="linhas" aria-hidden="true">
        <img src="public/images/default/Group_231.png" alt="" class="linha" aria-hidden="true">
        
        <div class="pet-info">
          <h3 class="pet-nome" id="petName">Rumi | Macho - 2 anos</h3>
          <div class="imagem-container">
            <button id="pet-prev" class="seta esquerda" aria-label="Pet anterior"><i class="fas fa-chevron-left"></i></button>
            <div class="imagem-box">
              <img src="public/images/default/gato.png" alt="Gato Rumi na caixa" id="petImg" class="pet-img">
              <img src="public/images/default/Group.png" alt="" class="caixa" aria-hidden="true">
            </div>
            <button id="pet-next" class="seta direita" aria-label="Próximo pet"><i class="fas fa-chevron-right"></i></button>
          </div>
          <div class="pet-tags">
            <span class="tag">Vacinado</span>
            <span class="tag">Castrado</span>
            <span class="tag">Dócil</span>
          </div>
        </div>
        
        <div class="texto">
          <h2>Adote um amigo!</h2>
          <p>Você sabia que aqui na SOS existem vidas esperando ansiosamente por um lar cheio de amor? São pets incríveis, carinhosos e leais, só esperando por alguém como você.</p>
          <p>Não compre, transforme uma vida: <strong>adote!</strong></p>
          <div class="botoes-grupo">
            <a href="#" class="botao botao--animado">VEJA OS PETS</a>
            <a href="#" class="botao-secundario">PROCESSO DE ADOÇÃO</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Seção de Doação -->
    <section class="cta efeito-fade" id="donate">
      <div class="cta-text">
        <h2>Seja a Mão que Cuida!</h2>
        <p>Cada ajuda conta. Doe o que puder e quiser na SOS Patinhas e nos ajude a garantir alimento, cuidados médicos e muito amor para os nossos animais resgatados.</p>
        <p>Juntos, podemos oferecer uma vida digna e cheia de esperança para quem só precisa de uma chance!</p>
        <a href="#" class="btn-doar"><i class="fas fa-heart"></i> CONTRIBUA COM A ONG</a>
        
        <div class="donation-info">
          <div class="donation-method">
            <i class="fas fa-credit-card"></i>
            <span>Cartão de Crédito</span>
          </div>
          <div class="donation-method">
            <i class="fas fa-barcode"></i>
            <span>Boleto</span>
          </div>
          <div class="donation-method">
            <i class="fas fa-qrcode"></i>
            <span>Pix</span>
          </div>
        </div>
      </div>
      
      <div class="cta-image">
        <img src="public/images/default/mao.png" alt="Voluntário alimentando cães">
        <div class="icons">
          <i class="fa-solid fa-paw"></i>
          <i class="fa-solid fa-paw"></i>
          <i class="fa-solid fa-paw"></i>
        </div>
      </div>
    </section>
    
    <!-- Contador de impacto -->
    <section class="contador efeito-fade">
      <div class="container">
        <h2 class="section-title">Nosso Impacto</h2>
        <div class="contador-grid">
          <div class="contador-item">
            <div class="contador-numero" id="adocoes">0</div>
            <div class="contador-label">Adoções Realizadas</div>
          </div>
          <div class="contador-item">
            <div class="contador-numero" id="resgates">0</div>
            <div class="contador-label">Animais Resgatados</div>
          </div>
          <div class="contador-item">
            <div class="contador-numero" id="voluntarios">0</div>
            <div class="contador-label">Voluntários Ativos</div>
          </div>
          <div class="contador-item">
            <div class="contador-numero" id="atendimentos">0</div>
            <div class="contador-label">Atendimentos Veterinários</div>
          </div>
        </div>
      </div>
    </section>
  </main>

<!-- PARTE KAUA -->















    <section class="eventos">

        <h2>Alguns de nossos eventos</h2>

        <div class="carrossel-eventos">
            <button class="seta prev1">&#x276C;</button>

            <div class="carrossel-track2">

                <div class="evento-card esquerda">
                    <img src="public/images/default/evento1.png" alt="Evento 1">
                    <p>Feira de Adoção</p>
                </div>

                <div class="evento-card destaque">
                    <img src="public/images/default/evento2.png" alt="Evento 2">
                    <p>Feirão do Bazar + Feira do Auau</p>
                </div>

                <div class="evento-card direita">
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

    <!-- Rodapé -->
  <footer class="footer">
    <div class="container footer-container">
      <div class="footer-col">
        <h3 class="footer-title">SOS Patinhas</h3>
        <p>Transformando vidas através da adoção responsável e cuidados com animais abandonados desde 2015.</p>
        <div class="social-links">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h3 class="footer-title">Links Rápidos</h3>
        <ul class="footer-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#adopt">Adote um Pet</a></li>
          <li><a href="#donate">Doe Agora</a></li>
          <li><a href="#events">Eventos</a></li>
          <li><a href="#about">Sobre Nós</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3 class="footer-title">Contato</h3>
        <ul class="footer-contact">
          <li><i class="fas fa-map-marker-alt"></i> Motel Tropical - Av. Cônsul Assaf Trad, 5237-5319 - Cel. Antonino, Campo Grande - MS, 79017-135</li>
          <li><i class="fas fa-phone"></i> (67) 9989-5662</li>
          <li><i class="fas fa-envelope"></i> email@gmail.com</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p>&copy; 2025 SOS Patinhas. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>



    <script>

        document.addEventListener('DOMContentLoaded', function() {
    // ============================
    // Carrossel principal da página
    // ============================
    const carrosselPrincipal = function() {
      const carrosselLista = document.getElementById('listaSlides');
      const indicadores = document.getElementById('indicadores');
      const btnAnterior = document.getElementById('anterior');
      const btnProximo = document.getElementById('proximo');
      
      if (!carrosselLista) return; 
      
      const slides = carrosselLista.querySelectorAll('.carrossel__item');
      let slideAtual = 0;
      let intervaloAutoPlay;
      
      // Configura os indicadores
      function configurarIndicadores() {
        slides.forEach((_, index) => {
          const indicador = document.createElement('div');
          indicador.className = 'carrossel__indicador';
          if (index === 0) indicador.classList.add('ativo');
          
          indicador.addEventListener('click', () => {
            irParaSlide(index);
          });
          
          indicadores.appendChild(indicador);
        });
      }
      
      // Função para ir para um slide específico
      function irParaSlide(index) {
        slideAtual = index;
        
        
        const deslocamento = -slideAtual * 100 + '%';
        carrosselLista.style.transform = `translateX(${deslocamento})`;
        
      
        document.querySelectorAll('.carrossel__indicador').forEach((indicador, i) => {
          indicador.classList.toggle('ativo', i === slideAtual);
        });
        
      
        resetarAutoPlay();
      }
      
      
      function iniciarAutoPlay() {
        intervaloAutoPlay = setInterval(() => {
          proximoSlide();
        }, 5000); 
      }
      
      function resetarAutoPlay() {
        clearInterval(intervaloAutoPlay);
        iniciarAutoPlay();
      }
      
      // Função para ir para o próximo slide
      function proximoSlide() {
        const novoIndex = (slideAtual + 1) % slides.length;
        irParaSlide(novoIndex);
      }
      
      // Função para ir para o slide anterior
      function slideAnterior() {
        const novoIndex = (slideAtual - 1 + slides.length) % slides.length;
        irParaSlide(novoIndex);
      }
      
      // Event listeners
      btnProximo.addEventListener('click', function() {
        proximoSlide();
      });
      
      btnAnterior.addEventListener('click', function() {
        slideAnterior();
      });
      
      // Inicializar carrossel
      configurarIndicadores();
      iniciarAutoPlay();
    };

    // ============================
    // Carrossel de Pets na Seção de Adoção
    // ============================
    const carrosselPets = function() {
      const petPrevBtn = document.getElementById('pet-prev');
      const petNextBtn = document.getElementById('pet-next');
      const petImg = document.getElementById('petImg');
      const petName = document.getElementById('petName');
      const petTags = document.querySelector('.pet-tags');
      const caixaImg = document.querySelector('.caixa');
      
      if (!petPrevBtn || !petNextBtn) return; 
      
    
      const pets = [
        {
          nome: 'Rumi | Macho - 2 anos',
          imagem: 'gato.png',
          tags: ['Vacinado', 'Castrado', 'Dócil']
        },
        {
          nome: 'Alice | Fêmea - 1 ano',
          imagem: 'Alice.png',
          tags: ['Vacinada', 'Castrada', 'Brincalhona']
        },
        {
          nome: 'Thor | Macho - 3 anos',
          imagem: 'thor.png',
          tags: ['Vacinado', 'Castrado', 'Protetor']
        }
      ];
      
      let petAtual = 0;
      
      // Função para atualizar o display do pet
      function atualizarPet(index) {
      
        petImg.style.opacity = '0';
        petName.style.opacity = '0';
        petTags.style.opacity = '0';
        
    
        caixaImg.classList.add('caixa-girando');
        
    
        setTimeout(() => {
          const pet = pets[index];
          
        
          petImg.src = pet.imagem;
          petName.textContent = pet.nome;
          
      
          petTags.innerHTML = '';
          pet.tags.forEach(tag => {
            const tagElement = document.createElement('span');
            tagElement.className = 'tag';
            tagElement.textContent = tag;
            petTags.appendChild(tagElement);
          });
          
      
          petImg.style.opacity = '1';
          petName.style.opacity = '1';
          petTags.style.opacity = '1';
          
        
          setTimeout(() => {
            caixaImg.classList.remove('caixa-girando');
          }, 1000);
          
        }, 300); 
      }
      
    
      petPrevBtn.addEventListener('click', function() {
        petAtual = (petAtual - 1 + pets.length) % pets.length;
        atualizarPet(petAtual);
      });
      
      petNextBtn.addEventListener('click', function() {
        petAtual = (petAtual + 1) % pets.length;
        atualizarPet(petAtual);
      });
      
      // Eventos de teclado para acessibilidade
      document.addEventListener('keydown', function(e) {
        
        const rect = petImg.getBoundingClientRect();
        const isVisible = rect.top >= 0 && rect.bottom <= window.innerHeight;
        
        if (isVisible) {
          if (e.key === 'ArrowLeft') {
            petPrevBtn.click();
          } else if (e.key === 'ArrowRight') {
            petNextBtn.click();
          }
        }
      });
    };

    // ============================
    // Efeito de Fade para Elementos
    // ============================
    const efeitoFade = function() {
      const observador = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visivel');
          }
        });
      }, { threshold: 0.2 });
      
      document.querySelectorAll('.efeito-fade').forEach(el => {
        observador.observe(el);
      });
    };

    // ============================
    // Contador de Impacto
    // ============================
    const contadorImpacto = function() {
      const contadores = {
        adocoes: { elemento: document.getElementById('adocoes'), valor: 320 },
        resgates: { elemento: document.getElementById('resgates'), valor: 542 },
        voluntarios: { elemento: document.getElementById('voluntarios'), valor: 48 },
        atendimentos: { elemento: document.getElementById('atendimentos'), valor: 890 }
      };
      
      const observadorContador = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const contador = Object.values(contadores).find(c => c.elemento === entry.target);
            if (contador) {
              let atual = 0;
              const incremento = Math.ceil(contador.valor / 50);
              const intervalo = setInterval(() => {
                atual += incremento;
                if (atual >= contador.valor) {
                  atual = contador.valor;
                  clearInterval(intervalo);
                }
                contador.elemento.textContent = atual;
              }, 30);
            }
          }
        });
      }, { threshold: 0.5 });
      
      Object.values(contadores).forEach(contador => {
        if (contador.elemento) {
          observadorContador.observe(contador.elemento);
        }
      });
    };

    // ============================
    // Menu Mobile
    // ============================
    const menuMobile = function() {
      const menuToggle = document.getElementById('menuToggle');
      const mainMenu = document.getElementById('mainMenu');
      
      if (menuToggle && mainMenu) {
        menuToggle.addEventListener('click', function() {
          mainMenu.classList.toggle('active');
        });
        
        // Fechar menu ao clicar em link
        mainMenu.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', () => {
            mainMenu.classList.remove('active');
          });
        });
      }
    };


    

    const smoothScroll = function() {
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          
          const targetId = this.getAttribute('href');
          if (targetId === '#') return;
          
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - 70, 
              behavior: 'smooth'
            });
          }
        });
      });
    };

    // Inicializar todas as funções
    carrosselPrincipal();
    carrosselPets();
    efeitoFade();
    contadorImpacto();
    menuMobile();
    smoothScroll();
  });
        
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