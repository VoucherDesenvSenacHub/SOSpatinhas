<style>
    .sidebar{
        height: 100vh;
        min-height: 50px;
        width: 80px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1100;
        background-color: rgb(68, 128, 63);
        overflow: hidden;
        transition: width 0.2s;
    }

    .sidebar:hover{
        width: 230px;
        overflow: visible;
    }

    .logo{
        margin-bottom: 1rem;
    }

    .logo img{
        width: 60px;
        padding: 0 4px;
    }

    #navSidebar{
        height: 60vh;
        min-height: 300px;
    }

    .sidebarLi a, .logo a, #logout a{
        width: 230px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        text-decoration: none;
        padding: 10px 0;
        color: white;
        font-weight: bold;
    }

    .sidebarLi a:hover, #logout a:hover{
        background-image: linear-gradient(to right, #C6E1C4 7px, rgba(255, 255, 255, 0.1) 7px);
        color: white;
    }

    #logout{
        margin-top: 4.5rem;
    }

    #navSidebar img{
        width: 35px;
        text-align: right;
    }

    .sidebarLi p, #logout p{
        width: 123px;
        font-size: 16px;
        text-align: left;
        letter-spacing: 0.3px;
    }
</style>

<div class="sidebar">
    <div class="logo">
        <a href="#">
            <img src="../images/icons/iconPatinhasBranco.png" alt="Logo">
            <p>SOS Patinhas</p>
        </a>
    </div>
    <nav id="navSidebar">
        <ul id="sidebarUl">
            <li class="sidebarLi" class="sidebarLi">
                <a href="editarPaginaInicio.php">
                    <img src="../images/icons/casa.png" alt="">
                    <p>Inicio</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="listaAdocao-ADM.php">
                    <img src="../images/icons/pata.png" alt="">
                    <p>Adoções</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="listaEventosADM.php">
                    <img src="../images/icons/event.png" alt="">
                    <p>Eventos</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="listaArrecadacoesADM.php">
                    <img src="../images/icons/dinheiro.png" alt="">
                    <p>Arrecadações</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="listademembrosadm.php">
                    <img src="../images/icons/iconUserAdmBranco.png" alt="">
                    <p>Membros</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="listaUsuariosADM.php">
                    <img src="../images/icons/iconUserBranco.png" alt="">
                    <p>Usuários</p>
                </a>
            </li>

            <li class="sidebarLi">
                <a href="formAdocaoEditavel.php">
                    <img src="../images/icons/editarForm.png" alt="">
                    <p>Editar Formulário</p>
                </a>
            </li>

            <li id="logout">
                <a href="../script/logout.php">
                    <img src="../images/icons/logout.png" alt="">
                    <p>Sair</p>
                </a>
            </li>
        </ul>
    </nav>
</div>