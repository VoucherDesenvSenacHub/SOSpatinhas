<?php
require_once '../config/connect.php';

class AnimalModel extends Connect{
    public function CRUD($data){
        $jsonData = json_encode($data);
        
        $stmt = $this->connection->prepare("CALL CRUD_ANIMAL(?)");
        $stmt->bind_param("s", $jsonData);

        if ($stmt->execute()) {
            if ($data['acao'] == 'R') {
                $result = $stmt->get_result();
                $teste = $result->fetch_all(MYSQLI_ASSOC);
                return ['data' => $teste];
            } else {
                return ['message' => 'Deu certo :D'];
            }
        } else {
            return ['error' => 'Erro ao executar a procedure: ' . $stmt->error];
        }
    }
}


?>