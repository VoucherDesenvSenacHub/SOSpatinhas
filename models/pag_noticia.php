<?php

class PagNoticia {
    private $tabela = 'pag_noticia';

    public $id_noticia;
    public $titulo;
    public $foto;
    public $link;

    public function __construct($id_noticia, $titulo, $foto, $link){
        $this->id_noticia = $id_noticia;
        $this->titulo = $titulo;
        $this->foto = $foto;
        $this->link = $link;
    }

    public function create() {
        $query = "INSERT INTO {$this->tabela} (id_noticia, titulo, foto, link) VALUES ('{$this->id_noticia}', '{$this->titulo}', '{$this->foto}', '{$this->link}');";
        return $query;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id_noticia = '{$this->id_noticia}';";
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

        $query += "WHERE id_noticia = {$this->id_noticia};";
        return $query;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id_noticia = {$this->id_noticia};";
        return $query;
    }
}
?>
