<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: white;
            position: sticky;
            top: 0;
            width: 100%;
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
            top: 0;
            right: 0;
            width: 100%;
            height: 100vh;
            background-color: white;
            box-shadow: -2px 2px 10px rgba(0, 0, 0, 0.1);
            flex-direction: column;
            align-items: center;
            padding-top: 80px;
            z-index: 999;
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

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hamburger {
                display: flex;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a class="navbar-logo" href="./editarPaginaInicio.php">
            <img src="../images/profileADM.png" alt="Logo">
        </a>

        <ul class="nav-links">
            <a href="./blogEditar.php">Blog</a>
            <a href="./quemSomosEditaveis.php">Quem Somos</a>
            <a href="./comoAjudarEditavel.php">Como Ajudar</a>
            <a href="./eventos.php">Eventos</a>
            <a href="./adocao.php">Adoção</a>
        </ul>

        <div class="nav-right">
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <a class="navbar-logo" href="#">
                <img src="../images/iconeADM.png" alt="Login">
            </a>
        </div>
    </nav>

    <div class="mobile-menu">
        <a href="./blogEditar.php">Blog</a>
        <a href="./quemSomosEditaveis.php">Quem Somos</a>
        <a href="./comoAjudarEditavel.php">Como Ajudar</a>
        <a href="./eventos.php">Eventos</a>
        <a href="./adocao.php">Adoção</a>
    </div>

    <script>
        function toggleMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            mobileMenu.classList.toggle('show');
        }
    </script>

</body>
</html>