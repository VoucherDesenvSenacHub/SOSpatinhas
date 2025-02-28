<?php

class pagCA_texto{
    private $tabela = "pagCA_texto";

    public $id_pagCA_texto;
    public $texto;


    public function __construct($id_pagCA_texto, $texto){
        $this->id_pagCA_texto = $id_pagCA_texto;
        $this->texto = $texto;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_pagCA_texto, texto) VALUES ('{$this->id_pagCA_texto}', '{$this->texto}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagCA_texto = '{$this->id_pagCA_texto}';";
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

        $query += "WHERE id_pagCA_texto = {$this->id_pagCA_texto};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagCA_texto = {$this->id_pagCA_texto};";
        return $query;
    }
}
?>
