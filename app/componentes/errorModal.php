<?php if (isset($_SESSION['notifModal'])): ?>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      showModal(
        "<?php echo $_SESSION['notifModal']['tipo']; ?>",
        "<?php echo addslashes($_SESSION['notifModal']['titulo']); ?>",
        "<?php echo addslashes($_SESSION['notifModal']['mensagem']); ?>"
      );
    });
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
  .modalOverlay{
    display:none; 
    position:fixed; 
    top:0; 
    left:0; 
    width:100%; 
    height:100%;
    background-color: rgba(0,0,0,0.5); 
    z-index:1000;
  }

  .modalContent{
    background: #FFFFFF;
    margin:100px auto; 
    width:300px; 
    border-radius:10px; 
    position:relative;
  }

  .modalHeader{
    background: #F26666;
    padding: 8px;
    border-radius: 10px 10px 0 0;
  }

  #modalTitulo{
    text-align: center;
    color: #FFFBEA;
  }

  .modalFooter{
    text-align: center;
  }

  #btnModal{
    
  }
</style>