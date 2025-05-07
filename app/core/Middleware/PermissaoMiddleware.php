<?php
require_once "app/controllers/PermissaoAdminController.php";

class PermissaoMiddleware {
    public function handle() {
        $idUser = $_SESSION['idUser']
        $permissao = new PermissaoAdminController();
        $resultado = $permissao->checar($idUser);
        if (!in_array($requestUri, $resultado)) {
            echo "alert(Você não tem permissão para acessar essa página.)";
            exit;
        }
        return true;
    }
}
