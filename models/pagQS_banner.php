<?php
    require_once "../config/database.php";

    class PagQS_Banner{
        private $conexao;
        private $tabela = 'pagQS_Banner';

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
            $query = "INSERT INTO {$this->tabela} (foto) VALUES ($this->foto);";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }

        public function read($coluna, $valor){
            $query = "SELECT * FROM {$this->tabela} WHERE {$coluna} = {$valor};";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }
        
        public function update($valores){
            $query = "UPDATE {$this->tabela} SET foto = {$valores} WHERE id_pagQS_Banner = {$this->id_pagQS_Banner};";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }

        public function delete(){
            $query = "DELETE FROM {$this->tabela} WHERE id_pagQS_Banner = {$this->id_pagQS_Banner};";
            $resultado = $this->conexao->query($query);
            return $resultado;
        }
    }