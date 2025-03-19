<!-- modal do popUps das páginas editaveis (adm) -->

<div class="overlay" id="overlay"></div>
<div class="popup" id="popup">
    <button id="btn-fechar" arial-label="fechar"></button>
    <div id="input_img">
        <img src="..\images\cadastroAdocao-ADM\grampoBranco.png" id="grampo">
        <p>Enviar foto</p>
        <input type="file" id="input-file" accept="image/*">
    </div>
    <h6 id="line_h6">Enviar arquivos: JPG, PNG, JPNG</h6>
    <input type="text" id="input-box" placeholder="Digite o nome da pessoa">
    <textarea id="popup-textoArea" name="popup-textoArea" placeholder="Digite sua descrição..."></textarea>
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

#btn-fechar {
    width: 30px; /* Largura do botão */
    height: 30px; /* Altura do botão */
    background-color: transparent; /* Fundo transparente */
    border: none; /* Sem borda */
    cursor: pointer; /* Cursor de ponteiro ao passar o mouse */
    position: absolute; /* Posicionamento absoluto */
    top: 10px; /* Distância do topo da janela */
    right: 10px; /* Distância da direita da janela */
    z-index: 1000; /* Garante que o botão fique acima de outros elementos */
}

#btn-fechar::before,
#btn-fechar::after {
    content: ""; /* Necessário para criar os elementos */
    position: absolute; /* Posicionamento absoluto */
    top: 50%; /* Centraliza verticalmente */
    left: 50%; /* Centraliza horizontalmente */
    width: 4px; /* Largura da linha do X */
    height: 28px; /* Altura da linha do X */
    background-color: black; /* Cor da linha */
    border-radius: 2px; /* Bordas arredondadas para um visual mais suave */
    transform: translate(-50%, -50%); /* Centraliza o elemento */
}

#btn-fechar::before {
    transform: translate(-50%, -50%) rotate(45deg); /* Rotaciona para formar um lado do X */
}

#btn-fechar::after {
    transform: translate(-50%, -50%) rotate(-45deg); /* Rotaciona para formar o outro lado do X */
}

#popup-textoArea {
    width: 400px;
    height: 400px;
    resize: none;
    margin-bottom: 18px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    padding: 7px;
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
    function chamar_popup(layout_type)
    {
        // exibe o popup
        document.getElementById('overlay').style.display = 'flex';
        document.getElementById('popup').style.display = 'flex';
        
        // condição para mostrar qual tipo de layout será exibido
        if (layout_type === 'input') // layout com input 
        { 
            document.getElementById('input-box').style.display = 'block';
            document.getElementById('popup-textoArea').style.display = 'none';
            
        } else if (layout_type === 'upload') // layout apenas com upload da img 
        { 
            document.getElementById('input-box').style.display = 'none';
        } else if (layout_type === 'textArea') // layout do textArea
        {
            document.getElementById('input-box').style.display = 'none';
            document.getElementById('input_img').style.display = 'none';
            document.getElementById('line_h6').style.display = 'none';
            document.getElementById('popup-textoArea').style.display = 'block';
        }
    }


    //function modal_editar_text_area(btn_no_input)

    /*


    /////
    function modal_editar_input_simples(btn_input)
    {
        document.addEventListener('DOMContentLoaded', function()
        {
            const btn_input1 = Array.from(btn_input);

            // adiciona um evento de clique a cada botão de entrada
            btn_input1.forEach(button =>
            {
                button.onclick = function()
                {
                    document.getElementById('input-box').style.display = 'block';
                    document.getElementById('overlay').style.display = 'flex';
                    document.getElementById('popup').style.display = 'flex';
                };
            });
        });
    }

    function modal_editar_up_img(btn_no_input)
    {
        document.addEventListener('DOMContentLoaded', function()
        {
            const btn_no_input1 = Array.from(btn_no_input);

            // adiciona um evento de clique a cada botão de não entrada
            btn_no_input1.forEach(button =>
            {
                button.onclick = function()
                {
                    document.getElementById('input-box').style.display = 'none';
                    document.getElementById('overlay').style.display = 'flex';
                    document.getElementById('popup').style.display = 'flex';
                };
            });
        });
    };


    //////
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

        */
        
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
            document.getElementById('input_img').style.display = 'flex';
            document.getElementById('line_h6').style.display = 'block';
        };

        document.getElementById('btn-fechar').onclick = function()
        {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
            document.getElementById('input_img').style.display = 'flex';
            document.getElementById('line_h6').style.display = 'block';
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
</script>