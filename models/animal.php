<?php

class Animal {
    private $tabela = 'animal';

    public $id_animal;
    public $nome;
    public $raca;
    public $descricao;
    public $idade;
    public $porte;
    public $sexo;
    public $foto;

    public function __construct($id_animal, $nome, $raca, $descricao, $idade, $porte, $sexo, $foto) {
        $this->id_animal = $id_animal;
        $this->nome = $nome;
        $this->raca = $raca;
        $this->descricao = $descricao;
        $this->idade = $idade;
        $this->porte = $porte;
        $this->sexo = $sexo;
        $this->foto = $foto;
    }
   
    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_animal, nome, raca, descricao, idade, porte, sexo, foto) VALUES ('{$this->id_animal}', '{$this->nome}', '{$this->raca}', '{$this->descricao}', '{$this->idade}', '{$this->porte}', '{$this->sexo}', '{$this->foto}');";
        return $query;
    }

    
    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_animal = '{$this->id_animal}';";
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

        $query += "WHERE id_animal = {$this->id_animal};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_animal = {$this->id_animal};";
        return $query;
    }
}


?>