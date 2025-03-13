<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/editarPerfilMembro.css">
</head>
<body>
    <?php include('../templates/navbarAdm.php'); ?>

    <section id="corpocontainer">

        <div id="contentEditarPerfil">
            <div id="divForm">
                <form id="formEditarPerfilMembro">
                    <input class="inputPerfil" type="text" placeholder="  Nome ">
                    <input class="inputPerfil" type="text" placeholder="  E-mail  ">
                    <input class="inputPerfil" type="text" placeholder="  Número Telefone/Celular  ">
                    <input class="inputPerfil" type="text" placeholder="  Senha  ">
                </form>
            </div>
            <div id="divButtons">
                <div id="editarFoto">
                    <img id="fotoMembro" src="../images/fotoPerfilMembro.png" alt="icone foto do Membro">
                    <button id="buttonEditarFoto">+</button>
                </div>

                <a href="#"><button class="buttonsPerfil" id="buttonSalvar" onclick="adicionar()">Salvar</button></a>
                <a href="listademembrosadm.php"><button class="buttonsPerfil" id="buttonCancelar">Cancelar</button></a>
            </div>

        </div>
    </section>
    <script>
        function adicionar(){
            if([...document.querySelectorAll("#formEditarPerfilMembro input")].every(input => input.value.trim() !== "")){
                alert("Update realizado com sucesso!")
                window.location.href = "listademembrosadm.php";
            }else{
                alert("Preencha todos os campos.")
            }
        }
    </script>
    <?php include('../templates/footerUser.php'); ?>   
</body>
</html>