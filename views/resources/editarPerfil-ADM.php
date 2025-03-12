<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS Patinhas</title>
    <link rel="stylesheet" href="../css/editarPerfil-ADM.css">
</head>
<body>
    <?php include('../templates/navbarUser.php')?>

    <section class="corpo container" >
        <form action="" method="post" id="frmEditarPerfilADM">
            <dv class="conteudo">
                <div class="col">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="cpf" placeholder="CPF">
                    <input type="text" name="email" placeholder="E-mail">
                    <input type="text" name="telefone" placeholder="Número de Telefone/Celular">
                </div>
                <div class="col">
                    <input type="text" name="senha" placeholder="Senha">
                    <div id="btn-photo">
                        <div id="btns">
                            <button type="submit">Salvar</button>
                            <button type="button" class="cancelarBtn" onclick="resetERedirect()">Cancelar</button>
                        </div>
                        <div class="upload-container">
                            <div id="imgUpload">
                                <input type="file" id="image" name="image[]" accept="image/*" hidden>
                                <label for="image" id="imgLabel" class="upload-box">
                                    <img src="..\images\btnAdicionar.png" alt="Upload Icon">
                                </label>
                            </div>
                            <div id="filePreview">
                                <img src="..\images\userProfile.png" alt="" id="previewImg">
                            </div>
                        </div>
                    </div>
                </div>
            </dv>

        </form>
    </section>
    <script>
        document.getElementById('image').addEventListener('change', function (event) {
            const file = event.target.files[0]; 
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('previewImg').src = e.target.result; // Display the image
                }
                reader.readAsDataURL(file); // Convert file to base64
            }
        });

        function resetERedirect(){
            document.getElementById('frmEditarPerfilADM').reset();
            window.location.href = "PerfilADM.php";
        }
    </script>
    <?php include('../templates/footerUser.php')?>
</body>
</html>