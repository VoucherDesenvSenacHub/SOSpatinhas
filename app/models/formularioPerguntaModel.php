<?php
require_once '../config/connect.php';

class FormularioPerguntaModel extends Connect{
    public function CRUD($jsonData){
        $stmt = $this->connection->prepare("CALL CRUD_FORMULARIOPERGUNTA(:jsonData)");
        $stmt->bindParam(':jsonData', $jsonData, PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>
