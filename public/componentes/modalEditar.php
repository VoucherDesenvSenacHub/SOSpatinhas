<!-- modal dos popUps das páginas editaveis (adm) -->

<div class="overlayEditar" id="overlayEditar"></div>
<link rel="stylesheet" href="../css/modalEditar.css">
<div class="popupEditar" id="popupEditar">
    <button id="btnFecharPopup" arial-label="fechar"></button>
    <div id="input_img">
        <img src="..\images\cadastroAdocao-ADM\grampoBranco.png" id="grampo">
        <p id="enviar_foto">Enviar foto</p>
        <p id="enviar_foto_pix">Selecionar Qr Code</p>
        <input type="file" id="inputFilePopup" accept="image/*">
    </div>
    <label id="kit_label" for="kits">Escolha o kit</label>
    <select id="kits" name="kits">
        <option class="option_kit" value="kit_racao">Kit Ração</option>
        <option class="option_kit" value="kit_limpeza">Kit Limpeza</option>
        <option class="option_kit" value="kit_conforto">Kit Conforto</option>
        <option class="option_kit" value="kit_medico">Kit Médico</option>
        <option class="option_kit" value="kit_abono">Kit Abono</option>
        <option class="option_kit" value="kit_vacina">Kit Vacina</option>
    </select>
    <input type='text' id='titlePopup' placeholder='Digite o título...'>
    <label id="price_label">Digite o novo valor</label>
    <input type='text' id='pricePopup' placeholder='Ex: 50,00'>
    <h6 id="line_h6">Enviar arquivos: JPG, PNG, JPNG</h6>
    <input type="text" id="inputBoxPopup" placeholder="Digite o nome da pessoa">
    <textarea id="popup-textoArea" name="popup-textoArea" placeholder="Digite sua descrição..."></textarea>
    
    <?php 
        $funcaoClick = "reload()"; 
        $titulo = "Enviar";
        include("../templates/componenteButton.php")
    ?>
</div>

<script>
    function chamar_popup(layout_type)
    {
        // exibe o popup
        document.getElementById('overlayEditar').style.display = 'flex';
        document.getElementById('popupEditar').style.display = 'flex';
        
        // condição para mostrar qual tipo de layout será exibido
        if (layout_type === 'input_name') // layout com upload e nome 
        { 
            document.getElementById('inputBoxPopup').style.display = 'block';
            document.getElementById('input_img').style.display = 'flex';
            document.getElementById('enviar_foto').style.display = 'block';
            document.getElementById('line_h6').style.display = 'block';
            
        } else if (layout_type === 'upload') // layout apenas com upload da img 
        { 
            document.getElementById('input_img').style.display = 'flex';
            document.getElementById('enviar_foto').style.display = 'block';
            document.getElementById('line_h6').style.display = 'block';
            document.getElementById('inputBoxPopup').style.display = 'none';

        } else if (layout_type === 'textArea') // layout do textArea
        {
            document.getElementById('popup-textoArea').style.display = 'block';
            
        } else if (layout_type ==='input_titulo') // layout com titulo e descrição
        {
            document.getElementById('popupEditar').style.justifycontent = 'space-evenly';
            document.getElementById('titlePopup').style.display = 'block';
            document.getElementById('popup-textoArea').style.height = '255px';
            document.getElementById('popup-textoArea').style.display = 'block';

        } else if (layout_type === 'input_preco') // layout com imagem, titulo e valor
        {
            document.getElementById('pricePopup').style.display = 'block';
            document.getElementById('price_label').style.display = 'block';
            document.getElementById('kits').style.display = 'block';
            document.getElementById('kit_label').style.display = 'block';

            document.getElementById('input_img').style.marginTop = '25px';
            document.getElementById('titlePopup').style.placeholder = 'teste';

        } else if (layout_type === 'pix') // layout trocar pix
        {
            document.getElementById('input_img').style.display = 'flex';
            document.getElementById('enviar_foto_pix').style.display = 'block';
            document.getElementById('line_h6').style.display = 'block';

        }    
    };
        // fecha caso clique fora do popup
    document.getElementById('overlayEditar').onclick = function()
    {
        this.style.display = 'none';
        document.getElementById('overlayEditar').style.display = 'none';
        document.getElementById('popupEditar').style.display = 'none';
        document.getElementById('line_h6').style.display = 'none';
        document.getElementById('popup-textoArea').style.display = 'none';
        document.getElementById('inputBoxPopup').style.display = 'none';
        document.getElementById('input_img').style.display = 'none';
        document.getElementById('titlePopup').style.display = 'none';
        document.getElementById('pricePopup').style.display = 'none';
        document.getElementById('enviar_foto_pix').style.display = 'none';
        document.getElementById('kit_label').style.display = 'none';
        document.getElementById('kits').style.display = 'none';
        document.getElementById('price_label').style.display = 'none';
    };
    // fecha caso clique no X
    document.getElementById('btnFecharPopup').onclick = function()
    {
        document.getElementById('overlayEditar').style.display = 'none';
        document.getElementById('popupEditar').style.display = 'none';
        document.getElementById('line_h6').style.display = 'none';
        document.getElementById('popup-textoArea').style.display = 'none';
        document.getElementById('inputBoxPopup').style.display = 'none';
        document.getElementById('input_img').style.display = 'none';
        document.getElementById('titlePopup').style.display = 'none';
        document.getElementById('pricePopup').style.display = 'none';
        document.getElementById('enviar_foto_pix').style.display = 'none';
        document.getElementById('kit_label').style.display = 'none';
        document.getElementById('kits').style.display = 'none';
        document.getElementById('price_label').style.display = 'none';
    };

    // função para fazer upload da imagem
    document.getElementById('inputFilePopup').addEventListener('change', function (event) 
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
                document.getElementById('input_img').style.visibility = 'none';
                document.getElementById('inputFilePopup').style.display = 'none';
            }
            reader.readAsDataURL(file);
        }
    });
</script>






<!--

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
    -->