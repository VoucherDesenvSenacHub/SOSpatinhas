<nav class="navbar">
    <a class="navbarLogo" href="/">
        <img src="public/images/Logo_Navbar.png" alt="Logo">
    </a>

    <ul class="navLinks">
        <a href="quemsomos">Quem Somos</a>
        <a href="comoajudar">Como Ajudar</a>
        <a href="eventos">Eventos</a>
        <a href="adocao">Adoção</a>
    </ul>

    <div class="navRight">
        <?php 
        $taLogado = false;
        if ($taLogado): ?>
            <a class="navbarLogo" href="<?php echo ($isAdm) ? "perfil/adm/{idUsuario}" : "perfil/user/{idUsuario}"; ?>">
                <img src="<?php echo ($isAdm) ? "public/images/icons/iconUserAdm.png" : "public/images/icons/iconUser.png"; ?>" alt="Login">
            </a>
        <?php else: ?>
            <div id="btnLoginRegister">
                <div id="btnEntrarDiv">
                    <?php
                        $idBtn = "btnEntrar";
                        $funcaoClick = "redirecionar('login')";
                        $titulo = "Entrar";
                        $funcaoLoad = "mudarTamanho('btnEntrar', '142px', '42px', '16px')";
                        include('app/componentes/componenteButton.php');
                    ?>
                </div>
                <div id="btnCadastroDiv">
                    <?php
                        $idBtn = "btnCadastro";
                        $funcaoClick = "redirecionar('cadastro')";
                        $titulo = "Cadastrar";
                        $funcaoLoad = "mudarTamanho('btnCadastro', '142px', '42px', '16px')";
                        include('app/componentes/componenteButton.php');
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

<div class="mobileMenu">
    <a href="quemsomos">Quem Somos</a>
    <a href="comoajudar">Como Ajudar</a>
    <a href="eventos">Eventos</a>
    <a href="adocao">Adoção</a>
    <?php if ($isAdm): ?>
        <a href="lista/Animal">Adoções</a>
        <a href="lista/Evento">Eventos</a>
        <a href="lista/Arrecadacao">Arrecadações</a>
        <a href="lista/Membro">Membros</a>
        <a href="lista/Usuario">Usuários</a>
        <a href="#">Editar Formulário</a>
    <?php endif; ?>
</div>

<script>
    function toggleMenu() {
        const mobileMenu = document.querySelector('.mobileMenu');
        mobileMenu.classList.toggle('show');
    }
</script>