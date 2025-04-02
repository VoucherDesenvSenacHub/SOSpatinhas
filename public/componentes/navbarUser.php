<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    nav {
        background-color: white;
        position: sticky;
        top: 0;
        /*width: 100%;*/
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .navbar-logo img {
        width: 50px;
        height: 50px;
    }

    .nav-links {
        display: flex;
        list-style: none;
        gap: 2rem;
    }

    .nav-links a {
        text-decoration: none;
        color: black;
        padding: 8px 16px;
        font-weight: 550;
        transition: 0.3s;
    }

    .nav-links a:hover,
    .nav-links a:active {
        border-bottom: solid #C6E1C4;
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .hamburger {
        display: none;
        cursor: pointer;
        flex-direction: column;
        gap: 5px;
    }

    .hamburger div {
        width: 30px;
        height: 3px;
        background-color: black;
        transition: 0.3s;
    }

    .mobile-menu {
        display: none;
        position: fixed;
        top: 60px;
        right: 0;
        width: 100%;
        height: 100vh;
        background-color: white;
        box-shadow: -2px 2px 10px rgba(0, 0, 0, 0.1);
        flex-direction: column;
        align-items: center;
        padding-top: 80px;
        z-index: 1300;
    }

    .mobile-menu a {
        text-decoration: none;
        color: black;
        padding: 15px;
        display: block;
        font-size: 18px;
        width: 100%;
        text-align: center;
    }

    .mobile-menu a:hover {
        background-color: #C6E1C4;
    }

    .mobile-menu.show {
        display: flex;
    }

    #btnLoginRegister{
        display: flex;
        
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }

        .hamburger {
            display: flex;
        }

        #btnCadastro{
            display:none;
        }
    }

    .navbar-especial {
        background-color: #C6E1C4 !important;
    }
</style>

<?php $taLogado = isset($_SESSION['taLogado']) && $_SESSION['taLogado'] === true; ?>

<nav class="navbar">
    <a class="navbar-logo" href="./paginaInicio.php">
        <img src="../images/Logo_Navbar.png" alt="Logo">
    </a>

    <ul class="nav-links">
        <a href="../../views/user/blog.php">Blog</a>
        <a href="../../views/user/quemSomos.php">Quem Somos</a>
        <a href="../../views/user/comoAjudar.php">Como Ajudar</a>
        <a href="../../views/user/eventos.php">Eventos</a>
        <a href="../../views/user/adocao.php">Adoção</a>
    </ul>

    <div class="nav-right">
        <?php if ($taLogado): ?>
            <a class="navbar-logo" href="perfilUsuario.php">
                <img src="../images/icons/iconUser.png" alt="Login">
            </a>
        <?php else: ?>
            <div id="btnLoginRegister">
                <div id="btnEntrarDiv">
                    <?php
                        // btn Entrar
                        $idBtn = "btnEntrar";
                        $funcaoClick = "redirecionar('login.php')";
                        $titulo = "Entrar";
                        $funcaoLoad = "mudarTamanho('btnEntrar', '142px', '42px', '16px')";
                        include('../componenteButton.php');
                    ?>
                </div>
                <div id="btnCadastroDiv">
                    <?php
                        // btn Cadastro
                        $idBtn = "btnCadastro";
                        $funcaoClick = "redirecionar('cadastroUsuario.php')";
                        $titulo = "Cadastrar";
                        $funcaoLoad = "mudarTamanho('btnCadastro', '142px', '42px', '16px')";
                        include('../componenteButton.php');
                        $idBtn = "";
                        $funcaoClick = "";
                        $titulo = "";
                        $funcaoLoad = "";
                    ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</nav>

<div class="mobile-menu">
    <a href="../../views/user/blog.php">Blog</a>
    <a href="../../views/user/quemSomos.php">Quem Somos</a>
    <a href="../../views/user/comoAjudar.php">Como Ajudar</a>
    <a href="../../views/user/adocao.php">Adoção</a>
    <a href="../../views/user/eventos.php">Eventos</a>
</div>

<script>
    function toggleMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('show');
    }
</script>
