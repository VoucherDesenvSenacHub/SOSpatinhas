<?php

class Banco{
    private $conexao;
    
    public function __construct() {
        $this->conexao = new mysqli('localhost', 'root', '', 'SOS_Patinhas');
        
        if ($this->conexao->connect_error) {
            die("Connection failed: " . $this->conexao->connect_error);
        }
    }

    
    public function conectar(){
        $this->conexao = new mysqli(self::host, self::usuario, self::senha, self::banco);
        if(!$this->conexao)
        {
            echo 'erro de conexão';
        }else
        {
            return $this->conexao;
        }
    }

    public function query($sql){
        return $this->conexao->query($sql);
    }

    public function fetch_all($resultado){
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function escape($string){
        return $this->conexao->real_escape_string($string);
    }

    public function fechar(){
        $this->conexao->close();
    }
}