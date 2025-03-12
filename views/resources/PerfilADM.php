<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça nossa equipe e nossos parceiros. Somos uma equipe dedicada a fornecer soluções inovadoras para nossos clientes.">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/perfilAdm.css">
</head>
<body>
    <?php include('../templates/navbarAdm.php'); ?>

    <section class="corpo container">
        <div class="adm_foto">
            <img src="../images/foto_perfil.png" alt="Foto de perfil do administrador">
            <h1>Nome</h1>
            <p>ID administrador</p>
        </div> 
        
        <button>
            <a href="editarPerfil-ADM.php">Editar Perfil</a>
        </button>

        <div class="buttons">
            <button>
                <a href="listaAdocao-ADM.php">Adoção</a>
            </button>
            <button>
                <a href="listaEventosADM.php">Eventos</a>
            </button>
            <button>
                <a href="listaArrecadacoesADM.php">Arrecadação</a>
            </button>
            <button>
                <a href="listademembrosadm.php">Membros</a>
            </button>
            <button>
                <a href="listaUsuariosADM.php">Usuário</a>
            </button>
            <button>
                <a href="formAdocaoEditavel.php">Editar Formulário</a>
            </button>
        </div>
    </section>

    <?php include('../templates/footerAdm.php'); ?>   

    <script>

    // document.addEventListener("DOMContentLoaded", function () {
    //     const buttonLinks = {
    //         "Adoção": "listaAdocao-ADM.php",
    //         "Eventos": "listaEventosADM.php",
    //         "Arrecadação": "listaArrecadacoesADM.php",
    //         "Membros": "listademembrosadm.php",
    //         "Usuário": "listaUsuariosADM.php",
    //         "Editar Formulário": "formAdocao.php"
    //         "Editar perfil": "editarPerfil-ADM.php"
    //     };

    //     document.querySelectorAll(".buttons button").forEach(button => {
    //         button.addEventListener("click", function () {
    //             const page = buttonLinks[this.textContent.trim()];
    //             if (page) {
    //                 window.location.href = page;
    //             }
    //         });
    //     });
    // });

    </script>

</body>
</html>
