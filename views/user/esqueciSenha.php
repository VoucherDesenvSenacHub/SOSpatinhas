<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="esqueciSenha.css">
</head>

<body>
    <?php include('../templates/navbarUser.php')?>
    
    <section class="corpo-container">

        <section class="secao-login">
            <div class="esqSenha">
                <h2>Esqueci a senha</h2>
                <p>Não se preocupe! Um link será enviado na sua caixa de entrada.</p>
                <form>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <button type="button" value="enviar" onclick="adicionar()">Enviar</button>
                </form>
            </div>
        </section>

    </section>
    <script>
        function adicionar(){
            let input = document.getElementById('email');

            function emailValido(email) {
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailPattern.test(email);
            }

            if (input.value.trim() == "") {
                alert("Preencha todos os campos.");
                return;
            }

            if (input.value.trim() !== "" && emailValido(input.value) == false) {
                alert("Por favor, insira um e-mail válido.");
                return;
            }

            window.location.href = "confirmacaoEmail.php";
        }
    </script>
    <?php include('../../../componentes/footerAdm.php'); ?>
</body>
</html>