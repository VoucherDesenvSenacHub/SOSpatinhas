<?php

require_once "../config/database.php";

class Usuario{
    private $conexao;
    private $table = 'usuario';

    public $id_usuario;
    public $nome;
    public $email;
    public $senha;
    public $data_nasc;
    public $cpf;
    public $rg;
    public $telefone;
    public $foto;
    public $id_endereco;


    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdUsuario($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }


    public function create(){
        $query = "INSERT INTO {$this->table} (nome,email,senha,data_nasc,cpf,rg,telefone,foto) VALUES ('{$this->nome}','{$this->email}','{$this->senha}','{$this->data_nasc}','{$this->cpf}','{$this->rg}','{$this->telefone}','{$this->foto}');"; 
        return $this->conexao->query($query);
        
    }
    
    public function read() {
        $query = "SELECT * FROM {$this->table}"; 
        return $this->conexao->query($query);
    }
    
    public function update($atualizar) {
        if ($atualizar) {
            $query = "UPDATE {$this->table} SET ";
            $colunasArray = array_keys($atualizar);
            $params = [];
            $types = '';
            foreach ($atualizar as $coluna => $valor) {
                $query .= $coluna . " = ?, ";
                $params[] = $valor;
                $types .= 's';  
            }
            $query = rtrim($query, ', ') . " WHERE id_usuario = ?";  
            $stmt = $this->conexao->prepare($query);
            $params[] = $this->id_usuario; 
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
        $query = "DELETE FROM {$this->table} WHERE {$this->id}";
        return $this->conexao->query($query);
    }
}
