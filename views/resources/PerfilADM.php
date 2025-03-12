<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça nossa equipe e nossos parceiros. Somos uma equipe dedicada a fornecer soluções inovadoras para nossos clientes.">
    <title>Perfil ADM</title>
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
        
        <button>Editar perfil</button>

        <div class="buttons">
            <button>Adoção</button>
            <button>Eventos</button>
            <button>Arrecadação</button>
            <button>Membros</button>
            <button>Usuário</button>
            <button>Editar Formulário</button>
        </div>
    </section>

    <?php include('../templates/footerAdm.php'); ?>   

    <script>

document.addEventListener("DOMContentLoaded", function () {
        const buttonLinks = {
            "Adoção": "listaAdocao-ADM.php",
            "Eventos": "listaEventosADM.php",
            "Arrecadação": "listaArrecadacoesADM.php",
            "Membros": "listademembrosadm.php",
            "Usuário": "listaUsuariosADM.php",
            "Editar Formulário": "formAdocao.php"
            "Editar perfil": "editarPerfil-ADM.php"
        };

        document.querySelectorAll(".buttons button").forEach(button => {
            button.addEventListener("click", function () {
                const page = buttonLinks[this.textContent.trim()];
                if (page) {
                    window.location.href = page;
                }
            });
        });
    });

    </script>

</body>
</html>
