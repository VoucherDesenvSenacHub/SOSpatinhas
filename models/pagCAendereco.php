<?php

class pagCA_endereco{
    private $tabela = "pagCA_endereco";

    public $id_pagCA_endereco;
    public $foto;
    public $texto;


    public function __construct($id_pagCA_endereco, $foto, $texto){
        $this->id_pagCA_endereco = $id_pagCA_endereco;
        $this->foto = $foto;
        $this->texto = $texto;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_pagCA_endereco, foto, texto) VALUES ('{$this->id_pagCA_endereco}', '{$this->foto}', '{$this->texto}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_pagCA_endereco = '{$this->id_pagCA_endereco}';";
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

        $query += "WHERE id_pagCA_endereco = {$this->id_pagCA_endereco};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_pagCA_endereco = {$this->id_pagCA_endereco};";
        return $query;
    }
}
?>
