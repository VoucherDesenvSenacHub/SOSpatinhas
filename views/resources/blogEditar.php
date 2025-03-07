<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
</style>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS BLOG</title>
    <link rel="stylesheet" href="../css/blogEditar.css">
</head>
<body>
    <?php 
    include('../templates/navbarUser.php') 
    ?>
    <section class="corpo container">
        <div class="principal">
            <div class="grandin" id="cima">
                <img src="../images/btnEditar.png" alt="" class="btnEditar">
                <img src="../images/Rectangle 272.png" alt="Article Image 1">
                <h2>Título da Notícia</h2>
            </div>
            <div class="grandin" id="baixo">
                <img src="../images/btnEditar.png" alt="" class="btnEditar">
                <img src="../images/Rectangle 273.png" alt="Article Image 2">
                <h2>Título da Notícia</h2>
            </div>
        </div>
        
        <aside class="sidebar">

            <div class="ladin" id="pit">
                <img src="../images/btnEditar.png" alt="" class="btnEditar">
                <img src="../images/Rectangle 274.png" alt="Sidebar Image 1">
                <h2>Título da Notícia</h2>
            </div>
            <div class="ladin" id="maus_tratos">
                <img src="../images/btnEditar.png" alt="" class="btnEditar">
                <img src="../images/Rectangle 275.png" alt="Sidebar Image 2">
                <h2>Título da Notícia</h2>
            </div>
            <div class="ladin" id="tatu">
                <img src="../images/btnEditar.png" alt="" class="btnEditar">
                <img src="../images/Rectangle 276.png" alt="Sidebar Image 3">
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
            <img src="../images/Rectangle 274.png" alt="Sidebar Image 1">
            <h2>Título da Notícia</h2>
        </div>
        <div class="ladin" id="maus_tratos">
            <img src="../images/btnEditar.png" alt="" class="btnEditarM">
            <img src="../images/Rectangle 275.png" alt="Sidebar Image 2">
            <h2>Título da Notícia</h2>
        </div>
        <div class="ladin" id="tatu">
            <img src="../images/btnEditar.png" alt="" class="btnEditarM">
            <img src="../images/Rectangle 276.png" alt="Sidebar Image 3">
            <h2>Título da Notícia</h2>
        </div>
    </section>
    <?php 
    include('../templates/footerUser.php')
    ?>
</body>
</html>