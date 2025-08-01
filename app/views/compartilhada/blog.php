<?php
    $cssLink  = '../../public/css/blog.css';
    $tipo = isset($_SESSION['id']) && $_SESSION['id'] === 'Admin' ? 'Adm' : 'User';
    $isAdm = $tipo === 'Adm';
    include('../../componentes/default/topHTML.php');
?>
<section class="corpo-desktop">
    <div class="principal">

        <?php if ($isAdm): ?>

            <img src="../../public/images/btnEditar.png" alt="Editar" class="btnEditar">

        <?php endif; ?>

        <div class="grandin" id="cima">
        <a href="" class="link-not">

            <img src="../../public/images/Rectangle 272.png"  id="imgMain" alt="Article Image 1">
            <h2>Título da Notícia</h2>
            <div class="titulo">
                <h2>Título da notícia</h2>
                <p class="p-none">Display none</p>
            </div>
        </a>    
    </div>
    <div class="grandin" id="baixo">
        <a href="" class="link-not">
            
            <img src="" alt="Article Image 2"  class="img-first" style='visibility: hidden'>
            <div class="titulo">
                <h2>Título da notícia</h2>
                <p class="p-none">Display none</p>
            </div>
        </a>    
        </div>
    </div>
    
    <style>
        .p-none{
            display: none;
        }
    </style>

    <aside class="sidebarBlog">
        
        <div class="ladin" id="pit">
        <a href="" class="link-not">

            <img src="../images/Rectangle 274.png" alt="Sidebar Image 1" class="img-ladin" style='visibility: hidden'>
            <div class="titulo">
                <h2>Título da notícia</h2>
                <p>Não vai ser fácil esquecer Não vai ser fácil esquecer Não vai ser fácil esquecer Não vai ser fácil esquecer</p>
            </div>
        </a>    
        </div>
        <div class="ladin" id="maus_tratos">
        <a href="" class="link-not">

            <img src="../../public/images/Rectangle 275.png" alt="Sidebar Image 2" class="img-ladin" style='visibility: hidden'>
            <div class="titulo">
                <h2>Título da notícia</h2>
                <p>Não vai ser fácil esquecer Não vai ser fácil esquecer Não vai ser fácil esquecer Não vai ser fácil esquecer</p>
            </div>
        </a>    
        </div>
        <div class="ladin" id="tatu">
        <a href="" class="link-not">

            <img src="../../public/images/Rectangle 276.png" alt="Sidebar Image 3" class="img-ladin" style='visibility: hidden'>
            <div class="titulo">
                <h2>Título da notícia</h2>
                <p>Não vai ser fácil esquecer Não vai ser fácil esquecer Não vai ser fácil esquecer Não vai ser fácil esquecer</p>
            </div>
        </a>    
        </div>
    </aside>
</section>

<section class="corpo-mobile">
    <div class="grandin" id="cima">
    <a href="" class="link-not">

        <img src="../../public/images/Rectangle 272.png" alt="Article Image 1" class="img-ladin" style='visibility: hidden'>
        <div class="titulo">
            <h2>Título da notícia</h2>
            <p>sahudihausd</p>
        </div>
    </a>    
    </div>
    <div class="grandin" id="baixo">
    <a href="" class="link-not">

        <img src="../../public/images/Rectangle 273.png" alt="Article Image 2" class="img-ladin" style='visibility: hidden'>
        <div class="titulo">
            <h2>Título da notícia</h2>
            <p>asuifhusead</p>
        </div>
    </a>    
    </div>
    
    <div class="ladin" id="pit">
    <a href="" class="link-not">

        <img src="../../public/images/Rectangle 274.png" alt="Sidebar Image 1" class="img-ladin">
        <div class="titulo">
            <h2>Título da notícia</h2>
            <p>IODJIOWDOINHQDWION</p>
        </div>
    </a>    
</div>
<div class="ladin" id="maus_tratos">
    <a href="" class="link-not">
        
        <img src="../../public/images/Rectangle 275.png" alt="Sidebar Image 2" class="img-ladin">
        <div class="titulo">
            <h2>Título da notícia</h2>
            <p>IODJIOWDOINHQDWION</p>
        </div>
    </a>    
    </div>
    <div class="ladin" id="tatu">
    <a href="" class="link-not">

        <img src="../../public/images/Rectangle 276.png" alt="Sidebar Image 3" class="img-ladin">
        <div class="titulo">
            <h2>Título da notícia</h2>
            <p>fehweihwei</p>
        </div>
    </a>    
    </div>
</section>

<script src="../script/blog.js">
  window.addEventListener("load", obterNoticia());
</script>

<?php
    include('../../componentes/default/bottomHTML.php');
?>