<?php
require_once '../config/connect.php';

class PermissaoModel extends Connect{
    public function CRUD($jsonData){
        $stmt = $this->connection->prepare("CALL CRUD_PERMISSAO(:jsonData)");
        $stmt->bindParam(':jsonData', $jsonData, PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>