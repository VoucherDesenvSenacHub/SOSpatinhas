<?php
require_once 'app/config/connect.php';

class PermissaoModel extends Connect{
    public function checar($id){
        $stmt = $this->connection->prepare("SELECT PAGINA FROM PERMISSAO_MEMBRO_ADM PMA JOIN PERMISSAO P ON ID_PERMISSAO PMA = ID_PERMISSAO P  WHERE FG_ACESSO = 1 AND ID_MEMBRO_ADM = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>