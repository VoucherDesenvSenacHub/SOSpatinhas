<?php

class TesteModel {

    //fazer conexao com o banco do jeito da Aghata 

    public function crud($data) {
        $jsonData = json_encode($data);
        
        $stmt = $this->conn->prepare("CALL CRUD_TESTE(?)");
        $stmt->bind_param("s", $jsonData);

        if ($stmt->execute()) {
            if ($data['action'] == 'read') {
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