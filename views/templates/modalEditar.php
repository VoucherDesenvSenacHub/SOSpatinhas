<!-- modal da pagina quemSomosEditaveis
    
    btn-name = "nome do botao ou imagem"

-->

<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
    <div id="input_img">
        <img src="..\images\cadastroAdocao-ADM\grampoBranco.png" id="grampo">
        <p>Enviar foto</p>
        <input type="file" id="input-file" accept="image/*">
    </div>
    <h6>Enviar arquivos: JPG, PNG, JPNG</h6>
    <input type="text" id="input-box" placeholder="Digite o nome da pessoa">
    <?php 
        $funcaoClick = "btnModal()";
        $titulo = "Enviar";
        include("../templates/componenteButton.php")
    ?>
</div>

<style>
/* overlay padrão para encaixar o popup */
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

/* css da janela que será exibida */
.popup {
    display: none;
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: white;
    padding: 20px;
    z-index: 1000;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    width: 570px;
    height: 530px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* Janela cinza */
#input_img {
    background-color: #D9D9D9;
    padding: 20px;
    width: 380px;
    height: 325px;
    border-radius: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    display: flex;
    flex-direction: column;
    justify-content: space-around; /* espaço entre a imagem (do grampo) e o texto */
    align-items: center;
    position: relative; /* Adicionado para permitir o posicionamento absoluto do input */
    
}

#grampo { 
    width: 50%;
    height: auto;
    margin-bottom: 5px;
}

#input_img p {
    margin: 0;
    padding: 0;
    text-align: center;
}

#input-file {
    position: absolute;
    top: 0; 
    left: 0; 
    width: 100%; 
    height: 100%; 
    opacity: 0; 
    cursor: pointer;
    opacity: 0;
}

h6 {
    margin-bottom: 20px;
}

/* Caixa do input */
#input-box {
    width: 76%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 30px;
}



</style>

<script>
    document.addEventListener('DOMContentLoaded', function()
    {
        const btn_input = document.querySelectorAll('btn-name');
        const btn_no_input = document.querySelectorAll('.btn-card-parceiro');

        // Adiciona um evento de clique a cada botão pois é um carrossel
        btn_input.forEach(button =>
        {
            button.onclick = function()
            {
                document.getElementById('input-box').style.display = 'block';
                document.getElementById('overlay').style.display = 'flex';
                document.getElementById('popup').style.display = 'flex';
            };
        });

        btn_no_input.forEach(button =>
        {
            button.onclick = function()
            {
                document.getElementById('input-box').style.display = 'none';
                document.getElementById('overlay').style.display = 'flex';
                document.getElementById('popup').style.display = 'flex';
            };
        });
        
        // fecha o popup ao clicar no botao enviar
        /*document.getElementById('btn-enviar').onclick = function()
        {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }; */

        // fecha caso clique fora do popup
        document.getElementById('overlay').onclick = function()
        {
            this.style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        };

        document.getElementById('input-file').addEventListener('change', function (event) 
        {
            const file = event.target.files[0]; 
            if (file)
            {
                const reader = new FileReader();
                reader.onload = function (e)
                {
                    document.getElementById('grampo').src = e.target.result;
                    // css para encaixar a imagem
                    grampo.style.position = 'absolute';
                    grampo.style.top = '-5px';
                    grampo.style.left = '-5px';
                    grampo.style.width = 'calc(100% + 10px)';
                    grampo.style.height = 'calc(100% + 10px)';
                    grampo.style.objectFit = 'cover';
                    grampo.style.zIndex = '0';


                    document.getElementById('input-img').style.visibility = 'none';
                    document.getElementById('input-file').style.display = 'none';

                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>