<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/loginADM.css">
    <link rel="stylesheet" href="../public/css/default.css">
</head>

<body>
    <?php include('app/componentes/default/topHTML.php')?>  
    <section class="secaoLogin">
        <div class="login">
            <h2>Login</h2>
            <form action="login" method="POST" id="frmLoginADM">
                <input type="email" placeholder="Email:" name="EMAIL" required>
                <div class="containerSenha">
                    <input type="password" id="inputSenha" placeholder="Senha:" name="SENHA" required>  
                    <button type="button" class="btnIconOlho">
                        <img id="imgIconOlho" src="../public/images/icons/iconOlhoAberto.png" alt="Mostrar senha">
                    </button>
                </div>
        </div>
                <?php if (isset($_SESSION['erroLogin'])): ?>
                        <p style="color:red;"><?php echo htmlspecialchars($_SESSION['erroLogin']); ?></p>
                        <?php unset($_SESSION['erroLogin']); ?>
                    <?php endif; ?>
                <?php
                    $idBtn = "btnEntrarAdm";
                    $funcaoClick = "submitComValidacao('frmLoginADM')";
                    $funcaoLoad = "mudarTamanho('btnEntrarAdm', '188px', '50px', '20px',  )";
                    $titulo = "Entrar";
                    include('app/componentes/componenteButton.php');
                ?>
            </form>
        </div>
    </section>
    <script>
        document.querySelector(".btnIconOlho").addEventListener("click", function () {
            const inputSenha = document.getElementById("inputSenha");
            const imgIconOlho = this.querySelector("img");

            if (inputSenha.type === "password") {
                inputSenha.type = "text";
                imgIconOlho.src = "../public/images/icons/iconOlhoFechado.png";
                imgIconOlho.alt = "Esconder senha";
            } else {
                inputSenha.type = "password";
                imgIconOlho.src = "../public/images/icons/iconOlhoAberto.png";
                imgIconOlho.alt = "Mostrar senha";
            }
        });
    </script>
    <?php include('app/componentes/default/bottomHTML.php'); ?>
</body>
</html>