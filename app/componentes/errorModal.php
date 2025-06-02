<?php if (isset($_SESSION['modal_error'])): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            showModal("<?php echo addslashes($_SESSION['modal_error']); ?>");
        });
    </script>
    <?php unset($_SESSION['modal_error']); ?>
<?php endif; ?>

<div id="errorModal" class="modal-overlay">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Erro encontrado!</h2>
    </div>
    <div class="modal-body">
      <p id="modalMessage">Mensagem de erro aqui...</p>
    </div>
    <div class="modal-footer">
      <button onclick="closeModal()">OK</button>
    </div>
  </div>
</div>

<script>
function showModal(message) {
    document.getElementById('modalMessage').innerText = message;
    document.getElementById('errorModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('errorModal').style.display = 'none';
}
</script>

<style>
    /* #errorModal{
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height:100%;
        z-index:1000;
        background-color: rgba(0,0,0,0.5);
    }

    #contentContainer{
        background:#fff; 
        padding:20px; 
        margin:0px auto; 
        width:300px; 
        border-radius:8px; 
        position:relative;
    }

    #tituloModal{
        background-color: red;
    } */
    .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    font-family: sans-serif;
    }

    .modal-content {
    background-color: #fff;
    width: 300px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    text-align: center;
    }

    .modal-header {
    background-color: #f18772;
    color: white;
    padding: 12px;
    font-weight: bold;
    font-size: 16px;
    }

    .modal-body {
    padding: 20px;
    color: #333;
    font-size: 14px;
    }

    .modal-footer {
    padding: 10px 0 20px;
    }

    .modal-footer button {
    background-color: #f18772;
    color: white;
    border: none;
    border-radius: 25px;
    padding: 10px 25px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s;
    }

    .modal-footer button:hover {
    background-color: #e1725c;
    }
</style>