<?php
require_once 'app/config/connect.php';

class AnimalModel extends Connect{
    public function CRUD($jsonData){
        $stmt = $this->connection->prepare("CALL CRUD_ANIMAL(:jsonData)");
        $stmt->bindParam(':jsonData', $jsonData, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function buscarTodos() {
        $sql = "SELECT * FROM animal";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarAnimal($nome) {
        $sql = "SELECT * FROM animal WHERE NOME = :nome";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>
