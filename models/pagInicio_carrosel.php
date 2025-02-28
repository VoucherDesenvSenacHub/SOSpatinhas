<?php
 
class PagInicio_carrosel{
    private $tabela = 'paginicio_carrossel';

    public $id_pagInicio_carrosel;
    public $foto;
    public $texto;

    public function __construct($id_pagInicio_carrosel, $foto, $texto){
        $this->id_pagInicio_carrosel = $id_pagInicio_carrosel;
        $this->foto = $foto;
        $this->texto = $texto;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_pagInicio_carrosel, foto, texto) VALUES ('{$this->id_pagInicio_carrosel}', '{$this->foto}', '{$this->texto}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagInicio_carrosel = '{$this->id_pagInicio_carrosel}';";
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

        $query += "WHERE id_pagInicio_carrosel = {$this->id_pagInicio_carrosel};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagInicio_carrosel = {$this->id_pagInicio_carrosel};";
        return $query;
    }
}