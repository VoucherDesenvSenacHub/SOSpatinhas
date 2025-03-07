<?php

class PagInicioFotos {
    private $tabela = 'pagInicio_fotos';

    protected $id_pagInicio_fotos;
    protected $foto;
    protected $texto;

    public function __construct($id_pagInicio_fotos, $foto, $texto, $rua, $numero, $bairro, $complemento){
        $this->id_pagInicio_fotos = $id_pagInicio_fotos;
        $this->foto = $foto;
        $this->texto = $texto;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_pagInicio_fotos, foto, texto) VALUES ('{$this->id_pagInicio_fotos}', '{$this->foto}', '{$this->texto}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagInicio_fotos = '{$this->id_pagInicio_fotos}';";
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

        $query += "WHERE id_pagInicio_fotos = {$this->id_pagInicio_fotos};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagInicio_fotos = {$this->id_pagInicio_fotos};";
        return $query;
    }
}
?>
