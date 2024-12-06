<?php

require_once "../config/database.php";

class Animal {
    private $conexao;
    private $tabela = 'animal';

    public $id_animal;
    public $nome;
    public $raca;
    public $descricao;
    public $idade;
    public $porte;
    public $sexo;
    public $foto;

    public function __construct($db) {
        $this->conexao = $db;
    }

  
    public function getIdAnimal($id_animal) {
        $query = "SELECT * FROM {$this->tabela} WHERE id_animal = ?";  
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("i", $id_animal); 
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

   
    public function create() {
        if($this->nome && $this->raca && $this->descricao && $this->idade && $this->porte && $this->sexo && $this->foto) {
            $query = "INSERT INTO {$this->tabela} (nome, raca, descricao, idade, porte, sexo, foto) 
                      VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conexao->prepare($query);
            $stmt->bind_param("sssssss", $this->nome, $this->raca, $this->descricao, $this->idade, $this->porte, $this->sexo, $this->foto);
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception('Erro ao cadastrar animal', 777);
            }
        } else {
            throw new Exception('Dados insuficientes para criar o animal', 777);
        }
    }

    
    public function read($id_animal) {
        if ($id_animal) {
            $query = "SELECT * FROM {$this->tabela} WHERE id_animal = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bind_param("i", $id_animal);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        } else {
            throw new Exception('Erro ao identificar o animal', 666);
        }
    }

 
    public function update($atualizarAnimal) {
        if ($atualizarAnimal) {
            $query = "UPDATE {$this->tabela} SET ";
            $colunasArray = array_keys($atualizarAnimal);
            $params = [];
            $types = '';
            foreach ($atualizarAnimal as $coluna => $valor) {
                $query .= $coluna . " = ?, ";
                $params[] = $valor;
                $types .= 's';  
            }
            $query = rtrim($query, ', ') . " WHERE id_animal = ?";  
            $stmt = $this->conexao->prepare($query);
            $params[] = $this->id_animal; 
            $types .= 'i';  
            $stmt->bind_param($types, ...$params);  
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception('Erro ao atualizar o animal', 999);
            }
        } else {
            throw new Exception('Erro ao atualizar o animal, dados insuficientes', 999);
        }
    }

   
    public function delete() {
        if ($this->id_animal) {
            $query = "DELETE FROM {$this->tabela} WHERE id_animal = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bind_param("i", $this->id_animal);
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception('Erro ao excluir o animal', 555);
            }
        } else {
            throw new Exception('Erro ao excluir o animal, id inválido', 555);
        }
    }
}


?>