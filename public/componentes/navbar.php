<nav class="navbar">
    <a class="navbar-logo" href="./paginaInicio.php">
        <img src="../../../images/Logo_Navbar.png" alt="Logo">
    </a>

    <ul class="nav-links">
        <a href="./blog.php">Blog</a>
        <a href="./quemSomos.php">Quem Somos</a>
        <a href="./comoAjudar.php">Como Ajudar</a>
        <a href="./eventos.php">Eventos</a>
        <a href="./adocao.php">Adoção</a>
    </ul>

    <div class="nav-right">
        <?php if ($taLogado): ?>
            <a class="navbar-logo" href="<?php echo ($isAdm) ? "../perfilADM/perfilADM.php" : "../perfilUsuario/perfilUsuario.php"; ?>">
                <img src="<?php echo ($isAdm) ? "../../../images/icons/iconUserAdm.png" : "../../../images/icons/iconUser.png"; ?>" alt="Login">
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
                        include('../templates/componenteButton.php');
                    ?>
                </div>
                <div id="btnCadastroDiv">
                    <?php
                        // btn Cadastro
                        $idBtn = "btnCadastro";
                        $funcaoClick = "redirecionar('cadastroUsuario.php')";
                        $titulo = "Cadastrar";
                        $funcaoLoad = "mudarTamanho('btnCadastro', '142px', '42px', '16px')";
                        include('../templates/componenteButton.php');
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
    <a href="./blogEditar.php">Blog</a>
    <a href="./quemSomosEditaveis.php">Quem Somos</a>
    <a href="./comoAjudarEditavel.php">Como Ajudar</a>
    <a href="./eventos.php">Eventos</a>
    <a href="./adocao.php">Adoção</a>
    <?php if ($isAdm): ?>
        <a href="./listaAdocao-ADM.php">Adoções</a>
        <a href="./listaEventosADM.php">Eventos</a>
        <a href="./listaArrecadacoesADM.php">Arrecadações</a>
        <a href="./listademembrosadm.php">Membros</a>
        <a href="./listaUsuariosADM.php">Usuários</a>
        <a href="./formAdocaoEditavel.php">Editar Formulário</a>
    <?php endif; ?>
</div>

<script>
    function toggleMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('show');
    }
</script>