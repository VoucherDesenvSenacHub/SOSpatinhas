<?php

class Banco{
    private $conexao;
    public function __construct() {
        $this->conexao = new mysqli('localhost', 'root', '', 'SOS_Patinhas');
        if ($this->conexao->connect_error) {
            die("Connection failed: " . $this->conexao->connect_error);
        }
    }


    //executa as queries
    public function query($sql){
        return $this->conexao->query($sql);
    }

    //pega tds os resultados de uma busca
    public function fetch_all($resultado){
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    //pega só um resultado
    public function fetch_assoc($resultado){
        return $resultado->fetch_assoc();
    }

    //evita SQL injections
    public function prepare($sql) {
        return $this->conexao->prepare($sql);
    }
    
    //previne que a query quebre quando tem caracteres especiais
    public function escape($string){
        return $this->conexao->real_escape_string($string);
    }

    //pega o id do ultimo insert feito
    public function pegaUltimoIdInserido() {
        return $this->conexao->insert_id;
    }
    
    //fecha a conexação com o banco
    public function fechar(){
        $this->conexao->close();
    }
}