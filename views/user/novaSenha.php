<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="novaSenha.css">
</head>

<body>
    <?php include('../templates/navbarUser.php')?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="login">
                <h2>Nova Senha</h2>
                <form>
                    <input type="password" placeholder="Digitar nova senha">
                    <input type="password" placeholder="Confirmar senha">
                    <button type="button" value="enviar" onclick="adicionar()">Enviar</button>
                </form>
            </div>
        </section>
    </section>
    <script>
        function adicionar(){
            if([...document.querySelectorAll("input")].every(input => input.value.trim() !== "")){
                window.location.href = "login.php";
            }else{
                alert("Insira uma nova senha.")
            }
        }
    </script>
    <?php include('../../../componentes/footerAdm.php'); ?>
</body>
</html>