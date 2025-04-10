<img src="../../../images/btnEditar.png" alt="" class="btnEditar">

<script>
  btnEditar.addEventListener('click', function() {
      const divPai = this.parentNode;
      const idDivPai = divPai.id;
  
      const inputSimples = divPai.querySelector('h2');
      const textarea = divPai.querySelector('textarea');
      const imagem = divPai.querySelector('img');

      if (inputSimples || textarea || imagem) {
          abreModalEditar(inputSimples, textarea, imagem, idDivPai);
      }        
  });

function abreModalEditar(input, textarea, img, idPai) {
  let conteudoModal = `
    <div class="overlayEditar" id="overlayEditar"></div>
    <link rel="stylesheet" href="../../public/componentes/modalEditar.css">
    <div class="popupEditar" id="popupEditar">
        <button id="btnFecharPopup" aria-label="fechar">X</button>
        <div id="input_img">
            <img src="../../public/images/cadastroAdocao-ADM/grampoBranco.png" id="grampo">
            <p id="enviar_foto">Enviar foto</p>
            <input type="file" id="inputFilePopup" accept="image/*">
        </div>`;
  
  if (input) {
      modalContent += `
        <input type="text" id="inputBoxPopup" value="${input.textContent}">
      `;
  }
  
  if (textarea) {
      modalContent += `
        <textarea id="popup-textoArea" name="popup-textoArea">${textarea.value}</textarea>
      `;
  }
  
  if (img) {
      modalContent += `
        <div>
          <label for="imageUpload">Upload New Image:</label>
          <input type="file" id="imageUpload" accept="image/*">
          <p>Current Image:</p>
          <img src="${img.src}" id="currentImgPreview" style="max-width: 100px;">
        </div>
      `;
  }
  
  modalContent += `
    <button id="submitChanges" onclick="submitChanges(${input.textContent},${textarea.value},${img.src},${idPai})">Salvar</button>
  </div>`;

  document.body.insertAdjacentHTML('beforeend', modalContent);
  document.getElementById('btnFecharPopup').onclick = function() {
      fecharModal();
  };
  document.getElementById('overlayEditar').onclick = function() {
      fecharModal();
  };
};

function fecharModal() {
    document.getElementById('overlayEditar').remove();
    document.getElementById('popupEditar').remove();
};
  
function submitForm(novoInput, novoTextarea, novoCaminhoImg, id) {
    const formData = {
        id: id || null,
        input: novoInput || null,
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
