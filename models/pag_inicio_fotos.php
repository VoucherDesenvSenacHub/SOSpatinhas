<?php

require_once "../config/database.php";

class PagInicioFotos {
    private $conexao;
    private $tabela = 'pagInicio_fotos';

    protected $id_pagInicio_fotos;
    protected $foto;
    protected $texto;

    public function __construct($db) {
        $this->conexao = $db;
    }

   
    public function create() {
        if ($this->foto && $this->texto) {
            $query = "INSERT INTO {$this->tabela} (foto, texto) VALUES (?, ?)";
            $stmt = $this->conexao->prepare($query);
            $stmt->bind_param("bs", $this->foto, $this->texto);      // "b" para blob e "s" para string    //blob = Coleção de dados binarwios guardados como uma unica entidade no bd

            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception('Erro ao cadastrar foto', 777);
            }
        } else {
            throw new Exception('Dados insuficientes para criar a foto', 777);
        }
    }

    
    public function getById($id_pagInicio_fotos) {
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagInicio_fotos = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("i", $id_pagInicio_fotos);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }

    
    public function read() {
        $query = "SELECT * FROM {$this->tabela}";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    
    public function update() {
        if ($this->id_pagInicio_fotos && ($this->foto || $this->texto)) {
            $query = "UPDATE {$this->tabela} SET ";

            
            $params = [];
            $types = '';
            if ($this->foto) {
                $query .= "foto = ?, ";
                $params[] = $this->foto;
                $types .= 'b';  
            }
            if ($this->texto) {
                $query .= "texto = ?, ";
                $params[] = $this->texto;
                $types .= 's';  
            }

            $query = rtrim($query, ', ') . " WHERE id_pagInicio_fotos = ?";
            $params[] = $this->id_pagInicio_fotos;
            $types .= 'i';  

            $stmt = $this->conexao->prepare($query);
            $stmt->bind_param($types, ...$params);  
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception('Erro ao atualizar foto', 999);
            }
        } else {
            throw new Exception('Erro ao atualizar foto, dados insuficientes', 999);
        }
    }

   
    public function delete() {
        if ($this->id_pagInicio_fotos) {
            $query = "DELETE FROM {$this->tabela} WHERE id_pagInicio_fotos = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bind_param("i", $this->id_pagInicio_fotos);
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception('Erro ao excluir foto', 555);
            }
        } else {
            throw new Exception('Erro ao excluir foto, id inválido', 555);
        }
    }
}
?>
