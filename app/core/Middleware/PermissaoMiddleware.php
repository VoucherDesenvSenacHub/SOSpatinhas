<?php
require_once "app/controllers/PermissaoAdminController.php";

class PermissaoMiddleware {
    public function handle($acao, $obj, $id) {
        $idUser = $_SESSION['idUser'];
        $permissao = $acao + $obj;
        $permissaoAdmin = new PermissaoAdminController();
        $resultado = $permissao->checar($idUser);
        if (!in_array($permissao, $resultado)) {
            echo "alert(Você não tem permissão para acessar essa página.)";
            exit;
        }
        return true;
    }
}
