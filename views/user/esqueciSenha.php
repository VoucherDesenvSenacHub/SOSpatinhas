<?php
  $cssLink  = '../../public/css/esqueciSenha.css';
  $tipo = 'User';
  include ('../../public/componentes/default/topHTML.php');
?>

<body>
    <section class="corpo-container">
        <section class="secao-login">
            <div class="esqSenha">
                <h2>Esqueci a senha</h2>
                <p>Não se preocupe! Um link será enviado na sua caixa de entrada.</p>
                <form>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <?php
        $idBtn = "btnEnviar";
        $funcaoClick = "redirecionar('confirmacaoEmail.php')";                             
        $funcaoLoad = "mudarTamanho('btnEnviar','100%', '100%')";                                                                     
        $titulo = "Enviar";                                           
        include('../../public/componentes/componenteButton.php');
    ?>
                </form>
            </div>
        </section>
    </section>

    <?php include('../../public/componentes/default/bottomHTML.php'); ?>
</body>
</html>