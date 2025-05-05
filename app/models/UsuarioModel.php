<?php
require_once '../config/connect.php';

class UsuarioModel extends Connect{
    public function CRUD($jsonData){
        $stmt = $this->connection->prepare("CALL CRUD_USUARIO(:jsonData)");
        $stmt->bindParam(':jsonData', $jsonData, PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>