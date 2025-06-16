<?php
require_once 'app/config/connect.php';

class PermissaoModel extends Connect{
    public function checar($id){
        try {
            $stmt = $this->connection->prepare("SELECT P.PAGINA FROM PERMISSAO_ADM PMA JOIN PERMISSAO P ON PMA.ID_PERMISSAO = P.ID_PERMISSAO  WHERE PMA.FG_ACESSO = 1 AND PMA.ID_ADM = :id;");
            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            throw new Exception("Erro no banco de dados: " . $e->getMessage(), $e->getCode(), $e);
        }
    }
}
?>