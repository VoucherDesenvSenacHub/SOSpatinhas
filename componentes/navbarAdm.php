<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    .navbar {
        background-color: white;
        position: sticky;
        top: 0;
        width: 100%;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
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
        font-family: 'Inter', sans-serif;
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

    #logos{
        gap: 1rem;
    }

    .navbar-logo{
        display: none;
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }

        .hamburger {
            display: flex;
        }

        .navbar{
            justify-content: right;
        }

        .navbar-logo{
            display: block;
            position: relative;
            right: 40rem;
        }
    }

    @media (max-width: 425px){
        .navbar-logo{
            right: 19rem;
        }
    }
</style>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-logo" href="../../views/adm/editarPaginaInicio.php">
            <img src="../../public/images/Logo_Navbar.png" alt="Logo">
        </a>

        <ul class="nav-links">
            <a href="../../views/adm/blogEditar.php">Blog</a>
            <a href="../../views/adm/quemSomosEditaveis.php">Quem Somos</a>
            <a href="../../views/adm/comoAjudarEditavel.php">Como Ajudar</a>
            <a href="../../views/adm/eventos.php?type=Adm">Eventos</a>
            <a href="../../views/adm/adocao.php?type=Adm">Adoção</a>
        </ul>

        <div class="nav-right">
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
        <hr>
        <a href="../../views/adm/listaAdocao-ADM.php">Adoções</a>
        <a href="../../views/adm/listaEventosADM.php">Eventos</a>
        <a href="../../views/adm/listaArrecadacoesADM.php">Arrecadações</a>
        <a href="../../views/adm/listademembrosadm.php">Membros</a>
        <a href="../../views/adm/listaUsuariosADM.php">Usuários</a>
        <a href="../../views/adm/formAdocaoEditavel.php">Editar Formulário</a>
    </div>

    <script>
        function toggleMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            mobileMenu.classList.toggle('show');
        }
    </script>

</body>
</html>