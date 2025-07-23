<?php if (isset($_SESSION['notifModal'])): ?>
  <script>
    function showModal(tipo = 'info', titulo = 'Mensagem', mensagem = '') {
  document.getElementById('modalTitulo').innerText = titulo;
  document.getElementById('modalMessage').innerText = mensagem;

  const header = document.getElementById('headerModal');
  const modal = document.getElementById('notifModal');
  const btnModal = document.getElementById('btnModal');

  header.classList.remove('modalSucesso', 'modalErro', 'modalAtencao', 'modalInfo');
  btnModal.classList.remove('modalSucesso', 'modalErro', 'modalAtencao', 'modalInfo');

  switch(tipo){
    case 'sucesso':
      header.classList.add('modalSucesso');
      btnModal.classList.add('modalSucesso');
      break;
    case 'erro':
      header.classList.add('modalErro');
      btnModal.classList.add('modalErro');
      break;
    case 'atencao':
      header.classList.add('modalAtencao');
      btnModal.classList.add('modalAtencao');
      break;
    case 'info':
    default:
      header.classList.add('modalInfo');
      btnModal.classList.add('modalInfo');
      break;
  }

  modal.style.display = 'flex';
}

function fecharModal() {
  document.getElementById('notifModal').style.display = 'none';
}
  </script>
  <?php unset($_SESSION['notifModal']); ?>
<?php endif; ?>

<div class="modalOverlay" id="notifModal">
  <div class="modalContent">
    <div class="modalHeader" id="headerModal"><h2 id="modalTitulo">Título</h2></div>
    <div class="modalBody"><p id="modalMessage">Mensagem</p></div>
    <div class="modalFooter"><button id="btnModal" onclick="fecharModal()">Ok</button></div>
  </div>
</div>

<script>
  function showModal(tipo = 'info', titulo = 'Mensagem', mensagem = '') {
    document.getElementById('modalTitulo').innerText = titulo;
    document.getElementById('modalMessage').innerText = mensagem;

    const header = document.getElementById('headerModal');
    const modal = document.getElementById('notifModal');

    header.class = 'modalHeader';

    switch(tipo){
      case 'sucesso':
        header.classList.add('modalSucesso');
        break
      case 'erro':
        header.classList.add('modalErro');
        break
      case 'atencao':
        header.classList.add('modalAtencao');
        break
      case 'info':
      default:
        header.classList.add('modalInfo');
        break
    }

    modal.style.display = 'flex';
  }

  function fecharModal() {
    document.getElementById('notifModal').style.display = 'none';
  }
</script>

<style>
  .modalOverlay {
  display: none; 
  position: fixed; 
  top: 0; 
  left: 0; 
  width: 100%; 
  height: 100%;
  background-color: rgba(0, 0, 0, 0.6); 
  z-index: 1000;
  justify-content: center;
  align-items: flex-start; 
  padding-top: 20px; 
}

.modalContent {
  background: #FFFFFF;
  width: 100%;
  max-width: 650px;
  border-radius: 12px; 
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  animation: modalSlideInFromTop 0.4s ease-out;
}

.modalHeader {
  padding: 18px 24px;
  border-radius: 12px 12px 0 0;
}

#modalTitulo {
  text-align: center;
  color: #FFFFFF;
  margin: 0;
  font-size: 20px;
  font-weight: bold;
  font-family: 'Arial', sans-serif;
}

.modalBody {
  padding: 78px 10px 20px 24px;
  font-size: 18px;
  color: #555;
  line-height: 1.6;
  font-family: 'Arial', sans-serif;
  min-height: 80px; 
  display: flex;
  align-items: center; 
  justify-content: center;
}

#modalMessage {
  margin: 0;
  width: 100%;
  overflow-wrap: break-word;
}

.modalFooter {
  padding: 20px 24px 24px 24px;
  text-align: center;
  display: flex; 
  justify-content: center; 
  align-items: center; 
}

#btnModal {
  padding: 12px 40px;
  border: none;
  border-radius: 25px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.3s ease;
  min-width: 100px;
  color: white;
}

#btnModal:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.modalSucesso {
  background:  #349582 !important;  
}

.modalSucesso ~ .modalBody ~ .modalFooter #btnModal {
  background:  #349582 ;
}

.modalSucesso ~ .modalBody ~ .modalFooter #btnModal:hover {
  background: #349582;
}

.modalErro {
  background:  #F26666  !important;
}

.modalErro ~ .modalBody ~ .modalFooter #btnModal {
  background:  #F26666 ;
}

.modalErro ~ .modalBody ~ .modalFooter #btnModal:hover {
  background:  #F26666 ;
}

.modalAtencao {
  background:  #F28C66  !important;
}

.modalAtencao ~ .modalBody ~ .modalFooter #btnModal {
  background:  #F28C66 ;
}

.modalAtencao ~ .modalBody ~ .modalFooter #btnModal:hover {
  background:  #F28C66 ;
}

.modalInfo {
  background:  #7BAEDC  !important;
}

.modalInfo ~ .modalBody ~ .modalFooter #btnModal {
  background:  #7BAEDC ;
}

.modalInfo ~ .modalBody ~ .modalFooter #btnModal:hover {
  background:  #7BAEDC ;
}

@keyframes modalSlideInFromTop {
  from {
    transform: translateY(-100px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@media (max-width: 480px) {
  .modalOverlay {
    padding-top: 10px;
  }
  
  .modalContent {
    width: 95%;
    margin: 0 10px;
  }
  
  .modalHeader {
    padding: 15px 20px;
  }
  
  #modalTitulo {
    font-size: 18px;
  }
  
  .modalBody {
    padding: 25px 20px; 
    font-size: 16px;
  }
  
  #btnModal {
    padding: 10px 30px;
    font-size: 14px;
  }
}


</style>