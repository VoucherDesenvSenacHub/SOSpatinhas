<?php

require_once "../config/database.php";

class pagQS_carrosselMiddle{
    private $conexao;
    private $tablea = "pagQS_carrosselMiddle";

    public $id_pagQS_carrosselMiddle;
    public $foto;
    public $texto;


    public function __construct($db){
        $this->conexao = $db;
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela}(id_pagQS_carrosselMiddle, foto, texto) VALUES (?, ?, ?)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param('ibs', $this->id_pagQS_carrosselMiddle, $this->foto, $this->texto);
        return $stmt->execute();
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagQS_carrosselMiddle = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param('i', $this->id_pagQS_carrosselMiddle);
        $stmt->execute();
        return $stmt->get_Result()->fetch_all(MYSQLI_ASSOC);
    }

    public function update($valores){
        if($valores){
            $query = "UPDATE {$this->tabela} SET";
            $colunasArray = array_keys($valores);
            $params = [];
            $types = '';
            foreach ($valores as $coluna => $valor){
                $query .= $coluna . " = ?, ";
                $params[] = $valor;
                $types .= 's';
            }
            $query = rtrim($query, ', ') . "WHERE id_pagQS_carrosselMiddle = ?";
            $stmt = $this->conexao->prepare($query);
            $params[] = $this->id_pagQS_carrosselMiddle;
            $types .= 'i';
            $stmt->bind_param($types, ...$params);
            if($stmt->execute()){
                return True;
            } else {
                throw new Exception("Erro ao atualizar", 666);
            }
        } else {
            throw new Exception("Erro ao atulizar, dados insuficientes", 777);
        }
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagQS_carrosselMiddle = ?";
        $stmt = $this->conexao->preapre($query);
        $stmt->bind_param('i', $this->id_pagQS_carrosselMiddle);
        return $stmt->execute();
    }
}

?>
