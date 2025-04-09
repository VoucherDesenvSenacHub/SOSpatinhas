<nav class="navbar">
    <a class="navbarLogo" href="../../views/user/paginaInicio.php">
        <img src="../../public/images/Logo_Navbar.png" alt="Logo">
    </a>

    <ul class="navLinks">
        <a href="../../views/user/blog.php">Blog</a>
        <a href="../../views/user/quemSomos.php">Quem Somos</a>
        <a href="../../views/user/comoAjudar.php">Como Ajudar</a>
        <a href="../../views/user/eventos.php">Eventos</a>
        <a href="../../views/user/adocao.php">Adoção</a>
    </ul>

    <div class="navRight">
        <?php if ($taLogado): ?>
            <a class="navbarLogo" href="<?php echo ($isAdm) ? "../../views/adm/perfilADM.php" : "../../views/user/perfilUsuario.php"; ?>">
                <img src="<?php echo ($isAdm) ? "../images/icons/iconUserAdm.png" : "../images/icons/iconUser.png"; ?>" alt="Login">
            </a>
        <?php else: ?>
            <div id="btnLoginRegister">
                <div id="btnEntrarDiv">
                    <?php
                        $idBtn = "btnEntrar";
                        $funcaoClick = "redirecionar('login.php')";
                        $titulo = "Entrar";
                        $funcaoLoad = "mudarTamanho('btnEntrar', '142px', '42px', '16px')";
                        include('../../public/componentes/componenteButton.php');
                    ?>
                </div>
                <div id="btnCadastroDiv">
                    <?php
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

<div class="mobileMenu">
    <a href="../../views/user/blog.php">Blog</a>
    <a href="../../views/user/quemSomos.php">Quem Somos</a>
    <a href="../../views/user/comoAjudar.php">Como Ajudar</a>
    <a href="../../views/user/eventos.php">Eventos</a>
    <a href="../../views/user/adocao.php">Adoção</a>
    <?php if ($isAdm): ?>
        <a href="../../views/adm/listaAdocao.php">Adoções</a>
        <a href="../../views/adm/listaEvento.php">Eventos</a>
        <a href="../../views/adm/listaArrecadacao.php">Arrecadações</a>
        <a href="../../views/adm/listaMembro.php">Membros</a>
        <a href="../../views/adm/listaUsuario.php">Usuários</a>
        <a href="../../views/adm/editarFrmAdocao.php">Editar Formulário</a>
    <?php endif; ?>
</div>

<script>
    function toggleMenu() {
        const mobileMenu = document.querySelector('.mobileMenu');
        mobileMenu.classList.toggle('show');
    }
</script>