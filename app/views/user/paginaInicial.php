<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="/sospatinhas/public/css/paginaInicial.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/sospatinhas/public/images/icons/favicon.png" type="image/png">
</head>
<body>
    <?php include('../../componentes/navbar.php'); ?>

    <section class="banner efeito-fade" id="banner">
        <div class="carrossel" id="carrossel">
            <ul class="carrossel__lista" id="listaSlides">
                <li class="carrossel__item">
                    <img src="/sospatinhas/public/images/default/racas.png" alt="Pets resgatados pela ONG">
                    <div class="carrossel__legenda">
                        <h2>Adote um Amigo</h2>
                        <p>Animais resgatados em busca de um novo lar</p>
                        <a href="#adopt" class="botao botao--primario">Conheça-os</a>
                    </div>
                </li>
                <li class="carrossel__item">
                    <img src="/sospatinhas/public/images/default/racas.png" alt="Voluntários cuidando dos animais">
                    <div class="carrossel__legenda">
                        <h2>Seja um Voluntário</h2>
                        <p>Ajude a cuidar dos nossos animais</p>
                        <a href="#volunteer" class="botao botao--primario">Saiba Mais</a>
                    </div>
                </li>
                <li class="carrossel__item">
                    <img src="/sospatinhas/public/images/default/racas.png" alt="Eventos de adoção realizados pela ONG">
                    <div class="carrossel__legenda">
                        <h2>Eventos de Adoção</h2>
                        <p>Participe dos nossos eventos mensais</p>
                        <a href="#events" class="botao botao--primario">Calendário</a>
                    </div>
                </li>
            </ul>
            <div class="carrossel__indicadores" id="indicadores"></div>
        </div>
    </section>

    <main>
        <section class="adocao efeito-fade" id="adopt">
            <div class="container adocao-container">
                <img src="/sospatinhas/public/images/default/Group_230.png" alt="" class="linhas" aria-hidden="true">
                <img src="/sospatinhas/public/images/default/Group_231.png" alt="" class="linha" aria-hidden="true">
                <div class="pet-info">
                    <h3 class="pet-nome" id="petName">Rumi | Macho - 2 anos</h3>
                    <div class="imagem-container">
                        <button id="pet-prev" class="seta esquerda" aria-label="Pet anterior">

                            <img src="/sospatinhas/public/images/icons/SetaEsquerda.png" alt="" class="esquerda">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="imagem-box">
                            <img src="/sospatinhas/public/images/default/gato.png" alt="Gato Rumi na caixa" id="petImg" class="pet-img">
                            <img src="/sospatinhas/apublic/images/default/Group.png" alt="" class="caixa" aria-hidden="true">
                        </div>
                        <button id="pet-next" class="seta direita" aria-label="Próximo pet">

                            <img src="/sospatinhas/public/images/icons/SetaCertaDireita.png" alt="" class="direita">
                            <i class="fas fa-chevron-right"></i>
                        </button>
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
                        <a href="adocao" class="botao botao--animado">VEJA OS PETS</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta efeito-fade" id="donate">
            <div class="cta-text">
                <h2>Seja a Mão que Cuida!</h2>
                <p>Cada ajuda conta. Doe o que puder e quiser na SOS Patinhas e nos ajude a garantir alimento, cuidados médicos e muito amor para os nossos animais resgatados.</p>
                <p>Juntos, podemos oferecer uma vida digna e cheia de esperança para quem só precisa de uma chance!</p>
                <a href="comoajudar" class="btn-doar">
                    <i class="fas fa-heart"></i> CONTRIBUA COM A ONG
                </a>
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
                <img src="/sospatinhas/public/images/default/mao.png" alt="Voluntário alimentando cães">
                <div class="icons">
                    <i class="fa-solid fa-paw"></i>
                    <i class="fa-solid fa-paw"></i>
                    <i class="fa-solid fa-paw"></i>
                </div>
            </div>
        </section>

        <section class="eventos" id="events">
            <h2>Alguns de nossos eventos</h2>

            <div class="carrossel-eventos">
                <button class="seta1 prev1" aria-label="Evento anterior">&#x276C;</button>
                <div class="carrossel-track2">
                    <div class="evento-card">
                        <img src="/sospatinhas/public/images/default/evento1.png" alt="Evento 1">
                        <p>Feira de Adoção</p>
                    </div>
                    <div class="evento-card">
                        <img src="/sospatinhas/public/images/default/evento2.png" alt="Evento 2">
                        <p>Feirão do Bazar + Feira do Auau</p>
                    </div>
                    <div class="evento-card">
                        <img src="/sospatinhas/public/images/default/evento3.png" alt="Evento 3">
                        <p>Adoção com Carinho</p>
                    </div>
                </div>
                <button class="seta1 next1" aria-label="Próximo evento">&#x276D;</button>
                <div class="carrossel-paginacao"></div>
            </div>
            <a href="#eventos" class="botao-eventos">VEJA FUTUROS EVENTOS</a>
        </section>

			<button class="prev" id="prevBtn">&#10094;</button>
			<button class="next" id="nextBtn">&#10095;</button>
		</div>
            <a href="eventos" class="botao-eventos">VEJA FUTUROS EVENTOS</a>
        </section>
        
        <section class="carrossel-section">
            <img class="pataInvertida" src="/sospatinhas/public/images/icons/iconPataVerde.png" alt="Pata Verde Invertida">
            <div class="carrossel-wrap">
                <img id="elemento1" src="/sospatinhas/public/images/default/efeitocarrossel.png" alt="Elemento Carrossel">
                <div class="carrossel-track">
                    <img id="img1" src="" alt="Imagem 1">
                    <img id="img2" src="" alt="Imagem 2">
                </div>
                <div class="buttons">
                    <button class="prev" id="nextContribua1" aria-label="Imagem anterior">&#x276C;</button>
                    <button class="next" id="nextContribua2" aria-label="Próxima imagem">&#x276D;</button>
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
                <a href="#" class="botao">CONTRIBUA COM A ONG</a>
            </div>
            <img class="pataverde" src="/sospatinhas/public/images/icons/iconPataVerde1.png" alt="Pata Verde">
        </section>

        <section class="faixaMain">
            <div class="bolasCtn">
                <div class="bolas">
                    <img src="/sospatinhas/public/images/icons/iconBoloAniversario.png" alt="Ícone Aniversário">
                    <div class="textosBola">
                        <h3>5</h3>
                        <p>ANOS</p>
                    </div>
                </div>
                <div class="bolas">
                    <img src="/sospatinhas/public/images/icons/iconMao.png" alt="Ícone Mão">
                    <div class="textosBola">
                        <h3>+1000</h3>
                        <p>RESGATES</p>
                    </div>
                </div>
                <div class="bolas">
                    <img src="/sospatinhas/public/images/icons/iconPataLaranja.png" alt="Ícone Pata Laranja">
                    <div class="textosBola">
                        <h3>+100</h3>
                        <p>ANIMAIS</p>
                    </div>
                </div>
                <div class="bolas">
                    <img src="/sospatinhas/public/images/icons/iconLocal.png" alt="Ícone Localização">
                    <div class="textosBola">
                        <h3>2</h3>
                        <p>ABRIGOS</p>
                    </div>
                </div>
            </div>
            <h1>Por cada vida que merece uma segunda chance.</h1>
        </section>
    </main>

    <?php include('../../componentes/footer.php'); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // ============================
            // Efeito de Fade para Elementos (Executado primeiro para evitar página em branco)
            // ============================
            const efeitoFade = function() {
                const observador = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visivel');
                        }
                    });
                }, { threshold: 0.2 });
                
                document.querySelectorAll('.efeito-fade').forEach(el => observador.observe(el));
            };

            // ============================
            // Carrossel principal da página
            // ============================
            const carrosselPrincipal = function() {
                const carrosselLista = document.getElementById('listaSlides');
                const indicadoresContainer = document.getElementById('indicadores');
                
                if (!carrosselLista || !indicadoresContainer) {
                    console.warn("Componentes do carrossel principal não encontrados. A função será ignorada.");
                    return;
                }
                
                const slides = carrosselLista.querySelectorAll('.carrossel__item');
                let slideAtual = 0;
                let intervaloAutoPlay;
                
                function irParaSlide(index) {
                    if (index < 0 || index >= slides.length) return;
                    slideAtual = index;
                    const deslocamento = -slideAtual * 100 + '%';
                    carrosselLista.style.transform = `translateX(${deslocamento})`;
                    
                    document.querySelectorAll('.carrossel__indicador').forEach((indicador, i) => {
                        indicador.classList.toggle('ativo', i === slideAtual);
                    });
                    
                    if (intervaloAutoPlay) resetarAutoPlay();
                }

                function configurarIndicadores() {
                    indicadoresContainer.innerHTML = '';
                    slides.forEach((_, index) => {
                        const indicador = document.createElement('button');
                        indicador.className = 'carrossel__indicador';
                        indicador.setAttribute('aria-label', `Ir para o slide ${index + 1}`);
                        const iconRegular = document.createElement('i');
                        iconRegular.className = 'fa-regular fa-paw';
                        const iconSolid = document.createElement('i');
                        iconSolid.className = 'fa-solid fa-paw';
                        indicador.appendChild(iconRegular);
                        indicador.appendChild(iconSolid);
                        if (index === 0) indicador.classList.add('ativo');
                        indicador.addEventListener('click', () => irParaSlide(index));
                        indicadoresContainer.appendChild(indicador);
                    });
                }
                
                function iniciarAutoPlay() {
                    intervaloAutoPlay = setInterval(proximoSlide, 5000);
                }
                
                function resetarAutoPlay() {
                    clearInterval(intervaloAutoPlay);
                    iniciarAutoPlay();
                }
                
                function proximoSlide() {
                    const novoIndex = (slideAtual + 1) % slides.length;
                    irParaSlide(novoIndex);
                }
                
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
                
                if (!petPrevBtn || !petNextBtn || !petImg || !petName || !petTags) {
                    console.warn("Componentes do carrossel de pets não encontrados. A função será ignorada.");
                    return;
                }
                
                const pets = [
                    { nome: 'Rumi | Macho - 2 anos', imagem: 'public/images/default/gato.png', tags: ['Vacinado', 'Castrado', 'Dócil'] },
                    { nome: 'Alice | Fêmea - 1 ano', imagem: 'public/images/default/image.png', tags: ['Vacinada', 'Castrada', 'Brincalhona'] },
                    { nome: 'Thor | Macho - 3 anos', imagem: 'public/images/default/cachorro2.png', tags: ['Vacinado', 'Castrado', 'Protetor'] }
                ];
                let petAtual = 0;
                
                function atualizarPet(index) {
                    const pet = pets[index];
                    petImg.style.opacity = '0';
                    petName.style.opacity = '0';
                    petTags.style.opacity = '0';
                    
                    setTimeout(() => {
                        petImg.src = pet.imagem;
                        petName.textContent = pet.nome;
                        petTags.innerHTML = '';
                        pet.tags.forEach(tagText => {
                            const tagElement = document.createElement('span');
                            tagElement.className = 'tag';
                            tagElement.textContent = tagText;
                            petTags.appendChild(tagElement);
                        });
                        petImg.style.opacity = '1';
                        petName.style.opacity = '1';
                        petTags.style.opacity = '1';
                    }, 300);
                }
                
                petPrevBtn.addEventListener('click', () => {
                    petAtual = (petAtual - 1 + pets.length) % pets.length;
                    atualizarPet(petAtual);
                });
                
                petNextBtn.addEventListener('click', () => {
                    petAtual = (petAtual + 1) % pets.length;
                    atualizarPet(petAtual);
                });
            };

            // ============================
            // Carrossel da Seção de Imagens (DOE)
            // ============================
            const carrosselDoe = function() {
                const imagens = [
                    ['cachorro2.png', 'cachorro1.png'],
                    ['cachorro1.png', 'cachorro2.png'],
                    ['cachorro2.png', 'teste.jpg'],
                    ['teste.jpg', 'teste2.jpg']
                ];
                
                const img1 = document.getElementById('img1');
                const img2 = document.getElementById('img2');
                const nextBtn = document.querySelector('.carrossel-section .next');
                const prevBtn = document.querySelector('.carrossel-section .prev');
                
                if (!img1 || !img2 || !nextBtn || !prevBtn) {
                    console.warn("Componentes do carrossel 'Doe' não encontrados. A função será ignorada.");
                    return;
                }
                
                let index = 0;

                function fadeTroca(img, novoSrc) {
                    img.classList.remove('mostrar');
                    setTimeout(() => {
                        img.src = `/sospatinhas/public/images/default/${novoSrc}`;
                        img.classList.add('mostrar');
                    }, 200);
                }

                function atualizarImagens() {
                    fadeTroca(img1, imagens[index][0]);
                    fadeTroca(img2, imagens[index][1]);
                }

                nextBtn.addEventListener('click', () => {
                    index = (index + 1) % imagens.length;
                    atualizarImagens();
                });

                prevBtn.addEventListener('click', () => {
                    index = (index - 1 + imagens.length) % imagens.length;
                    atualizarImagens();
                });

                atualizarImagens();
            };

            // ============================
            // Menu Mobile
            // ============================
            const menuMobile = function() {
                const menuToggle = document.getElementById('menuToggle');
                const mainMenu = document.getElementById('mainMenu');
                
                if (menuToggle && mainMenu) {
                    menuToggle.addEventListener('click', () => mainMenu.classList.toggle('active'));
                    mainMenu.querySelectorAll('a').forEach(link => {
                        link.addEventListener('click', () => mainMenu.classList.remove('active'));
                    });
                }
            };
            
            // ============================
            // INICIALIZAR TODAS AS FUNÇÕES
            // ============================
            carrosselPrincipal();
            carrosselPets();
            carrosselDoe();
            efeitoFade();
            menuMobile();

        });
        document.addEventListener("DOMContentLoaded", function () {
	const carousel = document.querySelector(".carousel");
	const slides = document.querySelectorAll(".slide");
	const prevBtn = document.getElementById("prevBtn");
	const nextBtn = document.getElementById("nextBtn");

	let currentIndex = 0;
	const slidesPerView = 3;
	const totalSlides = slides.length;
	const maxIndex = totalSlides - slidesPerView;

	function updateCarousel() {
		const slideWidth = slides[0].clientWidth;
		const gap = 15;

		const offset = -currentIndex * (slideWidth + gap);
		carousel.style.transform = `translateX(${offset}px)`;

		// --- NOVA LÓGICA PARA O EFEITO 3D ---

		// Primeiro, remove todas as classes de estado de todos os slides
		slides.forEach((slide) => {
			slide.classList.remove("slide-center", "slide-left", "slide-right");
		});

		// Adiciona a classe correta para os 3 slides visíveis
		if (slides[currentIndex]) {
			slides[currentIndex].classList.add("slide-left");
		}
		if (slides[currentIndex + 1]) {
			slides[currentIndex + 1].classList.add("slide-center");
		}
		if (slides[currentIndex + 2]) {
			slides[currentIndex + 2].classList.add("slide-right");
		}
	}

	// A lógica dos botões permanece a mesma (com loop)
	nextBtn.addEventListener("click", () => {
		if (currentIndex >= maxIndex) {
			currentIndex = 0;
		} else {
			currentIndex++;
		}
		updateCarousel();
	});

	prevBtn.addEventListener("click", () => {
		if (currentIndex <= 0) {
			currentIndex = maxIndex;
		} else {
			currentIndex--;
		}
		updateCarousel();
	});

	window.addEventListener("resize", updateCarousel);

	// Chama a função na inicialização para aplicar os estilos 3D corretos
	updateCarousel();
});

    </script>
</body>
</html>