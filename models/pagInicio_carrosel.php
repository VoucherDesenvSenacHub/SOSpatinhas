<?php
    require_once "../config/database.php";
 
    class PagInicio_carrosel{
        private $conexao;
        private $tabela = 'paginicio_carrossel';
 
        public $id_pagInicio_carrosel;
        public $foto;
        public $texto;
 
        public function __construct($db){
            $this->conexao = $db;
        }

        public function getIdpagInicio_carrosel($id_pagInicio_carrosel){
            $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id_pagInicio_carrosel}";
            $resultado = $this->conexao->query($query);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
 
        public function create(){
            $query = "INSERT INTO {$this->tabela} (foto, texto) VALUES ('$this->foto', '$this->texto');";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }
 
        public function read() {
            $query = "SELECT * FROM {$this->tabela}";
            return $this->conexao->query($query);
        }
       
        public function update($atualizar) {
            if ($atualizar) {
                $query = "UPDATE {$this->tabela} SET ";
                $colunasArray = array_keys($atualizar);
                $params = [];
                $types = '';
                foreach ($atualizar as $coluna => $valor) {
                    $query .= $coluna . " = ?, ";
                    $params[] = $valor;
                    $types .= 's';  
                }
                $query = rtrim($query, ', ') . " WHERE id_pagInicio_carrossel = ?";  
                $stmt = $this->conexao->prepare($query);
                $params[] = $this->id_pagInicio_carrossel; 
                $types .= 'i';  
                $stmt->bind_param($types, ...$params);  
                if ($stmt->execute()) {
                    return true;
                } else {
                    throw new Exception('Erro ao atualizar ', 999);
                }
            } else {
                throw new Exception('Erro ao atualizar, dados insuficientes', 999);
            }
        }
        public function delete(){
            $query = "DELETE FROM {$this->tabela} WHERE {$this->id_pagInicio_carrossel}";
            return $this->conexao->query($query);
        }
    }