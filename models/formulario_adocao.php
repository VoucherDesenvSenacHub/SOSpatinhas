<?php

class Formulario_adocao{
    private $tabela = 'formulario_adocao';

    public $id_formulario_adocao;
    public $id_animal;
    public $id_usuario;
    public $termos;
    public $data;

    public function __construct($id_formulario_adocao, $id_animal, $id_usuario, $termos, $data){
        $this->id_formulario_adocao = $id_formulario_adocao;
        $this->id_animal = $id_animal;
        $this->id_usuario = $id_usuario;
        $this->termos = $termos;
        $this->data = $data;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_formulario_adocao, id_animal, id_usuario, termos, data) VALUES ('{$this->id_formulario_adocao}', '{$this->id_animal}', '{$this->id_usuario}', '{$this->termos}', '{$this->data}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_formulario_adocao = '{$this->id_formulario_adocao}';";
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

        $query += "WHERE id_formulario_adocao = {$this->id_formulario_adocao};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_formulario_adocao = {$this->id_formulario_adocao};";
        return $query;
    }
}

