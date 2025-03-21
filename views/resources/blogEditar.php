<?php

    // if (!isset($_SESSION['taLogado']) || $_SESSION['taLogado'] !== true || $_SESSION['id'] !== 'Admin') {
    // echo '<script type="text/javascript">
    //         alert("Você precisa estar logado como administrador para acessar esta página.");
    //         window.location.href = "loginADM.php";
    //       </script>';
    // exit();
    // }

    $cssLink  = '../css/blogEditar.css';
    $tipo = 'Adm';
    include('../templates/default/topHTML.php');
    include('../templates/modalEditar.php')
?>

<section class="corpo-desktop">
    <div class="principal">
        <div class="grandin" id="cima">
            <img src="../images/btnEditar.png" alt="" class="btnEditar">
            <img src="../images/Rectangle 272.png"  id="imgMain" alt="Article Image 1">
            <h2>Título da Notícia</h2>
        </div>
        <div class="grandin" id="baixo">
            <img src="../images/btnEditar.png" alt="" class="btnEditar">
            <img src="../images/Rectangle 273.png" alt="Article Image 2">
            <h2>Título da Notícia</h2>
        </div>
    </div>
    
    <aside class="sidebarFoto">

        <div class="ladin" id="pit">
            <img src="../images/btnEditar.png" alt="" class="btnEditar">
            <img src="../images/Rectangle 274.png" alt="SidebarFoto Image 1">
            <h2>Título da Notícia</h2>
        </div>
        <div class="ladin" id="maus_tratos">
            <img src="../images/btnEditar.png" alt="" class="btnEditar">
            <img src="../images/Rectangle 275.png" alt="SidebarFoto Image 2">
            <h2>Título da Notícia</h2>
        </div>
        <div class="ladin" id="tatu">
            <img src="../images/btnEditar.png" alt="" class="btnEditar">
            <img src="../images/Rectangle 276.png" alt="SidebarFoto Image 3">
            <h2>Título da Notícia</h2>
        </div>
    </aside>
</section>

<section class="corpo-mobile">
    <div class="grandin" id="cima">
        <img src="../images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../images/Rectangle 272.png" alt="Article Image 1">
        <h2>Título da Notícia</h2>
    </div>
    <div class="grandin" id="baixo">
        <img src="../images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../images/Rectangle 273.png" alt="Article Image 2">
        <h2>Título da Notícia</h2>
    </div>

    <div class="ladin" id="pit">
        <img src="../images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../images/Rectangle 274.png" alt="SidebarFoto Image 1">
        <h2>Título da Notícia</h2>
    </div>
    <div class="ladin" id="maus_tratos">
        <img src="../images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../images/Rectangle 275.png" alt="SidebarFoto Image 2">
        <h2>Título da Notícia</h2>
    </div>
    <div class="ladin" id="tatu">
        <img src="../images/btnEditar.png" alt="" class="btnEditarM">
        <img src="../images/Rectangle 276.png" alt="SidebarFoto Image 3">
        <h2>Título da Notícia</h2>
    </div>
</section>

<script>
    const btn_popup = document.querySelectorAll('.btnEditar');
    btn_popup.forEach(button =>{
        button.onclick = function()
        {
            chamar_popup('upload');
        };
    });
</script>

<?php
    include('../templates/default/bottomHTML.php');
?>