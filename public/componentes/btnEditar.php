<img src="../public/images/btnEditar.png" alt="" class="btnEditar">

<script>
const btnEditar = document.querySelector('.btnEditar');
btnEditar.addEventListener('click', function()
{
  const divPai = this.parentNode;
  const idDivPai = divPai.id;

  const inputSimples = divPai.querySelector('h2');
  const textarea = divPai.querySelector('p');
  const imagem = divPai.querySelector('img:nth-of-type(2)');
  abreModalEditar(inputSimples, textarea, imagem, idDivPai);
            
});

function abreModalEditar(input, textarea, img, idPai) {
  let conteudoModal = `
    <div class="overlayEditar"></div>
    
    <div class="popupEditar">
        <link rel="stylesheet" href="../../public/css/modalEditar.css">
        <button id="btnFecharPopup" aria-label="fechar">X</button>
        ;
  
  if (input) {
      conteudoModal += `
        <input type="text" id="inputBoxPopup" value="${input.textContent}">
      `;
  }
  
  if (textarea) {
      conteudoModal += `
        <textarea id="popup-textoArea" name="popup-textoArea">${textarea.textContent}</textarea>
      `;
  }
  
  if (img) {
      conteudoModal += `
        <div id="input_img">
            <img src="../public/images/cadastroAdocao-ADM/grampoBranco.png" id="grampo">
            <p id="enviar_foto">Enviar foto</p>
            <input type="file" id="inputFilePopup" accept="image/*">
            <img src="${img.src}" id="currentImgPreview" style="max-width: 100px;">
        </div>
      `;
  }
  
  conteudoModal += `
    <button id="submitForm" onclick="submitForm(${input.textContent},${textarea.value},${img.src},${idPai})">Salvar</button>
  </div>`;

  document.body.insertAdjacentHTML('beforeend', conteudoModal);
  document.getElementById('btnFecharPopup').onclick = function() {
      fecharModal();
  };
  document.querySelector('.overlayEditar').onclick = function() {
      fecharModal();
  };
};

function fecharModal(conteudoModal) {
  const overlay = document.querySelector(".overlayEditar");
  const popup = document.querySelector(".popupEditar");
  if (overlay.parentNode) {
    overlay.parentNode.removeChild(overlay);
  }
  if (popup.parentNode) {
    popup.parentNode.removeChild(popup);
  }

};
  
function submitForm(novoInput, novoTextarea, novoCaminhoImg, id) {
    const formData = {
        id: id,
        input: novoInput,
        textarea: novoTextarea,
        caminhoImg: novoCaminhoImg
    };
   
    const jsonData = JSON.stringify(formData);

    fetch('/ParteEditavelController/editar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: jsonData
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}
</script>

<style>
/* the parent has to have position: relative; */
  .btnEditar {
      position: absolute;
      top: 0;
      right: 0;
      width: 50px;
      height: 50px;
    
  }
</style>
