<?php

class pagQS_carrosselBottom{
    private $tabela = "pagQS_carrosselBottom";

    public $id_pagQS_carrosselBottom;
    public $foto;


    public function __construct($id_pagQS_carrosselBottom, $foto){
        $this->id_pagQS_carrosselBottom = $id_pagQS_carrosselBottom;
        $this->foto = $foto;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_pagQS_carrosselBottom, foto) VALUES ('{$this->id_pagQS_carrosselBottom}', '{$this->foto}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagQS_carrosselBottom = '{$this->id_pagQS_carrosselBottom}';";
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

        $query += "WHERE id_pagQS_carrosselBottom = {$this->id_pagQS_carrosselBottom};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagQS_carrosselBottom = {$this->id_pagQS_carrosselBottom};";
        return $query;
    }
}
?>
