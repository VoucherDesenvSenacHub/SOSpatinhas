<?php 
    function gerarCardUsuario($nome, $status) {
        echo '
            <div class="membro">
                <img src="../images/userListaUsersADM.png">
                <h3>'.$nome.'</h3>
                <div class="status">
                    <div></div>
                    <span>'.$status.'</span>
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnVer">Ver</button>
            </div>
        ';
    }

    function gerarCardMembros($nome, $status) {
        echo '
            <div class="membro">
                <img src="../images/iconeADM.png" alt="">
                <h3>'.$nome.'</h3>
                <div class="status">
                    <div></div>
                    <span>'.$status.'</span>
                </div>
                <button id="btnExcluir">Excluir</button>
                <button id="btnEditar">Editar</button>
            </div>
        ';
    }




?>
