<?php

class Membro {
    private $tabela = 'membro';

    public $id_membro;
    public $nome;
    public $email;
    public $senha; 
    public $telefone;

    public function __construct($id_membro, $nome, $email, $senha, $telefone){
        $this->id_membro = $id_membro;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone = $telefone;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_membro, nome, email, senha, telefone) VALUES ('{$this->id_membro}', '{$this->nome}', '{$this->email}', '{$this->senha}', '{$this->telefone}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_membro = '{$this->id_membro}';";
        return $query;
    }

    public function update($valores){
        $query = "UPDATE {$this->tabela} SET ";
        $colunasArray = array_keys($valores);

        for($contador = 0; $contador < count($valores); $contador ++){
            $coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];

            $query .= $contador != (count($valores)-1) ? $coluna . '= "'. $valor .'", ': $coluna . '= "'. $valor .'" ';
        }

        $query += "WHERE id_membro = {$this->id_membro};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_membro = {$this->id_membro};";
        return $query;
    }
}