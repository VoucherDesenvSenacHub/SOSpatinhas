<?php
    $cssLink  = '../../public/css/editarBlog.css';
    $tipo = isset($_SESSION['id']) && $_SESSION['id'] === 'Admin' ? 'Adm' : 'User';
    $isAdm = $tipo === 'Adm';
    include('../../componentes/default/topHTML.php');
    // include('../templates/modalEditar.php')
?>

<section class="corpo-desktop">
    <div class="principal">
        <div class="noticiaPrincipal" id="destaque-principal">

            <?php if ($isAdm): ?>
                <img src="../../public/images/btnEditar.png" alt="" class="btnEditar">
            <?php endif; ?>

            <img src="../../public/images/Rectangle 272.png"  id="imgMain" alt="Article Image 1">
            <h2>Título da Notícia</h2>
        </div>

        <div class="noticiaPrincipal" id="destaque-secundario">

            <?php if ($isAdm): ?>
                <img src="../../public/images/btnEditar.png" alt="" class="btnEditar">
            <?php endif; ?>

            <img src="../../public/images/Rectangle 273.png" alt="Article Image 2">
            <h2>Título da Notícia</h2>
        </div>
    </div>
    
    <aside class="sidebarFoto">

        <div class="noticiasLaterais" id="primeiro-destaque">
            <?php if ($isAdm): ?>
                <img src="../../public/images/btnEditar.png" alt="" class="btnEditar">
            <?php endif; ?>
            <img src="../../public/images/Rectangle 274.png" alt="SidebarFoto Image 1">
            <h2>Título da Notícia</h2>
        </div>
        <div class="noticiasLaterais" id="segundo-destaque">
            <?php if ($isAdm): ?>
                <img src="../../public/images/btnEditar.png" alt="" class="btnEditar">
            <?php endif; ?>
            <img src="../../public/images/Rectangle 275.png" alt="SidebarFoto Image 2">
            <h2>Título da Notícia</h2>
        </div>
        <div class="noticiasLaterais" id="terceiro-destaque">
            <?php if ($isAdm): ?>
            <img src="../../public/images/btnEditar.png" alt="" class="btnEditar">
            <?php endif; ?>
            <img src="../../public/images/Rectangle 276.png" alt="SidebarFoto Image 3">
            <h2>Título da Notícia</h2>
        </div>
    </aside>
</section>

<section class="corpo-mobile">
    <div class="noticiaPrincipal" id="cima">
        <img src="../../public/btnEditar.png" alt="" class="btnEditarM">
        <img src="../../public/images/Rectangle 272.png" alt="Article Image 1">
        <h2>Título da Notícia</h2>
    </div>
    <div class="noticiaPrincipal" id="baixo">
        <img src="../../public/images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../../public/images/Rectangle 273.png" alt="Article Image 2">
        <h2>Título da Notícia</h2>
    </div>

    <div class="noticiasLaterais" id="pit">
        <img src="../../public/images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../../public/images/Rectangle 274.png" alt="SidebarFoto Image 1">
        <h2>Título da Notícia</h2>
    </div>
    <div class="noticiasLaterais" id="maus_tratos">
        <img src="../../public/images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../../public/images/Rectangle 275.png" alt="SidebarFoto Image 2">
        <h2>Título da Notícia</h2>
    </div>
    <div class="noticiasLaterais" id="tatu">
        <img src="../../public/images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../../public/images/Rectangle 276.png" alt="SidebarFoto Image 3">
        <h2>Título da Notícia</h2>
    </div>
</section>

<?php if ($isAdm): ?>
<script>
    const btn_popup = document.querySelectorAll('.btnEditar');
    btn_popup.forEach(button =>{
        button.onclick = function()
        {
            chamar_popup('upload');
        };
    });
</script>
<?php endif; ?>

<?php
    include('../../componentes/default/bottomHTML.php');
?>