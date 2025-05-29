<?php
require_once 'app/config/connect.php';

class AnimalModel extends Connect{
    public function CRUD($jsonData){
        try{
            $stmt = $this->connection->prepare("CALL CRUD_ANIMAL(:jsonData)");
            $stmt->bindParam(':jsonData', $jsonData, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            throw new Exception("Erro no banco de dados: " . $e->getMessage(), $e->getCode(), $e);
        }
    }

    public function buscarTodos() {
        $sql = "SELECT * FROM animal";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarAnimal($id) {
        $sql = "SELECT * FROM animal WHERE ID_ANIMAL = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>
