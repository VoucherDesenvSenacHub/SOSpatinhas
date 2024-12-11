<?php
    require_once "../config/database.php";

    class PagQS_Banner{
        private $conexao;
        private $tabela = 'pagqs_banner';

        public $id_pagQS_Banner;
        public $foto;

        public function __construct($db){
            $this->conexao = $db;
        }

        public function getIdpagQS_Banner($id_pagQS_Banner){
            $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id_pagQS_Banner}";
            $resultado = $this->conexao->query($query);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public function create(){
            $query = "INSERT INTO {$this->tabela} (foto) VALUES ('{$this->foto}');";
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
                $query = rtrim($query, ', ') . " WHERE id_pagQS_Banner = ?";  
                $stmt = $this->conexao->prepare($query);
                $params[] = $this->id_pagQS_Banner; 
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
            $query = "DELETE FROM {$this->tabela} WHERE id_pagQS_Banner = {$this->id_pagQS_Banner};";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }
    }   