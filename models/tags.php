<?php

class Tags {
    private $tabela = 'tags';

    public $id_tags;
    public $id_animal;
    public $tag_nome;

    public function __construct($id_tags, $id_animal, $tag_nome){
        $this->id_tags = $id_tags;
        $this->id_animal = $id_animal;
        $this->tag_nome = $tag_nome;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_tags, id_animal, tag_nome) VALUES ('{$this->id_tags}', '{$this->id_animal}', '{$this->tag_nome}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_tags = '{$this->id_tags}';";
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

        $query += "WHERE id_tags = {$this->id_tags};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_tags = {$this->id_tags};";
        return $query;
    }
}

