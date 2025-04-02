<nav class="navbar">
    <a class="navbar-logo" href="../../views/user/paginaInicio.php">
        <img src="../../public/images/Logo_Navbar.png" alt="Logo">
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
            <a class="navbar-logo" href="<?php echo ($isAdm) ? "../../views/adm/perfilADM.php" : "../../views/user/perfilUsuario.php"; ?>">
                <img src="<?php echo ($isAdm) ? "../images/icons/iconUserAdm.png" : "../images/icons/iconUser.png"; ?>" alt="Login">
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
                        include('../../public/componentes/componenteButton.php');
                    ?>
                </div>
                <div id="btnCadastroDiv">
                    <?php
                        // btn Cadastro
                        $idBtn = "btnCadastro";
                        $funcaoClick = "redirecionar('cadastroUsuario.php')";
                        $titulo = "Cadastrar";
                        $funcaoLoad = "mudarTamanho('btnCadastro', '142px', '42px', '16px')";
                        include('../../public/componentes/componenteButton.php');
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
    <a href="../../views/user/blogEditar.php">Blog</a>
    <a href="../../views/user/quemSomosEditaveis.php">Quem Somos</a>
    <a href="../../views/user/comoAjudarEditavel.php">Como Ajudar</a>
    <a href="../../views/user/eventos.php">Eventos</a>
    <a href="../../views/user/adocao.php">Adoção</a>
    <?php if ($isAdm): ?>
        <a href="../../views/user/listaAdocao-ADM.php">Adoções</a>
        <a href="../../views/user/listaEventosADM.php">Eventos</a>
        <a href="../../views/user/listaArrecadacoesADM.php">Arrecadações</a>
        <a href="../../views/user/listademembrosadm.php">Membros</a>
        <a href="../../views/user/listaUsuariosADM.php">Usuários</a>
        <a href="../../views/user/formAdocaoEditavel.php">Editar Formulário</a>
    <?php endif; ?>
</div>

<script>
    function toggleMenu() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('show');
    }
</script>