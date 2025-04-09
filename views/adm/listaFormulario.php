<?php
    $cssLink  = '../../public/css/listaFormulario.css';
    $tipo = 'Adm';
    include('../../public/componentes/default/topHTML.php');
    include('../../public/componentes/cardListas.php');
?>

<h1>Lista de Formulários de Adoções</h1>

<div class="pesquisar">
    <img src="../../public/images/lupa_pesquisa.png" alt="Lupa de pesquisa" class="lupa">
    <input type="text" placeholder="Pesquisar">
</div>

<div class="lista-formulario" id="lista-formulario">
    <?php
        $formularios = [
            [   "tituloFrm" => "Formulario 1", 
                "imagemAnimal" => "../../public/images/Rumi.png", 
                "nomeAnimal" => "Rumi", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "João"
            ],
            [   "tituloFrm" => "Formulario 2", 
                "imagemAnimal" => "../../public/images/Nobre.png", 
                "nomeAnimal" => "Nobre", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Maria"
            ],
            [   "tituloFrm" => "Formulario 3", 
                "imagemAnimal" => "../../public/images/Nobre.png", 
                "nomeAnimal" => "Nobre", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Carlos"
            ],
            [   "tituloFrm" => "Formulario 4", 
                "imagemAnimal" => "../../public/images/Nigel.png", 
                "nomeAnimal" => "Nigel", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Ana"
            ],
            [   "tituloFrm" => "Formulario 5", 
                "imagemAnimal" => "../../public/images/Rumi.png", 
                "nomeAnimal" => "Rumi", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Pedro"
            ],
            [   "tituloFrm" => "Formulario 6", 
                "imagemAnimal" => "../../public/images/Rumi.png", 
                "nomeAnimal" => "Rumi", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Juliana"
            ],
            [   "tituloFrm" => "Formulario 7", 
                "imagemAnimal" => "../../public/images/Toby.png", 
                "nomeAnimal" => "Toby", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "João"
            ],
            [   "tituloFrm" => "Formulario 8", 
                "imagemAnimal" => "../../public/images/Nobre.png", 
                "nomeAnimal" => "Nobre", 
                "imagemUser" => "../../public/images/icons/iconUser.png",
                "nomeUser" => "Fernanda"
            ],
            [   "tituloFrm" => "Formulario 9", 
                "imagemAnimal" => "../../public/images/Nigel.png", 
                "nomeAnimal" => "Nigel", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Lucas"
            ],
            [   "tituloFrm" => "Formulario 10", 
                "imagemAnimal" => "../../public/images/Nigel.png", 
                "nomeAnimal" => "Nigel", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Ana"
            ],
            [   "tituloFrm" => "Formulario 11", 
                "imagemAnimal" => "../../public/images/Sir Dougg.png", 
                "nomeAnimal" => "Sir Dougg", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Ricardo"
            ],
            [   "tituloFrm" => "Formulario 12", 
                "imagemAnimal" => "../../public/images/Toby.png", 
                "nomeAnimal" => "Toby", 
                "imagemUser" => "../../public/images/icons/iconUser.png", 
                "nomeUser" => "Maria"
                ]
        ];

        $itensPorPagina = 6; 
        foreach ($formularios as $index => $formulario) {
            $pagina = floor($index / $itensPorPagina) + 1; 
            echo '<div class="item-formulario" data-pagina="' . $pagina . '">';
            gerarCardFormulario($formulario['tituloFrm'], $formulario['imagemAnimal'], $formulario['nomeAnimal'], $formulario['imagemUser'], $formulario['nomeUser']);
            echo '</div>';
        }
    ?>
    
</div>

<div class="cta-slide">
    <button id="prev" class="pagination-btn">&lt;</button>
    <div class="altPag" id="paginacao">
       
    </div>
    <button id="next" class="pagination-btn">&gt;</button>
</div>

<script>
    document.querySelectorAll('.btnExcluir').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
            confirm('Certeza que deseja recusar esse formulário?');
        });
    });

    document.querySelectorAll('.btnAceitar').forEach(button => {
        button.addEventListener('click', function() {
            this.parentElement.remove();
            confirm('Certeza que deseja aceitar esse formulário?');
        });
    });

    document.querySelectorAll('.btnEditar').forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = "formulario.php";
        });
    });

    let links = document.querySelectorAll('.link');
    let valorAtual = 0;

    function activeLink() {
        links.forEach(link => link.classList.remove('active'));
        links[valorAtual].classList.add('active');
    }

    links.forEach((link, index) => {
        link.addEventListener('click', () => {
            valorAtual = index;
            activeLink();
        });
    });


    let paginaAtual = 1;
    let totalPaginas = 0;

    document.addEventListener('DOMContentLoaded', function () {
        recalcularPaginacao();
    });

    

    function recalcularPaginacao() {
        const itensPorPagina = 6;
        const listaFormulario = document.getElementById('lista-formulario');
        const itens = listaFormulario.querySelectorAll('.item-formulario');
        totalPaginas = Math.ceil(itens.length / itensPorPagina);

        itens.forEach((item, index) => {
            const pagina = Math.floor(index / itensPorPagina) + 1;
            item.setAttribute('data-pagina', pagina);
        });

        
        atualizarPaginacao(totalPaginas);

        
        exibirPagina(paginaAtual);
    }

    function atualizarPaginacao(totalPaginas) {
        const paginacao = document.getElementById('paginacao');
        paginacao.innerHTML = '';

        for (let i = 1; i <= totalPaginas; i++) {
            const link = document.createElement('li');
            link.className = 'link' + (i === paginaAtual ? ' active' : '');
            link.textContent = i;
            link.addEventListener('click', () => mudarPagina(i));
            paginacao.appendChild(link);
        }
    }

    function exibirPagina(pagina) {
        const itens = document.querySelectorAll('.item-formulario');
        itens.forEach((item) => {
            const paginaItem = parseInt(item.getAttribute('data-pagina'));
            if (paginaItem === pagina) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function mudarPagina(pagina) {
        if (pagina < 1 || pagina > totalPaginas) return; 
        paginaAtual = pagina;
        exibirPagina(paginaAtual);
        atualizarPaginacao(totalPaginas);
    }

    document.getElementById('prev').addEventListener('click', () => mudarPagina(paginaAtual - 1));
    document.getElementById('next').addEventListener('click', () => mudarPagina(paginaAtual + 1));

    
</script>

<?php
    include('../../public/componentes/default/bottomHTML.php');
?>