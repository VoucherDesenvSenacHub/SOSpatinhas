<div class="sidebar">
    <div class="logo">
        <a href="#">
            <img src="/sospatinhas/public/images/icons/iconPatinhasBranco.png" alt="Logo">
            <p>SOS Patinhas</p>
        </a>
    </div>
    <nav id="navSidebar">
        <ul id="sidebarUl">
            <li class="sidebarLi">
                <a href="/SOSPatinhas/adm/lista/animal">
                    <img src="/sospatinhas/public/images/icons/pata.png" alt="">
                    <p>Animais</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="/SOSPatinhas/adm/lista/evento">
                    <img src="/sospatinhas/public/images/icons/event.png" alt="">
                    <p>Eventos</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="/SOSPatinhas/adm/lista/adm">
                    <img src="/sospatinhas/public/images/icons/iconUserAdmBranco.png" alt="">
                    <p>Adms</p>
                </a>
            </li>

            <li id="logout">
                <a href="/sospatinhas/app/script/logout.php">
                    <img src="/sospatinhas/public/images/icons/logout.png" alt="">
                    <p>Sair</p>
                </a>
            </li>
        </ul>
    </nav>
</div>

<style>
    .sidebar {
        height: 100vh;
        min-height: 50px;
        width: 230px; 
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1100;
        background-color: var(--blue);
        overflow: visible;
    }

    .sidebar:hover {
        width: 230px;
        overflow: visible;
    }

    .logo {
        margin-bottom: 1rem;
    }

    .logo img {
        width: 60px;
        padding: 0 4px;
    }

    #navSidebar {
        height: 60vh;
        min-height: 300px;
    }

    .sidebarLi a, .logo a, #logout a {
        width: 230px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        text-decoration: none;
        padding: 10px 0;
        color: white;
        font-weight: bold;
    }

    .sidebarLi a:hover, #logout a:hover {
        background-image: linear-gradient(to right, #C6E1C4 7px, rgba(255, 255, 255, 0.1) 7px);
        color: white;
    }

    #logout {
        margin-top: 4.5rem;
    }

    #navSidebar img {
        width: 35px;
        text-align: right;
    }

    .sidebarLi p, #logout p {
        width: 123px;
        font-size: 16px;
        text-align: left;
        letter-spacing: 0.3px;
    }
</style>