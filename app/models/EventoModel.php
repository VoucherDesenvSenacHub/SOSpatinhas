<?php
require_once 'app/config/connect.php';

class EventoModel extends Connect{
    public function CRUD($jsonData){
        $stmt = $this->connection->prepare("CALL CRUD_EVENTO(:jsonData)");
        $stmt->bindParam(':jsonData', $jsonData, PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>
