<?php

class pagQS_carrosselMiddle{
    private $tabela = "pagQS_carrosselMiddle";

    public $id_pagQS_carrosselMiddle;
    public $foto;
    public $texto;


    public function __construct($id_pagQS_carrosselMiddle, $foto, $texto){
        $this->id_pagQS_carrosselMiddle = $id_pagQS_carrosselMiddle;
        $this->foto = $foto;
        $this->texto = $texto;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_pagQS_carrosselMiddle, foto, texto) VALUES ('{$this->id_pagQS_carrosselMiddle}', '{$this->foto}', '{$this->texto}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagQS_carrosselMiddle = '{$this->id_pagQS_carrosselMiddle}';";
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

        $query += "WHERE id_pagQS_carrosselMiddle = {$this->id_pagQS_carrosselMiddle};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagQS_carrosselMiddle = {$this->id_pagQS_carrosselMiddle};";
        return $query;
    }
}
?>
